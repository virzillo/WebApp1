@extends('website.layouts.master')


@section('content')

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Contact Us</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- How It's Work -->
	<section class="our-contact">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-placeholder-1"></span></div>
						<h4>Dove siamo</h4>
						<p>Via Beato Junipero Serra, 19 70125 Bari (BA)</p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-phone-call"></span></div>
						<h4>Chiamaci</h4>
						<p class="mb0">Telefono: 080 809.33.70 </p>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4">
					<div class="contact_localtion text-center">
						<div class="icon"><span class="flaticon-email"></span></div>
						<h4>Scrivici</h4>
						<p>info@msgpubblicita.it</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<div class="h600" id="">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3006.5928760545817!2d16.882433115715962!3d41.099741179291684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sVia%20Beato%20Junipero%20Serra%2C%2019%2070125%20Bari%20(BA)!5e0!3m2!1sit!2sit!4v1594048857150!5m2!1sit!2sit" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
					{{-- <div class="h600" id="map-canvas"></div> --}}
				</div>
				<div class="col-lg-6 form_grid">
					<h4 class="mb5">Scrivi un messaggio</h4>
					<p>Richiedi informazioni.</p>
		            <form class="contact_form" id="contact_form" name="contact_form" action="#" method="post" novalidate="novalidate">
						<div class="row">
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputName">Nome</label>
									<input id="form_name" name="form_name" class="form-control" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputEmail">Email</label>
			                    	<input id="form_email" name="form_email" class="form-control required email" required="required" type="email">
			                    </div>
			                </div>
			                <div class="col-sm-12">
			                    <div class="form-group">
			                    	<label for="exampleInputSubject">Oggetto</label>
				                    <input id="form_subject" name="form_subject" class="form-control required" required="required" type="text">
								</div>
			                </div>
			                <div class="col-sm-12">
	                            <div class="form-group">
	                            	<label for="exampleInputEmail1">Il tuo messaggio</label>
	                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required"></textarea>
	                            </div>
			                    <div class="form-group ui_kit_button mb0">
				                    <button type="button" class="btn dbxshad btn-lg btn-thm circle white">Button</button>
			                    </div>
			                </div>
		                </div>
		            </form>
				</div>
			</div>
		</div>
	</section>
@endsection

@push('script')

@endpush
