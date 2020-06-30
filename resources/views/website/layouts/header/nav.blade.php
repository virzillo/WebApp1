<header class="header-nav menu_style_home_three navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{url('website/')}}/images/header-logo3.png" alt="header-logo3.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{url('website/')}}/images/header-logo.png" alt="header-logo.png">
                <img class="logo2 img-fluid" src="{{url('website/')}}/images/header-logo2.png" alt="header-logo2.png">
                <span>edumy</span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <div class="ht_left_widget home3 float-left">
                <ul>
                    {{-- <li class="list-inline-item">
                        <div class="header_top_lang_widget">
                            <div class="ht-widget-container">
                                <div class="vertical-wrapper">
                                    <h2 class="title-vertical home3">
                                        <span class="text-title">Library</span> <i class="fa fa-angle-down show-down" aria-hidden="true"></i>
                                    </h2>
                                    <div class="content-vertical">
                                        <ul id="vertical-menu" class="mega-vertical-menu nav navbar-nav">
                                            <li><a href="#">Development</a></li>
                                            <li><a href="#">Business</a></li>
                                            <li><a href="#">IT & Software</a></li>
                                            <li>
                                                <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown">Design <b class="caret"></b></a>
                                                <div class="dropdown-menu vertical-megamenu" style="width: 748px;">
                                                    <div class="dropdown-menu-inner">
                                                        <div class="element-inner">
                                                            <div class="element-section-wrap">
                                                                <div class="element-container">
                                                                    <div class="element-row">
                                                                        <div class="col-lg-7">
                                                                            <div class="row">
                                                                                <div class="col-lg-6">
                                                                                    <div class="element-wrapper">
                                                                                        <div class="title-wrapper">
                                                                                            <div class="element-wrapper-title">Topics</div>
                                                                                        </div>
                                                                                        <div class="widget-nav-menu">
                                                                                            <div class="element-list-wrapper wn-menu">
                                                                                                <ul class="element-menu-list">
                                                                                                    <li><a href="#">Color</a></li>
                                                                                                    <li><a href="#">Digital Painting</a></li>
                                                                                                    <li><a href="#">Drawing</a></li>
                                                                                                    <li><a href="#">Illustration</a></li>
                                                                                                    <li><a href="#">Logo Design</a></li>
                                                                                                    <li><a href="#">User Experience</a></li>
                                                                                                    <li><a href="#">Web Design</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="element-warapper-btn">
                                                                                            <a href="#"><div class="element-wrapper-sub-title">See All <i class="flaticon-right-arrow-1"></i></div></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-6">
                                                                                    <div class="element-wrapper">
                                                                                        <div class="title-wrapper">
                                                                                            <div class="element-wrapper-title">Popular</div>
                                                                                        </div>
                                                                                        <div class="widget-nav-menu">
                                                                                            <div class="element-list-wrapper wn-menu">
                                                                                                <ul class="element-menu-list">
                                                                                                    <li><a href="#">Color</a></li>
                                                                                                    <li><a href="#">Digital Painting</a></li>
                                                                                                    <li><a href="#">Drawing</a></li>
                                                                                                    <li><a href="#">Illustration</a></li>
                                                                                                    <li><a href="#">Logo Design</a></li>
                                                                                                    <li><a href="#">User Experience</a></li>
                                                                                                    <li><a href="#">Web Design</a></li>
                                                                                                </ul>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="element-warapper-btn">
                                                                                            <a href="#"><div class="element-wrapper-sub-title">See All <i class="flaticon-right-arrow-1"></i></div></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-5 p0">
                                                                            <div class="element-img-widget-wrapper">
                                                                                <div class="element-widget-thumb">
                                                                                    <a href="#"><img class="img-fluid" src="images/resource/1.png" alt="1.png"></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#">Marketing</a></li>
                                            <li><a href="#">Lifestyle</a></li>
                                            <li><a href="#">Photography</a></li>
                                            <li><a href="#">Education + Elearning</a></li>
                                            <li><a href="#">Music</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li> --}}
                    <li class="list-inline-item dn-1366">
                        <div class="ht_search_widget">
                            <div class="header_search_widget">
                                <form class="form-inline mailchimp_form">
                                    <input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2" placeholder="Search for the software or skills you want to learn">
                                    <button type="submit" class="btn btn-primary mb-2"><span class="flaticon-magnifying-glass"></span></button>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item list_s dib-1366 dn">
                        <div class="search_overlay home3">
                              <a id="search-button-listener" class="mk-search-trigger mk-fullscreen-trigger" href="#">
                                <span id="search-button"><i class="flaticon-magnifying-glass"></i></span>
                              </a>
                        </div>
                    </li>
                </ul>
            </div>
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li class="last">
                    <a href="page-contact.html"><span class="title">Contact</span></a>
                </li>
                <li class="list_five">
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
                <li class="list_four">
                    <a href="#"><span class="title">Blog</span></a>
                    <ul>
                        <li><a href="page-blog-v1.html">Blog List 1</a></li>
                        <li><a href="page-blog-grid.html">Blog List 2</a></li>
                        <li><a href="page-blog-list.html">Blog List 3</a></li>
                        <li><a href="page-blog-single.html">Single Post</a></li>
                    </ul>
                </li>
                <li class="list_three">

                    <a href="#"><span class="title">Events</span></a>
                    <ul>
                        <li><a href="page-event.html">Event List</a></li>
                        <li><a href="page-event-single.html">Event Single</a></li>
                    </ul>

                </li>
                <li class="list_two">
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
                <li class="list_one">
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
            </ul>
        </nav>
        <!-- End of Responsive Menu -->
    </div>
</header>
