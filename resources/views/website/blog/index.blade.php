@extends('website.layouts.master')


@section('content')

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-xl-6 offset-xl-3 text-center">
					<div class="breadcrumb_content">
						<h4 class="breadcrumb_title">Blog</h4>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Blog</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Main Blog Post Content -->
	<section class="blog_post_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-xl-9">
					<div class="main_blog_post_content">
						<div class="row">
							<div class="col-sm-6 col-lg-6 col-xl-6">
								<div class="blog_grid_post mb30">
									<div class="thumb">
										<img class="img-fluid" src="images/blog/bg1.jpg" alt="bg1.jpg">
										<div class="tag">Marketing</div>
										<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
									</div>
									<div class="details">
										<h3>Learning, Friendship and Fun</h3>
										<ul class="post_meta">
											<li><a href="#"><span class="flaticon-profile"></span></a></li>
											<li><a href="#"><span>Ali Tufan</span></a></li>
											<li><a href="#"><span class="flaticon-comment"></span></a></li>
											<li><a href="#"><span>7 comments</span></a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-6 col-xl-6">
								<div class="blog_grid_post mb30">
									<div class="thumb">
										<img class="img-fluid" src="images/blog/bg2.jpg" alt="bg2.jpg">
										<div class="tag">Marketing</div>
										<div class="post_date"><h2>28</h2> <span>DECEMBER</span></div>
									</div>
									<div class="details">
										<h3>Learning, Friendship and Fun</h3>
										<ul class="post_meta">
											<li><a href="#"><span class="flaticon-profile"></span></a></li>
											<li><a href="#"><span>Ali Tufan</span></a></li>
											<li><a href="#"><span class="flaticon-comment"></span></a></li>
											<li><a href="#"><span>7 comments</span></a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
									</div>
								</div>
							</div>

						</div>
						<div class="row">
							<div class="col-lg-12">
								<div class="mbp_pagination mt20">
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
				</div>
			@include('website.blog.sidebar')
			</div>
		</div>
	</section>

@endsection

@push('script')

@endpush
