<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WestCoast Animations</title>
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
        <!--=        Banner Area Start         =-->
        <!--=====================================-->
        <section class="banner banner-style-1">
            <div class="container">
                <div class="row align-items-end align-items-xl-start">
                    <div class="col-lg-6">
                        <div class="banner-content" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                            <h1 class="title">Empower Your Imagination With
                                Animated Video.</h1>
                            <span class="subtitle">We Deliver Professional Video Solutions & production strategies to deliver impactful and eye-catching videos.</span>
                            <a href="{{route('contact')}}" class="axil-btn btn-fill-primary btn-large">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="banner-thumbnail">
                            <div class="large-thumb" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="300">
                                <img src="assets/media/banner/check12.gif" alt="Laptop">
                            </div>
                            <div class="large-thumb-2" data-sal="slide-left" data-sal-duration="800" data-sal-delay="800">
                             <!--   <img src="assets/media/banner/ssavr.gif" alt="Laptop">-->
                            </div>
                            <ul class="list-unstyled shape-group">
                               <!-- <li class="shape shape-1" data-sal="slide-left" data-sal-duration="500" data-sal-delay="800">
                                    <img src="assets/media/banner/chat-group1.png" alt="chat">
                                </li>-->
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-21">
                <li class="shape shape-1" data-sal="slide-down" data-sal-duration="500" data-sal-delay="100">
                    {{-- <img src="assets/media/others/bubble-39.png" alt="Bubble"> --}}
                </li>
                <li class="shape shape-2" data-sal="zoom-in" data-sal-duration="800" data-sal-delay="500">
                    {{-- <img width="50px" height="50px" src="assets/media/others/bill-pay.png" alt="Bubble"> --}}
                </li>
                <li class="shape shape-3" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-4" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-5" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-14.png" alt="Bubble">
                </li>
                <li class="shape shape-6" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-40.png" alt="Bubble">
                </li>
                <li class="shape shape-7" data-sal="slide-left" data-sal-duration="500" data-sal-delay="700">
                    <img src="assets/media/others/bubble-41.png" alt="Bubble">
                </li>
            </ul>
        </section>

        <!--=====================================-->
        <!--=        Service Area Start         =-->
        <!--=====================================
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading heading-left mb--20 mb_md--70">
                    <span class="subtitle">What We Can Do For You</span>
                    <h2 class="title">Services we can <br> help you with</h2>
                </div>
                <div class="row">
                    <div class="col-lg-4 mt--200 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-1.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-design.html">Design</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-design.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt--100 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="services-grid service-style-2 active">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-2.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-development.html">Development</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-development.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-6.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-content-strategy.html">Content strategy</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-content-strategy.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4 mt--200 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                            <div class="services-grid service-style-2">
                                <div class="thumbnail">
                                    <img src="assets/media/icon/icon-1.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-design.html">Design</a></h5>
                                    <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                    <a href="service-design.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>




                        <div class="col-lg-4 mt--100 mt_md--0" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                            <div class="services-grid service-style-2 active">
                                <div class="thumbnail">
                                    <img src="assets/media/icon/icon-2.png" alt="icon">
                                </div>
                                <div class="content">
                                    <h5 class="title"> <a href="service-development.html">Development</a></h5>
                                    <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                    <a href="service-development.html" class="more-btn">Find out more</a>
                                </div>
                            </div>
                        </div>


                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="services-grid service-style-2">
                            <div class="thumbnail">
                                <img src="assets/media/icon/icon-6.png" alt="icon">
                            </div>
                            <div class="content">
                                <h5 class="title"> <a href="service-content-strategy.html">Content strategy</a></h5>
                                <p>Simply drag and drop photos and videos into your workspace to automatically add them to your Collab Cloud library.</p>
                                <a href="service-content-strategy.html" class="more-btn">Find out more</a>
                            </div>
                        </div>
                        </div>







                </div>
            </div>
            <ul class="shape-group-7 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </section>-->
        <!--=====================================-->
        <!--=        Project Area Start         =-->
        <!--=====================================
        <section class="section section-padding-2 bg-color-light">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">Our Portfolio</span>
                    <h2 class="title">Some of our <br> finest work.</h2>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                        <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                        <button data-filter=".branding"><span class="filter-text">2D-Animation</span></button>
                        <button data-filter=".mobile"><span class="filter-text">3D-Animation</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Whiteboard</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Motion Graphics</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Typography</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Screen Cast</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Logo Animations</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Productions Animations</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Illustrations</span></button>
                        <button data-filter=".mobile" ,align=centre><span class="filter-text">Animated Music Videos</span></button>
                    </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-1.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Creative Agency</a></h4>
                                    <span class="subtitle">Full Branding, Website, App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-2.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Marketing</a></h4>
                                    <span class="subtitle">Logo, Website & Mobile App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-3.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Digital Agency</a></h4>
                                    <span class="subtitle">Website, UI/UX</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-4.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Social Engagement</a></h4>
                                    <span class="subtitle">Branding, Website, IOS App</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-5.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Plan Management</a></h4>
                                    <span class="subtitle">Design, Development</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <img src="assets/media/project/project-6.png" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Web Application</a></h4>
                                    <span class="subtitle">Logo, Webapp, App</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-7 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </section>-->



        <section class="section section-padding-equal bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span text-align="centre" class="subtitle">portfolio</span>
                    <h2 class="title">CREATE THE EYE-CATCHING ANIMATIONS FOR YOU</h2>
                    <p>Let's bring your imagination to life with our expert and artistic animation professionals.</p>
                </div>
                <div class="row row-45">
                    <div class="col-md-6" data-sal="slide-up" data-sal-duration="800">
                        <div class="project-grid project-style-2">
                            <div class="thumbnail">
                                <a href="{{route('animation2D')}}">
                                    <img src="assets/media/project/project-5.gif" alt="project">
                                </a>
                            </div>
                            <div class="content">
                                <span class="subtitle"></span>
                                <h3 class="title"><a href="{{route('animation2D')}}">2D-Animation</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="project-grid project-style-2">
                            <div class="thumbnail">
                                <a href="{{route('animation3D')}}">
                                    <img src="assets/media/project/project-06.gif" alt="project">
                                </a>
                            </div>
                            <div class="content">
                                <span class="subtitle"></span>
                                <h3 class="title"><a href="{{route('animation3D')}}">3D-Animation</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-sal="slide-up" data-sal-duration="800">
                        <div class="project-grid project-style-2">
                            <div class="thumbnail">
                                <a href="{{route('logo_animation')}}">
                                    <img src="assets/media/project/7-_1_.gif" alt="project">
                                </a>
                            </div>
                            <div class="content">
                                <span class="subtitle"></span>
                                <h3 class="title"><a href="{{route('logo_animation')}}">Logo-Animation</a></h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="project-grid project-style-2">
                            <div class="thumbnail">
                                <a href="{{route('explainer_videos')}}">
                                    <img src="assets/media/project/5.gif" alt="project">
                                </a>
                            </div>
                            <div class="content">
                                <span class="subtitle"></span>
                                <h3 class="title"><a href="{{route('explainer_videos')}}">Logo-Animation</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-project-btn">
                    <a href="{{route('portfolio')}}" class="axil-btn btn-fill-white">Discover More Projects</a>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="assets/media/others/circle-1.png" alt="Circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/line-3.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-5.png" alt="Circle"></li>
            </ul>
        </section>











        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================
        @include('components.breadcrumb')-->
        <!--=====================================-->
        <!--=     Single Portfolio Area Start   =-->
        <!--=====================================-->

        <!--=====================================-->
        <!--=       Video Popup Area Start      =-->
        <!--=====================================
        <div class="section section-padding-equal bg-color-light">

