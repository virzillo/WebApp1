@extends('website.layouts.master')


@section('content')
	<!-- 2nd Home Slider -->
	<div class="home1-mainslider">
		<div class="container-fluid p0">
			<div class="row">
				<div class="col-lg-12">
					<div class="main-banner-wrapper">
					    <div class="banner-style-one owl-theme owl-carousel">
                            <div class="slide slide-one" style="background-image: url(images/home/2.jpg);height: 95vh;">
					            <div class="container">
					                <div class="row home-content">
					                    <div class="col-lg-12 text-center p0">
					                        <h3 class="banner-title">Self EducatIon Resources and Infos</h3>
					                        <p>Technology is brining a massive wave of evolution on learning things on different ways</p>
					                        <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
					                    </div>
					                </div>
					            </div>
					        </div>
                           @foreach ($sliders as $slider)
                           <div class="slide slide-two" style="background-image: url({{ url('/storage/'.$slider->immagine) }}); height: 95vh;">
                            <div class="container">
                                <div class="row home-content">
                                    <div class="col-lg-12 text-center p0">
                                        <h3 class="banner-title">{{$slider->titolo}}</h3>
                                        <p>{{$slider->sottotitolo}}</p>
                                        <?php if (isset($slider->link)) { ?>
                                              <div class="btn-block"><a href="{{$slider->link}}" class="banner-btn">Scopri di più</a></div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                           @endforeach
					    </div>
					    <div class="carousel-btn-block banner-carousel-btn">
					        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i> <span class="left">PR <br> EV</span></span>
					        <span class="carousel-btn right-btn"><span class="right">NE <br> XT</span> <i class="flaticon-right-arrow-1 right"></i></span>
					    </div><!-- /.carousel-btn-block banner-carousel-btn -->
					</div><!-- /.main-banner-wrapper -->
				</div>
			</div>
		</div>
		{{-- <div class="container home_iconbox_container">
			<div class="row">
				<div class="col-lg-12">
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="home_icon_box">
								<div class="icon"><img src="images/home/hicon1.png" alt="hicon1.png"></div>
								<p>Learn From The Experts</p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="home_icon_box">
								<div class="icon mt15"><img src="images/home/hicon2.png" alt="hicon2.png"></div>
								<p>Book Library & Store</p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="home_icon_box">
								<div class="icon"><img src="images/home/hicon3.png" alt="hicon3.png"></div>
								<p>Worldwide Recognize</p>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="home_icon_box">
								<div class="icon"><img src="images/home/hicon4.png" alt="hicon4.png"></div>
								<p>Best Industry Leaders</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> --}}
	</div>

<!-- about3 home3 -->
<section class="home3_about home3_wave">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-xl-6">
                <div class="about_home3">
                    <h3>What We Do</h3>
                    <h5>Striving to make the web a more beautiful place every single day</h5>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                    <a href="#" class="btn about_btn_home3">View More</a>
                    <ul class="partners_thumb_list">
                        <li class="list-inline-item"><a href="#"><img class="img-fluid" src="images/partners/1.png" alt="1.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img class="img-fluid" src="images/partners/2.png" alt="2.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img class="img-fluid" src="images/partners/3.png" alt="3.png"></a></li>
                        <li class="list-inline-item"><a href="#"><img class="img-fluid" src="images/partners/4.png" alt="4.png"></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-xl-6">
                <div class="row">
                    <div class="col-sm-6 col-lg-6">
                        <div class="home3_about_icon_box one">
                            <span class="icon"><span class="flaticon-account"></span></span>
                            <div class="details">
                                <h4>Create Account</h4>
                                <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="home3_about_icon_box two">
                            <span class="icon"><span class="flaticon-online"></span></span>
                            <div class="details">
                                <h4>Create Online Course</h4>
                                <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="home3_about_icon_box three">
                            <span class="icon"><span class="flaticon-student-1"></span></span>
                            <div class="details">
                                <h4>Interact with Students</h4>
                                <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-6">
                        <div class="home3_about_icon_box four">
                            <span class="icon"><span class="flaticon-employee"></span></span>
                            <div class="details">
                                <h4>Achieve Your Goals</h4>
                                <p>Sed cursus turpis vitae tortor donec eaque ipsa quaeab illo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about_home3_shape_container">
                    <div class="about_home3_shape"><img src="images/about/shape1.png" alt="shape1.png"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Top Course home3 -->
<section class="home3_top_course pb0 pt0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Browse Our Top Courses</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
             <div class="col-lg-12">
                 <div id="options" class="alpha-pag full">
                    <div class="option-isotop">
                        <ul id="filter" class="option-set" data-option-key="filter">
                            <li class="list-inline-item"><a href="#all" data-option-value="*" class="selected">Developer</a></li>
                            <li class="list-inline-item"><a href="#business" data-option-value=".business">Business</a></li>
                            <li class="list-inline-item"><a href="#design" data-option-value=".design">Design</a></li>
                            <li class="list-inline-item"><a href="#web" data-option-value=".web">Web</a></li>
                            <li class="list-inline-item"><a href="#marketing" data-option-value=".marketing">Marketing</a></li>
                        </ul>
                    </div>
                </div><!-- FILTER BUTTONS -->
                 <div class="emply-text-sec">
                     <div class="row" id="masonry_abc">
                         <div class="col-md-6 col-lg-4 col-xl-3 business design">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                    <div class="overlay">
                                        <div class="tag">Best Seller</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Preview Course</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Ali TUFAN</p>
                                        <h5>Introduction Web Design with HTML</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <div class="tc_price float-right">$69.95</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-lg-4 col-xl-3 business marketing">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="images/courses/t2.jpg" alt="t2.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top Seller</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Preview Course</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Ali TUFAN</p>
                                        <h5>Designing a Responsive Mobile Website with Muse</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <div class="tc_price float-right">$69.95</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-lg-4 col-xl-3 web design">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="images/courses/t3.jpg" alt="t3.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top Seller</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Preview Course</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Ali TUFAN</p>
                                        <h5>Adobe XD: Prototyping Tips and Tricks</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <div class="tc_price float-right">$69.95</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-lg-4 col-xl-3 business Web">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="images/courses/t4.jpg" alt="t4.jpg">
                                    <div class="overlay">
                                        <div class="tag">Best Seller</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Preview Course</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Ali TUFAN</p>
                                        <h5>Sketch: Creating Responsive SVG</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <div class="tc_price float-right">$69.95</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-lg-4 col-xl-3 marketing">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="images/courses/t5.jpg" alt="t5.jpg">
                                    <div class="overlay">
                                        <div class="tag">Best Seller</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Preview Course</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Ali TUFAN</p>
                                        <h5>Design Instruments for Communication</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <div class="tc_price float-right">$69.95</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-lg-4 col-xl-3 business marketing">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="images/courses/t6.jpg" alt="t6.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top Seller</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Preview Course</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Ali TUFAN</p>
                                        <h5>How to be a DJ? Make Electronic Music</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <div class="tc_price float-right">$69.95</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-lg-4 col-xl-3 design Web">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="images/courses/t7.jpg" alt="t7.jpg">
                                    <div class="overlay">
                                        <div class="tag">Top Seller</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Preview Course</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Ali TUFAN</p>
                                        <h5>How to Make Beautiful Landscape Photos?</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <div class="tc_price float-right">$69.95</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                         <div class="col-md-6 col-lg-4 col-xl-3 business">
                            <div class="top_courses">
                                <div class="thumb">
                                    <img class="img-whp" src="images/courses/t8.jpg" alt="t8.jpg">
                                    <div class="overlay">
                                        <div class="tag">Best Seller</div>
                                        <div class="icon"><span class="flaticon-like"></span></div>
                                        <a class="tc_preview_course" href="#">Preview Course</a>
                                    </div>
                                </div>
                                <div class="details">
                                    <div class="tc_content">
                                        <p>Ali TUFAN</p>
                                        <h5>Fashion Photography From Professional</h5>
                                        <ul class="tc_review">
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                            <li class="list-inline-item"><a href="#">(6)</a></li>
                                        </ul>
                                    </div>
                                    <div class="tc_footer">
                                        <ul class="tc_meta float-left">
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                            <li class="list-inline-item"><a href="#">1548</a></li>
                                            <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                            <li class="list-inline-item"><a href="#">25</a></li>
                                        </ul>
                                        <div class="tc_price float-right">$69.95</div>
                                    </div>
                                </div>
                            </div>
                         </div>
                     </div>
                 </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about_home3_shape_container">
                    <div class="about_home3_shape2"><img src="{{url('/website')}}/images/about/shape2.png" alt="shape2.png"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- School category courses -->
<section class="school-category-courses pt30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Via School Categories Courses</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box home3" style="background-image: url(images/courses/1.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Design</h5>
                            <p>Over 800 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box home3" style="background-image: url(images/courses/2.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Business</h5>
                            <p>Over 1,400 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box home3" style="background-image: url(images/courses/3.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Software Development</h5>
                            <p>Over 350 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box home3" style="background-image: url(images/courses/4.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Web Development</h5>
                            <p>Over 640 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box home3" style="background-image: url(images/courses/5.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Photography</h5>
                            <p>Over 740 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box home3" style="background-image: url(images/courses/6.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Audio + Music</h5>
                            <p>Over 120 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box home3" style="background-image: url(images/courses/7.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>Marketing</h5>
                            <p>Over 200 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="img_hvr_box home3" style="background-image: url(images/courses/8.jpg);">
                    <div class="overlay">
                        <div class="details">
                            <h5>3D + Animation</h5>
                            <p>Over 900 Courses</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-3">
                <div class="courses_all_btn home3 text-center">
                    <a class="btn btn-transparent" href="#">View All Courses</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Popular Courses -->
<section class="popular-courses pb0 pt0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Students Are Viewing</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular_course_slider_home3">
                    <div class="item">
                        <div class="top_courses mb0">
                            <div class="thumb">
                                <img class="img-whp" src="images/courses/t1.jpg" alt="t1.jpg">
                                <div class="overlay">
                                    <div class="tag">Best Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Introduction Web Design with HTML</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top_courses mb0">
                            <div class="thumb">
                                <img class="img-whp" src="images/courses/t2.jpg" alt="t2.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Designing a Responsive Mobile Website with Muse</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top_courses mb0">
                            <div class="thumb">
                                <img class="img-whp" src="images/courses/t3.jpg" alt="t3.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Adobe XD: Prototyping Tips and Tricks</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top_courses mb0">
                            <div class="thumb">
                                <img class="img-whp" src="images/courses/t4.jpg" alt="t4.jpg">
                                <div class="overlay">
                                    <div class="tag">Best Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Sketch: Creating Responsive SVG</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top_courses mb0">
                            <div class="thumb">
                                <img class="img-whp" src="images/courses/t5.jpg" alt="t5.jpg">
                                <div class="overlay">
                                    <div class="tag">Best Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>Design Instruments for Communication</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="top_courses mb0">
                            <div class="thumb">
                                <img class="img-whp" src="images/courses/t6.jpg" alt="t6.jpg">
                                <div class="overlay">
                                    <div class="tag">Top Seller</div>
                                    <div class="icon"><span class="flaticon-like"></span></div>
                                    <a class="tc_preview_course" href="#">Preview Course</a>
                                </div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <p>Ali TUFAN</p>
                                    <h5>How to be a DJ? Make Electronic Music</h5>
                                    <ul class="tc_review">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                        <li class="list-inline-item"><a href="#">(6)</a></li>
                                    </ul>
                                </div>
                                <div class="tc_footer">
                                    <ul class="tc_meta float-left">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-profile"></i></a></li>
                                        <li class="list-inline-item"><a href="#">1548</a></li>
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-comment"></i></a></li>
                                        <li class="list-inline-item"><a href="#">25</a></li>
                                    </ul>
                                    <div class="tc_price float-right">$69.95</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about3 home3 -->
<section class="home3_about2 pb40 pt20">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="about2_home3">
                    <h3>Get Personalized Recommendations</h3>
                    <p>Answer a few questions for your top picks</p>
                    <a href="#" class="btn about_btn_home3">View More</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="about_thumb_home3 text-right">
                    <img class="img-fluid" src="images/about/7.png" alt="7.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="about_home3_shape_container">
                    <div class="about_home3_shape3"><img src="images/about/shape3.png" alt="shape3.png"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Blog Post -->
<section class="our-blog pb30 pt30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Upcoming Events</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-lg-4 col-xl-4">
                <div class="blog_post_home2 home3">
                    <div class="bph2_header">
                        <img class="img-fluid" src="images/blog/5.jpg" alt="5.jpg">
                        <a href="#" class="bph2_date_meta">
                            <span class="year">28 <br> March</span>
                        </a>
                    </div>
                    <div class="details">
                        <div class="post_meta">
                            <ul>
                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                            </ul>
                        </div>
                        <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-xl-4">
                <div class="blog_post_home2 home3">
                    <div class="bph2_header">
                        <img class="img-fluid" src="images/blog/4.jpg" alt="4.jpg">
                        <a href="#" class="bph2_date_meta">
                            <span class="year">28 <br> March</span>
                        </a>
                    </div>
                    <div class="details">
                        <div class="post_meta">
                            <ul>
                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                            </ul>
                        </div>
                        <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-4 col-xl-4">
                <div class="blog_post_home2 home3">
                    <div class="bph2_header">
                        <img class="img-fluid" src="images/blog/5.jpg" alt="5.jpg">
                        <a href="#" class="bph2_date_meta">
                            <span class="year">28 <br> March</span>
                        </a>
                    </div>
                    <div class="details">
                        <div class="post_meta">
                            <ul>
                                <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i> 8:00 am - 5:00 pm</a></li>
                                <li class="list-inline-item"><a href="#"><i class="flaticon-placeholder"></i> Vancouver, Canada</a></li>
                            </ul>
                        </div>
                        <h4>Elegant Light Box Paper Cut Dioramas New Design Conference</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- about3 home3 -->
<section class="home3_about2 pb10 pt30">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h3 class="mt0">Top Rating Instructors</h3>
                    <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="instructor_slider_home3">
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/1.png" alt="1.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Kathelen Monero</h4>
                                <p>Professional skaters association</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/2.png" alt="2.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Anna Richard</h4>
                                <p>Travel Bloger</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/3.png" alt="3.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Ali Tufan</h4>
                                <p>UX/UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/4.png" alt="4.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Jack Wilson</h4>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/5.png" alt="5.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Jessie Handerson</h4>
                                <p>Personal Life Coach Fitness Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/1.png" alt="1.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Kathelen Monero</h4>
                                <p>Professional skaters association</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/2.png" alt="2.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Anna Richard</h4>
                                <p>Travel Bloger</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/3.png" alt="3.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Ali Tufan</h4>
                                <p>UX/UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/4.png" alt="4.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Jack Wilson</h4>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/5.png" alt="5.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Jessie Handerson</h4>
                                <p>Personal Life Coach Fitness Trainer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/1.png" alt="1.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Kathelen Monero</h4>
                                <p>Professional skaters association</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/2.png" alt="2.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Anna Richard</h4>
                                <p>Travel Bloger</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/3.png" alt="3.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Ali Tufan</h4>
                                <p>UX/UI Designer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/4.png" alt="4.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Jack Wilson</h4>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="instructor_col">
                            <div class="thumb">
                                <img class="img-fluid img-rounded-circle" src="images/team/5.png" alt="5.png">
                            </div>
                            <div class="details">
                                <ul>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li class="list-inline-item"><a href="#">(5)</a></li>
                                </ul>
                                <h4>Jessie Handerson</h4>
                                <p>Personal Life Coach Fitness Trainer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt60">
            <div class="col-sm-6 col-lg-6 col-xl-6">
                <div class="becomea_instructor_home3 style1">
                    <div class="bi_grid">
                        <h3>Become an Instructor</h3>
                        <p>Teach what you love. Dove Schooll gives you the tools to create an <br class="dn-lg"> online course.</p>
                        <a class="btn btn-white" href="#">Start Teaching <span class="flaticon-right-arrow-1"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-6 col-xl-6">
                <div class="becomea_instructor_home3 style2">
                    <div class="bi_grid">
                        <h3>Dove School For Business</h3>
                        <p>Get unlimited access to 2,500 of Udemy’s top courses for <br class="dn-lg"> your team.</p>
                        <a class="btn btn-white" href="#">Doing Business <span class="flaticon-right-arrow-1"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('script')

@endpush
