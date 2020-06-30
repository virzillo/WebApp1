@extends('website.layouts.master')


@section('content')
<section class="home-three home3-overlay home3_bgi6">
    <div class="container">
        <div class="row posr">
            <div class="col-lg-12">
                <div class="home-text text-center">
                    <h2 class="fz50">Find the Best Courses</h2>
                    <p class="color-white">Technology is brining a massive wave of evolution on learning things on different ways.</p>
                    <a class="btn home_btn" href="#">Ready to get Started?</a>
                </div>
            </div>
        </div>
        <div class="row_style">
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none"> <path d="M 1000 280 l 2 -253 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -235 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path><path d="M 1000 261 l 2 -222 c -157 -43 -312 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -153.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 16.61 v 22.39 z"></path><path d="M 1000 296 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path></svg>
        </div>
    </div>
</section>

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
                    <div class="about_home3_shape2"><img src="images/about/shape2.png" alt="shape2.png"></div>
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