<section  class="section-padding single-portfolio-area">-->
                <!--<div  class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="section-heading heading-left mb-0">
                                <span class="subtitle">Our Portfolio</span>
                                <h3 class="title">CREATE THE EYE-CATCHING ANIMATIONS FOR YOU</h3>
                            </div>-->
                            <!--<p>Let's bring your imagination to life with our expert and artistic animation professionals.</p>
                            <p>Creative designs that compel you to choose Logo Vibrant as your digital partner! We offer you with nothing less than unprecedented quality, innovative thinking and a team that loves to bring your ideas to life.</p>-->
                          <!--  <a href="{{route('contact')}}" class="axil-btn btn-fill-primary">Get it Now</a>
                        </div>
            <ul class="shape-group-16 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </div>-->



<!--=      About  Quality Area Start    =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark pb--80 pb_lg--40 pb_md--20">
            <div class="container">
                <div class="section-heading heading-light-left mb--100">
                    <span class="subtitle">STEPS TO GET STARTED!</span>
                    <h2 class="title">Why should you work with us?</h2>
                    <p class="opacity-50">Westcoast Animations Inc is known for delivering exceptional quality illustrations at highly affordable rates. Each of our projects is the result of coordination, technical know-how and creative genius. Our goal is to speak not just to the minds but also to the emotions of those viewing our work.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-quality active">
                            <h3 class="sl-number">1</h3>
                            <h5 class="title">
                                Tell Us Your Story</h5>
                            <p>It all starts with you! We'll have a conversation about your story. Fill out the brief form about what you are looking for and your overall project goals.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">2</h3>
                            <h5 class="title">Story Sketches</h5>
                            <p>With your story and your reference photos, our experienced team of designers would provide you with options according to your selected package. You pick your favorite and the final illustration begins!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">3</h3>
                            <h5 class="title">Illustration Begins!</h5>
                            <p>After you pick your favorite illustration, the illustrators get to work right away on your custom illustration. Each illustration can take between 20 and 40 hours to complete.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <!--<h3 class="sl-number"></h3>-->
                            <h5 class="title">
                            </h5>
                         <!--   <p>We made it! Your beautiful illustration is complete! Your custom illustration is then converted into print-ready professional PDF files and sent to you along with the high quality final files.</p>-->
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">4</h3>
                            <h5 class="title">Final Delivery</h5>
                            <p>We made it! Your beautiful illustration is complete! Your custom illustration is then converted into print-ready professional PDF files and sent to you along with the high quality final files.</p>
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
        <!--=        Counter Up Area Start      =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark">
            <div class="container">
              <!--  <div class="section-heading heading-light">
                    <span class="subtitle">Featured Case Study</span>
                    <h2 class="title">Design startup movement</h2>
                    <p>In vel varius turpis, non dictum sem. Aenean in efficitur ipsum, in egestas ipsum. Mauris in mi ac tellus.</p>
                </div>-->
                <div class="row">
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="counterup-progress active">
                            <div class="icon">
                                <img src="assets/media/icon/icon-7.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count">15</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Years of operation</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="assets/media/icon/icon-8.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count">360</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Projects deliverd</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="assets/media/icon/icon-9.png" alt="Apple">
                            </div>
                            <div class="count-number h2">
                                <span class="number count">600</span>
                                <span class="symbol">+</span>
                            </div>
                            <h6 class="title">Specialist</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="800" data-sal-delay="400">
                        <div class="counterup-progress">
                            <div class="icon">
                                <img src="assets/media/icon/apple.png" alt="Apple">
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
            <ul class="list-unstyled shape-group-10">
                <!-- <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li> -->
                <li class="shape shape-2"><img src="assets/media/others/bubble-42.png" alt="Circle"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-43.png" alt="Circle"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=        Testimonial Area Start      =-->
        <!--=====================================-->
      @include('components.testimonial')

        <!--=====================================-->
        <!--=        Brand Area Start       	=-->
        <!--=====================================
        <section class="section section-padding bg-color-dark">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">Top Clients</span>
                    <h2 class="title">We’ve built solutions for...</h2>
                    <p>Design anything from simple icons to fully featured websites and applications.</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500">
                        <div class="brand-grid active">
                            <img src="assets/media/brand/brand-1.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-2.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-3.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-4.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-5.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-6.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-7.png" alt="Brand">
                        </div>
                    </div>
                    <div class="col-lg-3 col-6" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700">
                        <div class="brand-grid">
                            <img src="assets/media/brand/brand-8.png" alt="Brand">
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-10">
                <li class="shape shape-1"><img src="assets/media/others/line-9.png" alt="Circle"></li>
            </ul>
        </section>-->
        <!--=====================================-->
        <!--=        Blog Area Start       	    =-->
        <!--=====================================

        @include('components.blog')-->

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
    <script src="https://kit.fontawesome.com/3f8daf2c35.js" crossorigin="anonymous"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

</html>
