<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="academy, college, coursera, courses, education, elearning, kindergarten, lms, lynda, online course, online education, school, training, udemy, university">
<meta name="description" content="Edumy - LMS Online Education Course & School HTML Template">
<meta name="CreativeLayers" content="ATFN">
<!-- css file -->
<link rel="stylesheet" href="{{url('website')}}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{url('website')}}/css/style.css">
<!-- Responsive stylesheet -->
<link rel="stylesheet" href="{{url('website')}}/css/responsive.css">
<!-- Title -->
<title>Edumy - LMS Online Education Course & School HTML Template</title>
<!-- Favicon -->
<link href="{{url('website/')}}/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
<link href="{{url('website/')}}/images/favicon.ico" sizes="128x128" rel="shortcut icon" />

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="wrapper">
	<div class="preloader"></div>

<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="images/header-logo.png" alt="header-logo.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="images/header-logo.png" alt="header-logo.png">
                <img class="logo2 img-fluid" src="images/header-logo2.png" alt="header-logo2.png">
                <span>edumy</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="#"><span class="title">Home</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="index.html">Home 1</a></li>
                        <li><a href="index2.html">Home 2</a></li>
                        <li><a href="index3.html">Home 3</a></li>
                        <li><a href="index4.html">Home 4</a></li>
                        <li><a href="index5.html">Home 5</a></li>
                        <li><a href="index6.html">Home - University</a></li>
                        <li><a href="index7.html">Home College</a></li>
                        <li><a href="index8.html">Home Kindergarten</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Courses</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li>
                            <a href="#">Courses List</a>
                            <!-- Level Three-->
                            <ul>
                                <li><a href="page-course-v1.html">Courses v1</a></li>
                                <li><a href="page-course-v2.html">Courses v2</a></li>
                                <li><a href="page-course-v3.html">Courses v3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Courses Single</a>
                            <!-- Level Three-->
                            <ul>
                                <li><a href="page-course-single-v1.html">Single V1</a></li>
                                <li><a href="page-course-single-v2.html">Single V2</a></li>
                                <li><a href="page-course-single-v3.html">Single V3</a></li>
                            </ul>
                        </li>
                        <li><a href="page-instructors.html">Instructors</a></li>
                        <li><a href="page-instructors-single.html">Instructor Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Events</span></a>
                    <ul>
                        <li><a href="page-event.html">Event List</a></li>
                        <li><a href="page-event-single.html">Event Single</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Pages</span></a>
                    <ul>
                        <li>
                            <a href="#"><span class="title">Shop Pages</span></a>
                            <ul>
                                <li><a href="page-shop.html">Shop</a></li>
                                <li><a href="page-shop-single.html">Shop Single</a></li>
                                <li><a href="page-shop-cart.html">Cart</a></li>
                                <li><a href="page-shop-checkout.html">Checkout</a></li>
                                <li><a href="page-shop-order.html">Order</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><span class="title">User Admin</span></a>
                            <ul>
                                <li><a href="page-dashboard.html">Dashboard</a></li>
                                <li><a href="page-my-courses.html">My Courses</a></li>
                                <li><a href="page-my-order.html">My Order</a></li>
                                <li><a href="page-my-message.html">My Message</a></li>
                                <li><a href="page-my-review.html">My Review</a></li>
                                <li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
                                <li><a href="page-my-listing.html">My Listing</a></li>
                                <li><a href="page-my-setting.html">My Setting</a></li>
                            </ul>
                        </li>
                        <li><a href="page-about.html">About Us</a></li>
                        <li><a href="page-gallery.html">Gallery</a></li>
                        <li><a href="page-faq.html">Faq</a></li>
                        <li><a href="page-login.html">LogIn</a></li>
                        <li><a href="page-register.html">Register</a></li>
                        <li><a href="page-pricing.html">Membership</a></li>
                        <li><a href="page-error.html">404 Page</a></li>
                        <li><a href="page-terms.html">Terms and Conditions</a></li>
                        <li><a href="page-become-instructor.html">Become an Instructor</a></li>
                        <li><a href="page-ui-element.html">UI Elements</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><span class="title">Blog</span></a>
                    <ul>
                        <li><a href="page-blog-v1.html">Blog List 1</a></li>
                        <li><a href="page-blog-grid.html">Blog List 2</a></li>
                        <li><a href="page-blog-list.html">Blog List 3</a></li>
                        <li><a href="page-blog-single.html">Single Post</a></li>
                    </ul>
                </li>
                <li class="last">
                    <a href="page-contact.html"><span class="title">Contact</span></a>
                </li>
            </ul>
            <ul class="sign_up_btn pull-right dn-smd mt20">
                <li class="list-inline-item list_s"><a href="#" class="btn flaticon-user" data-toggle="modal" data-target="#exampleModalCenter"> <span class="dn-lg">Login/Register</span></a></li>
                <li class="list-inline-item list_s">
                    <div class="cart_btn">
                        <ul class="cart">
                            <li>
                                <a href="#" class="btn cart_btn flaticon-shopping-bag"><span>5</span></a>
                                <ul class="dropdown_content">
                                    <li class="list_content">
                                        <a href="#">
                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                            <p>Dolar Sit Amet</p>
                                            <small>1 × $7.90</small>
                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <li class="list_content">
                                        <a href="#">
                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                            <p>Lorem Ipsum</p>
                                            <small>1 × $7.90</small>
                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <li class="list_content">
                                        <a href="#">
                                            <img class="float-left" src="http://via.placeholder.com/50x50" alt="50x50">
                                            <p>Is simply</p>
                                            <small>1 × $7.90</small>
                                            <span class="close_icon float-right"><i class="fa fa-plus"></i></span>
                                        </a>
                                    </li>
                                    <li class="list_content">
                                        <h5>Subtotal: $57.70</h5>
                                        <a href="#" class="btn btn-thm cart_btns">View cart</a>
                                        <a href="#" class="btn btn-thm3 checkout_btns">Checkout</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="list-inline-item list_s">
                    <div class="search_overlay">
                         <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                            <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                         </a>
                    </div>
                </li>
            </ul><!-- Button trigger modal -->
        </nav>
    </div>
