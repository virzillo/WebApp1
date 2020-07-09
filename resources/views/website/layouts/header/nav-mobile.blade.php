<div id="page" class="stylehome1 h0">
    <div class="mobile-menu">
        <div class="header stylehome1">
            <div class="main_logo_home2">
                <img class="nav_logo_img img-fluid float-left mt20" src="{{asset('/website/images/Logomgs.png')}}" alt="Logomgs">
                <span>MGS</span>
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
                                <input type="text" value="" placeholder="Cerca impianti..." id="mk-fullscreen-search-input2">
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
            <li> <a href="{{route('homepage')}}"><span class="title">Home</span></a></li>
            {{-- <li><span>Blog</span>
                <ul>
                    <li><a href="page-blog-v1.html">Blog List 1</a></li>
                    <li><a href="page-blog-grid.html">Blog List 2</a></li>
                    <li><a href="page-blog-list.html">Blog List 3</a></li>
                    <li><a href="page-blog-single.html">Single Post</a></li>
                </ul>
            </li> --}}
            <li><a href="{{url('/impianti')}}">Impianti</a></li>
            <li><a href="{{url('/')}}">Servizi</a></li>
            <li><a href="{{url('/blog')}}">Blog</a></li>
            <li><a href="{{url('/chi-siamo')}}">Chi Siamo</a></li>
            <li><a href="{{url('/contatti')}}">Contatti</a></li>
            {{-- <li><a href="page-login.html"><span class="flaticon-user"></span> Login</a></li>
            <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li> --}}
        </ul>
    </nav>
</div>
