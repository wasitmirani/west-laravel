<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WestCoast Animations | Team</title>
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
        @include('components.breadcrumb')
        <!--=====================================-->
        <!--=       Experts  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding expert-counterup-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Experts in field</span>
                            <h2>What makes us special?</h2>
                            <p class="mb--50">In vel varius turpis, non dictum sem. Aenean in efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
                            <a href="{{route('contact')}}" class="axil-btn btn-large btn-fill-primary">Careers</a>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-xl-1">
                        <div class="row" id="no-equal-gallery">
                            <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                                <div class="counterup-progress counterup-style-2 active">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/icon-10.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/icon-7.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count">15</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Years of operation</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 mt--90 mt_md--0 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                                <div class="counterup-progress counterup-style-2">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/icon-11.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/icon-8.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count">360</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Projects deliverd</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                                <div class="counterup-progress counterup-style-2">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/icon-12.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/icon-9.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count">600</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Specialist</h6>
                                </div>
                            </div>
                            <div class="col-sm-6 no-equal-item" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                                <div class="counterup-progress counterup-style-2">
                                    <div class="icon">
                                        <img class="dark-icon" src="assets/media/icon/apple-black.png" alt="Icon">
                                        <img class="light-icon" src="assets/media/icon/apple.png" alt="Icon">
                                    </div>
                                    <div class="count-number h2">
                                        <span class="number count">64</span>
                                        <span class="symbol">+</span>
                                    </div>
                                    <h6 class="title">Years of operation</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=           Team  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark pb--70 pb_lg--20 pb_md--0">
            <div class="container">
                <div class="section-heading heading-light">
                    <span class="subtitle">Our valus</span>
                    <h2 class="title mb--50">Meet The Team</h2>
                    <p>Nulla facilisi. Nullam in magna id dolor
                        blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid active">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-1.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Savannah Nguyen</a></h4>
                                <span class="designation">Communications</span>
                                <span class="designation">Strategist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-2.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Jerome Bell</a></h4>
                                <span class="designation">Lead Research</span>
                                <span class="designation">Producer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-3.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Darlene Robertson</a></h4>
                                <span class="designation">Implementation</span>
                                <span class="designation">Specialist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-4.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Marvin McKinney</a></h4>
                                <span class="designation">Forward Interactions</span>
                                <span class="designation">Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-5.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Ralph Edwards</a></h4>
                                <span class="designation">Communications</span>
                                <span class="designation">Strategist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-6.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Kathryn Murphy</a></h4>
                                <span class="designation">Lead Research</span>
                                <span class="designation">Producer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-7.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Jane Cooper</a></h4>
                                <span class="designation">Implementation</span>
                                <span class="designation">Specialist</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="team-grid">
                            <div class="thumbnail">
                                <a href="single-team.html">
                                    <img src="assets/media/team/team-8.png" alt="Team Member">
                                </a>
                            </div>
                            <div class="content">
                                <h4 class="title"><a href="single-team.html">Cody Fisher</a></h4>
                                <span class="designation">Forward Interactions</span>
                                <span class="designation">Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="assets/media/others/circle-1.png" alt="Circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/line-3.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-5.png" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=          About  Area Start        =-->
        <!--=====================================-->
        <section class="section section-padding-equal">
            <div class="container">
                <div class="section-heading">
                    <span class="subtitle">Experts in field</span>
                    <h2 class="title">Design startup <br> movement</h2>
                </div>
                <div class="about-expert">
                    <div class="thumbnail">
                        <img src="assets/media/about/about-1.png" alt="Thumbnail">
                        <div class="popup-video">
                            <a href="../../../watch.html?v=1iIZeIy7TqM" class="play-btn popup-youtube"><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                    <ul class="frame-shape">
                        <li class="shape shape-1"><img src="assets/media/about/frame-1.png" alt="Frame"></li>
                        <li class="shape shape-2"><img src="assets/media/about/frame-2.png" alt="Frame"></li>
                    </ul>
                </div>
            </div>
            <ul class="shape-group-16 list-unstyled">
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
