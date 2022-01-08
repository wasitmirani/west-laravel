<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Logo-Animation</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/favicon.png">
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css">
    <link rel="stylesheet" href="assets/css/vendor/slick.css">
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css">
    <link rel="stylesheet" href="assets/css/vendor/sal.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/green-audio-player.min.css">

    <!-- Site Stylesheet -->
    <link rel="stylesheet" href="assets/css/app.css">

</head>

<body class="sticky-header">
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <a href="#main-wrapper" id="backto-top" class="back-to-top">
        <i class="far fa-angle-double-up"></i>
    </a>

    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->

    <div class="my_switcher d-none d-lg-block">
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
    </div>

    <div id="main-wrapper" class="main-wrapper">

        <!--=====================================-->
        <!--=        Header Area Start       	=-->
        <!--=====================================-->
        @include('components.header')
        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->

        <section class="section section-padding case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="case-study-featured-thumb text-start">
                            <img src="assets/media/project/logo-banner.webp" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">WestCoast Animations</span>
                                <h2 class="title">Create Logos Which Tops All Charts</h2>
                                <p>One of the most important functions of a logo is to create and promote brand awareness. A basic logo can attract any audience but an animated logo attracts and entertains at the same time. Most people can quickly recognize the brand by only looking at the logo if the organization effectively does branding. We are here to do the proper branding for you.</p>
                                <p></p>
                                <a href="{{route('contact')}}" class="axil-btn btn-fill-primary btn-large">Read More</a>
                            </div>
                            <div class="case-study-counterup">
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count">10</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Years on the market</span>
                                </div>
                                <div class="single-counterup">
                                    <h2 class="count-number">
                                        <span class="number count">1500</span>
                                        <span class="symbol">+</span>
                                    </h2>
                                    <span class="counter-title">Projects delivered so far</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=       Projects  Area Start        =-->
        <!--=====================================-->
   <!!     <section class="section section-padding-equal pt--200 pt_md--80 pt_sm--60">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">We Give Life To your Idea.
                    </span>
                    <h2 class="title">OUR JOURNEY TOWARDS THE BEST</h2>
                    <p>With decades of experience in animations our team has worked to the top.
                        Our efforts speaks for themselves.</p>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                      <!--  <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                        <button data-filter=".branding"><span class="filter-text">Branding</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Mobile</span></button>-->
                    </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/screencast.webp" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Logo-Animation</a></h4>
                                    <span class="subtitle">.Modeling  .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/logo-animation(2).webp" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Logo-Animation</a></h4>
                                    <span class="subtitle">.Modeling  .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/explainer-animation (2).gif" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Logo-Animation</a></h4>
                                    <span class="subtitle">.Modeling  .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/typography-animation (2).webp" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Logo-Animation</a></h4>
                                    <span class="subtitle">.Modeling  .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/5.gif" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Logo-Animation</a></h4>
                                    <span class="subtitle">.Modeling  .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/7-_1_.gif" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Logo-Animation</a></h4>
                                    <span class="subtitle">.Modeling  .Animation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more-project-btn">
                        <a href="{{route('portfolio')}}" class="axil-btn btn-fill-primary">Discover More Projects</a>
                    </div>
                </div>
            </div>
            <ul class="shape-group-7 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </section>






        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        @include('components.calltoaction')
        <!--=====================================-->
        <!--=        Footer Area Start       	=-->
        <!--=====================================-->
        @include('components.footer')



        <!--=====================================-->
        <!--=       Offcanvas Menu Area       	=-->
        <!--=====================================-->
@include('components.offcanvasmenuarea')
    <!-- Jquery Js -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.min.js"></script>
    <script src="assets/js/vendor/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/vendor/waypoints.min.js"></script>
    <script src="assets/js/vendor/counterup.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/sal.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/vendor/js.cookie.js"></script>
    <script src="assets/js/vendor/jquery.style.switcher.js"></script>
    <script src="assets/js/vendor/jquery.countdown.min.js"></script>
    <script src="assets/js/vendor/tilt.js"></script>
    <script src="assets/js/vendor/green-audio-player.min.js"></script>
    <script src="assets/js/vendor/jquery.nav.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

</html>