</header>
<!-- Modal -->
<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
            <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
                  </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="login_form">
                        <form action="#">
                            <div class="heading">
                                <h3 class="text-center">Login to your account</h3>
                                <p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
                            </div>
                             <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                <a class="tdu btn-fpswd float-right" href="#">Forgot Password?</a>
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">Login</button>
                            <hr>
                            <div class="row mt40">
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                </div>
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="sign_up_form">
                        <div class="heading">
                            <h3 class="text-center">Create New Account</h3>
                            <p class="text-center">Have an account? <a class="text-thm" href="#">Login</a></p>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Username">
                            </div>
                             <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email Address">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Confirm Password">
                            </div>
                            <div class="form-group custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="exampleCheck2">
                                <label class="custom-control-label" for="exampleCheck2">Want to become an instructor?</label>
                            </div>
                            <button type="submit" class="btn btn-log btn-block btn-thm2">Register</button>
                            <hr>
                            <div class="row mt40">
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
                                </div>
                                <div class="col-lg">
                                    <button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
                                </div>
                            </div>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
      </div>
</div>
<!-- Modal Search Button Bacground Overlay -->
<div class="search_overlay dn-992">
    <div class="mk-fullscreen-search-overlay" id="mk-search-overlay">
        <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button"><i class="fa fa-times"></i></a>
        <div id="mk-fullscreen-search-wrapper">
          <form method="get" id="mk-fullscreen-searchform">
            <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input">
            <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
          </form>
        </div>
    </div>
</div>

