@extends('website.layouts.master')


@section('content')


	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Courses</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Courses</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Courses List 2 -->
	<section class="courses-list2 pb40">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-xl-9">
					<div class="row courses_list_heading style2">
						<div class="col-xl-4 p0">
							<div class="instructor_search_result style2">
								<p class="mt10 fz15"><span class="color-dark pr10">85 </span> results <span class="color-dark pr10">1,236</span> Video Tutorials</p>
							</div>
						</div>
						<div class="col-xl-8 p0">
							<div class="candidate_revew_select style2 text-right">
								<ul class="mb0">
									<li class="list-inline-item">
										<select class="selectpicker show-tick">
											<option>Newly published</option>
											<option>Recent</option>
											<option>Old Review</option>
										</select>
									</li>
									<li class="list-inline-item">
										<div class="candidate_revew_search_box course fn-520">
											<form class="form-inline my-2 my-lg-0">
										    	<input class="form-control mr-sm-2" type="search" placeholder="Search our instructors" aria-label="Search">
										    	<button class="btn my-2 my-sm-0" type="submit"><span class="flaticon-magnifying-glass"></span></button>
										    </form>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="row courses_container style2">
                        @foreach ($impianti as $implant)
                        <div class="col-lg-12 p0 item" data-id="{{$implant->id}}"
                            data-category="{{$implant->provincia}} {{$implant->category->titolo}} @foreach($implant->service as $serv) {{str_replace(' ','-', $serv->titolo)}} @endforeach ">

							<div class="courses_list_content">
								<div class="top_courses list">
									<div class="thumb">
										<img class="img-whp" src="{{ url('/storage/'.$implant->immagine) }}" alt="{{$implant->immagine}}">
										<div class="overlay">
											<div class="icon"><span class="flaticon-like"></span></div>
											<a class="tc_preview_course" href="#">Visualizza</a>
										</div>
									</div>
									<div class="details">
										<div class="tc_content">
											<p>{{$implant->citta}}</p>
											<h5>{{$implant->titolo}}</h5>
											<p>{!! $implant->descrizione !!}</p>
										</div>
										<div class="tc_footer">
											<ul class="tc_meta float-left fn-414">
												<li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
												<li class="list-inline-item"><a href="#">1548</a></li>
												<li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
												<li class="list-inline-item"><a href="#">25</a></li>
											</ul>
											<div class="tc_price float-right fn-414">€ {{$implant->prezzo}}</div>
											<ul class="tc_review float-right fn-414">
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
												<li class="list-inline-item"><a href="#">(5)</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
                        @endforeach


					</div>
					<div class="row">
						<div class="col-lg-12 mt50">
							<div class="mbp_pagination">
								<ul class="page_navigation">
								    <li class="page-item disabled">
								    	<a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span class="flaticon-left-arrow"></span> Prev</a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">1</a></li>
								    <li class="page-item active" aria-current="page">
								    	<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
								    </li>
								    <li class="page-item"><a class="page-link" href="#">3</a></li>
								    <li class="page-item"><a class="page-link" href="#">...</a></li>
								    <li class="page-item"><a class="page-link" href="#">14</a></li>
								    <li class="page-item">
								    	<a class="page-link" href="#">Next <span class="flaticon-right-arrow-1"></span></a>
								    </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				@include('website.impianti.sidebar')
			</div>
		</div>
	</section>
@endsection

@push('script')
<script>

    var $filterCheckboxes = $('input[type="checkbox"]');

    // Read All Available Filter Groups
    var allFilters = [];
    $filterCheckboxes.each(function() {
        if ($.inArray(this.name,allFilters) == -1){
          allFilters.push(this.name);
      }
    });
     console.log(allFilters);






    $filterCheckboxes.on('change', function() {

    // create a collection containing all of the filterable elements
    var $filteredResults = $('.item');

      var $filterCategoryApplied = 0;

    $.each(allFilters, function(arIndex, filterName) {
    // console.log(filterName);
      var $filterCheckboxCategory = $('input[name='+filterName+']').filter(':checked');

    console.log(filterName + ' length = ' + $filterCheckboxCategory.length);

     if ( $filterCheckboxCategory.length === 0 ) {
    //    alert('none checked for ' + filterName);
      $filteredResults = [];
     }
    });




    console.log('start checking');



      // Read Selectetd Filters
    var selectedFilters = {};
    $filterCheckboxes.filter(':checked').each(function() {
      if (!selectedFilters.hasOwnProperty(this.name)) {
        selectedFilters[this.name] = [];
      }
      selectedFilters[this.name].push(this.value);
    });







    // loop over the selected filter name -> (array) values pairs
    $.each(selectedFilters, function(name, filterValues) {

    // console.log(selectedFilters['categoria'].length);
    // console.log(name);
    // console.log(filterValues);
    // console.log(filterValues.length);



      // filter each .flower element
      $filteredResults = $filteredResults.filter(function() {

        var matched = false,
          currentFilterValues = $(this).data('category').split(' ');

        // loop over each category value in the current .flower's data-category
        $.each(currentFilterValues, function(_, currentFilterValue) {

          // if the current category exists in the selected filters array
          // set matched to true, and stop looping. as we're ORing in each
          // set of filters, we only need to match once

          if ($.inArray(currentFilterValue, filterValues) != -1) {
            matched = true;
            return false;
          }
        });

        // if matched is true the current .flower element is returned
        return matched;

      });
    });
    $('.item').hide().filter($filteredResults).show();

    });
    </script>
@endpush

