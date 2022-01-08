<header class="header axil-header header-style-2">
    <div id="axil-sticky-placeholder"></div>
    <div class="axil-mainmenu">
        <div class="container-fluid">
            <div class="header-navbar">
                <div class="header-logo">
                    <a href="{{route('index')}}"><img width="120px"  height="370" class="light-version-logo" src="assets/media/check12.gif" alt="logo"></a>
                    <a href="{{route('index')}}"><img width="120px" height="370" class="dark-version-logo" src="assets/media/check13.gif" alt="logo"></a>
                </div>
                <div class="header-main-nav">
                    <!-- Start Mainmanu Nav -->
                    <nav class="mainmenu-nav" id="mobilemenu-popup">
                        <div class="d-block d-lg-none">
                            <div class="mobile-nav-header">
                                <div class="mobile-nav-logo">
                                    <a href="{{route('index')}}">
                                        <img class="light-mode" src="assets/media/check.png" alt="Site Logo">
                                        <img class="dark-mode" src="assets/media/check.png" alt="Site Logo">
                                    </a>
                                </div>
                                <button class="mobile-menu-close" data-bs-dismiss="offcanvas"><i class="fas fa-times"></i></button>
                            </div>
                        </div>
                        <ul class="mainmenu">
                        <!--<a href="{{route('index')}}">Home</a>
                            <!--<li class="menu-item-has-children">
                                <a href="javascript:void(0);">Home</a>

                                <ul class="axil-submenu">
                                    <a href="{{route('index')}}">Digital Agency</a>
                                    <li><a href="{{route('index')}}">Creative Agency</a></li>
                                    <li><a href="{{route('index')}}">Personal Portfolio</a></li>
                                    <li><a href="{{route('index')}}">Home Startup</a></li>
                                    <li><a href="{{route('index')}}">Corporate Agency</a></li>
                                </ul>
                            </li>-->
                           <!-- <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Services</a>
                                <ul class="axil-submenu">
                                    <li><a href="{{route('service')}}">2D-Animation</a></li>
                                    <li><a href="{{route('service')}}">3D-Animation</a></li>
                                    <li><a href="{{route('service')}}">Logo-Animation</a></li>
                                    <li><a href="{{route('service')}}">Explainer Videos</a></li>
                                    <li><a href="{{route('service')}}">Typography</a></li>
                                    <li><a href="{{route('service')}}">Screen Cast</a></li>
                                    <li><a href="{{route('service')}}">White-Board</a></li>
                                    <li><a href="{{route('service')}}">Screen Cast</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Portfolio</a>
                                <ul class="axil-submenu">
                                    <li><a href="{{route('portfolio')}}">Two Column</a></li>
                                    <li><a href="{{route('portfolio')}}">Three Column</a></li>
                                    <li><a href="{{route('portfolio')}}">Four Column</a></li>
                                    <li><a href="{{route('portfolio')}}">Three Column Width</a></li>
                                    <li><a href="{{route('portfolio')}}">Four Column Width</a></li>
                                    <li><a href="{{route('portfolio')}}">Portfolio Details</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Pages</a>
                                <ul class="axil-submenu">
                                    <li><a href="{{route('about')}}">About Us</a></li>
                                    <li><a href="our-office.html">Our Office</a></li>
                                    <li><a href="case-study.html">Case Study</a></li>
                                    <li><a href="single-case-study.html">Case Study Details</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="single-team.html">Team Details</a></li>
                                    <li><a href="our-clients.html">Our Clients</a></li>
                                    <li><a href="testimonial.html">Testimonial</a></li>
                                    <li><a href="pricing-table.html">Pricing Table</a></li>
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="404.html">404 Page</a></li>
                                    <li><a href="coming-soon.html">Coming Soon</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Blog</a>
                                <ul class="axil-submenu">
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single-blog.html">Standard Post</a></li>
                                    <li><a href="single-blog-gallery.html">Gallery Post</a></li>
                                    <li><a href="single-blog-video.html">Video Post</a></li>
                                    <li><a href="single-blog-audio.html">Audio Post</a></li>
                                    <li><a href="single-blog-quote.html">Quote Post</a></li>
                                </ul>
                            </li>-->
                            <li><a href="{{route('index')}}">Home</a></li>
                            <li><a href="{{route('about')}}">About-Us</a></li>
                           <!-- <li><a href="{{route('service')}}">Services</a></li>-->
                            <li class="menu-item-has-children">
                                <a href="javascript:void(0);">Services</a>
                                <ul class="axil-submenu">
                                    <li><a href="{{route('animation2D')}}">2D-Animation</a></li>
                                    <li><a href="{{route('animation3D')}}">3D-Animation</a></li>
                                    <li><a href="{{route('logo_animation')}}">Logo-Animation</a></li>
                                    <li><a href="{{route('typography')}}">Typography</a></li>
                                    <li><a href="{{route('explainer_videos')}}">Explainer-Videos</a></li>
                                    <li><a href="{{route('screencast')}}">Screen-Cast</a></li>
                                    <li><a href="{{route('whiteboard')}}">White-Board</a></li>
                                    <li><a href="{{route('illustration')}}">Illustration</a></li>
                                </ul>
                            </li>
                            <li><a href="{{route('portfolio')}}">Portfolio</a></li>
                            <li><a href="{{route('pricing_table')}}">Pricing</a></li>
                            <!--<li><a href="{{route('case_study')}}">Case-Study</a></li>-->
                            <li><a href="{{route('contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- End Mainmanu Nav -->
                </div>
                <div class="header-action">
                    <ul class="list-unstyled">
                        <li class="sidemenu-btn d-lg-block d-none">
                            <button class="btn-wrap btn-dark" data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenuRight">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                        <li class="mobile-menu-btn sidemenu-btn d-lg-none d-block">
                            <button class="btn-wrap btn-dark" data-bs-toggle="offcanvas" data-bs-target="#mobilemenu-popup">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </li>
                        <li class="my_switcher d-block d-lg-none">
                            <ul>
                                <li title="Light Mode">
                                    <a href="javascript:void(0)" class="setColor light" data-theme="light">
                                        <i class="fal fa-lightbulb-on"></i>
                                    </a>
                                </li>
                                <li title="Dark Mode">
                                    <a href="javascript:void(0)" class="setColor dark" data-theme="dark">
                                        <i class="fas fa-moon"></i>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