<!-- Main Header Nav For Mobile -->
<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2">
                <img class="nav_logo_img img-fluid float-left mt20" src="images/header-logo.png" alt="header-logo.png">
                <span>edumy</span>
            </div>
            <ul class="menu_bar_home2">
                <li class="list-inline-item">
                    <div class="search_overlay">
                      <a id="search-button-listener2" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                        <div id="search-button2"><i class="flaticon-magnifying-glass"></i></div>
                      </a>
                        <div class="mk-fullscreen-search-overlay" id="mk-search-overlay2">
                            <a href="#" class="mk-fullscreen-close" id="mk-fullscreen-close-button2"><i class="fa fa-times"></i></a>
                            <div id="mk-fullscreen-search-wrapper2">
                              <form method="get" id="mk-fullscreen-searchform2">
                                <input type="text" value="" placeholder="Search courses..." id="mk-fullscreen-search-input2">
                                <i class="flaticon-magnifying-glass fullscreen-search-icon"><input value="" type="submit"></i>
                              </form>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="list-inline-item"><a href="#menu"><span></span></a></li>
            </ul>
        </div>
    </div><!-- /.mobile-menu -->
    <nav id="menu" class="stylehome1">
        <ul>
            <li><span>Home</span>
                <ul>
                    <li><a href="index.html">Home 1</a></li>
                    <li><a href="index2.html">Home 2</a></li>
                    <li><a href="index3.html">Home 3</a></li>
                    <li><a href="index4.html">Home 4</a></li>
                    <li><a href="index5.html">Home 5</a></li>
                    <li><a href="index6.html">Home - University</a></li>
                    <li><a href="index7.html">Home College</a></li>
                    <li><a href="index8.html">Home Kindergarten</a></li>
                </ul>
            </li>
            <li><span>Courses</span>
                <ul>
                    <li><span>Courses List</span>
                        <ul>
                            <li><a href="page-course-v1.html">Courses v1</a></li>
                            <li><a href="page-course-v2.html">Courses v2</a></li>
                            <li><a href="page-course-v3.html">Courses v3</a></li>
                        </ul>
                    </li>
                    <li><span>Courses Single</span>
                        <ul>
                            <li><a href="page-course-single-v1.html">Single V1</a></li>
                            <li><a href="page-course-single-v2.html">Single V2</a></li>
                            <li><a href="page-course-single-v3.html">Single V3</a></li>
                        </ul>
                    </li>
                    <li><a href="page-instructors.html">Instructors</a></li>
                    <li><a href="page-instructors-single.html">Instructor Single</a></li>
                </ul>
            </li>
            <li><span>Events</span>
                <ul>
                    <li><a href="page-event.html">Event List</a></li>
                    <li><a href="page-event-single.html">Event Single</a></li>
                </ul>
            </li>
            <li><span>Pages</span>
                <ul>
                    <li><span>Shop Pages</span>
                        <ul>
                            <li><a href="page-shop.html">Shop</a></li>
                            <li><a href="page-shop-single.html">Shop Single</a></li>
                            <li><a href="page-shop-cart.html">Cart</a></li>
                            <li><a href="page-shop-checkout.html">Checkout</a></li>
                            <li><a href="page-shop-order.html">Order</a></li>
                        </ul>
                    </li>
                    <li><span>User Admin</span>
                        <ul>
                            <li><a href="page-dashboard.html">Dashboard</a></li>
                            <li><a href="page-my-courses.html">My Courses</a></li>
                            <li><a href="page-my-order.html">My Order</a></li>
                            <li><a href="page-my-message.html">My Message</a></li>
                            <li><a href="page-my-review.html">My Review</a></li>
                            <li><a href="page-my-bookmarks.html">My Bookmarks</a></li>
                            <li><a href="page-my-listing.html">My Listing</a></li>
                            <li><a href="page-my-setting.html">My Setting</a></li>
                        </ul>
                    </li>
                    <li><a href="page-about.html">About Us</a></li>
                    <li><a href="page-gallery.html">Gallery</a></li>
                    <li><a href="page-faq.html">Faq</a></li>
                    <li><a href="page-login.html">LogIn</a></li>
                    <li><a href="page-register.html">Register</a></li>
                    <li><a href="page-pricing.html">Membership</a></li>
                    <li><a href="page-error.html">404 Page</a></li>
                    <li><a href="page-terms.html">Terms and Conditions</a></li>
                    <li><a href="page-become-instructor.html">Become an Instructor</a></li>
                    <li><a href="page-ui-element.html">UI Elements</a></li>
                </ul>
            </li>
            <li><span>Blog</span>
                <ul>
                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
                    <li><a href="page-blog-list.html">Blog List 3</a></li>
                    <li><a href="page-blog-single.html">Single Post</a></li>
                </ul>
            </li>
            <li><a href="page-contact.html">Contact</a></li>
            <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
            <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
        </ul>
    </nav>
</div>

<!-- 2nd Home Slider -->
<div class="home1-mainslider">
    <div class="container-fluid p0">
        <div class="row">
            <div class="col-lg-12">
                <div class="main-banner-wrapper">
                    <div class="banner-style-one owl-theme owl-carousel">
                        <div class="slide slide-one" style="background-image: url(images/home/1.jpg); height: 95vh;">
                            <div class="container">
                                <div class="row home-content">
                                    <div class="col-lg-12 text-center p0">
                                        <h3 class="banner-title">Self EducatIon Resources and Infos</h3>
                                        <p>Technology is brining a massive wave of evolution on learning things on different ways.</p>
                                        <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div class="slide slide-one" style="background-image: url(images/home/3.jpg);height: 95vh;">
                            <div class="container">
                                <div class="row home-content">
                                    <div class="col-lg-12 text-center p0">
                                        <h3 class="banner-title">Find the Best Courses</h3>
                                        <p>Technology is brining a massive wave of evolution on learning things on different ways</p>
                                        <div class="btn-block"><a href="#" class="banner-btn">Ready to get Started?</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-btn-block banner-carousel-btn">
                        <span class="carousel-btn left-btn"><i class="flaticon-left-arrow left"></i> <span class="left">PR <br> EV</span></span>
                        <span class="carousel-btn right-btn"><span class="right">NE <br> XT</span> <i class="flaticon-right-arrow-1 right"></i></span>
                    </div><!-- /.carousel-btn-block banner-carousel-btn -->
                </div><!-- /.main-banner-wrapper -->
            </div>
        </div>
    </div>
    <div class="container home_iconbox_container">
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
    </div>
</div>
	@yield('content')

	@include('website.layouts.footer')
<a class="scrollToHome home3" href="#"><i class="flaticon-up-arrow-1"></i></a>
</div>
<!-- Wrapper End -->

{{-- @stack('script') --}}
<script type="text/javascript" src="{{url('website/')}}/js/jquery-3.3.1.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/jquery-migrate-3.0.0.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/popper.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/jquery.mmenu.all.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/ace-responsive-menu.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/isotop.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/snackbar.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/simplebar.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/parallax.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/scrollto.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/jquery-scrolltofixed-min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/jquery.counterup.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/wow.min.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/progressbar.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/slider.js"></script>
<script type="text/javascript" src="{{url('website')}}/js/timepicker.js"></script>
<!-- Custom script for all pages -->
<script type="text/javascript" src="{{url('website')}}/js/script.js"></script>
</body>
</html>
