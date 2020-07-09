<!-- Main Header Nav -->
<header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
    <div class="container-fluid">
        <!-- Ace Responsive Menu -->
        <nav>
            <!-- Menu Toggle btn-->
            <div class="menu-toggle">
                <img class="nav_logo_img img-fluid" src="{{asset('/website/images/Logomgs.png')}}" width="100" alt="Logomgs.png">
                <button type="button" id="menu-btn">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <a href="#" class="navbar_brand float-left dn-smd">
                <img class="logo1 img-fluid" src="{{asset('/website/images/Logomgs.png')}}" width="100" alt="Logomgs.png">
                <img class="logo2 img-fluid" src="{{asset('/website/images/Logomgs.png')}}" width="100" alt="Logomgs.png">
                <span></span>
            </a>
            <!-- Responsive Menu Structure-->
            <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
            <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
                <li>
                    <a href="{{url('/')}}"><span class="title">Home</span></a>
                    <!-- Level Two-->
                </li>

                <li>
                    <a href="{{url('/impianti')}}"><span class="title">Impianti</span></a>
                    <!-- Level Two-->
                    {{-- <ul>
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
                    </ul> --}}
                </li>
                <li>
                    <a href="{{url('/')}}"><span class="title">Servizi</span></a>
                </li>
                <li>
                    <a href="{{url('/blog')}}"><span class="title">Blog</span></a>
                </li>
                <li>
                    <a href="{{url('/chi-siamo')}}"><span class="title">Chi Siamo</span></a>
                </li>
                <li class="last">
                    <a href="{{url('/contatti')}}"><span class="title">Contatti</span></a>
                </li>
            </ul>
            <ul class="sign_up_btn pull-right dn-smd mt20">
                {{-- <li class="list-inline-item list_s"><a href="#" class="btn flaticon-user" data-toggle="modal" data-target="#exampleModalCenter"> <span class="dn-lg">Login/Register</span></a></li>
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
                </li> --}}
                {{-- <li class="list-inline-item list_s"><a href="#"><span class="dn-lg">(56) 123 456 789<span></a></li>
                <li class="list-inline-item list_s"><a href="#"><span class="dn-lg">hello@edumy.com<span></a></li> --}}
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
