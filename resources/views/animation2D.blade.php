<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>2D-Animation</title>
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

    <script async src="https://www.googletagmanager.com/gtag/js?id=G-X8ZB6W03N6"></script>
<script>
   window.dataLayer = window.dataLayer || [];

   function gtag() {
      dataLayer.push(arguments);
   }
   gtag('js', new Date());

   gtag('config', 'G-X8ZB6W03N6');
</script>

<!-- TrustBox script -->
<script type="text/javascript" src="../widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
<!-- End TrustBox script -->

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
        <!--<div class="breadcrum-area breadcrumb-banner">
            <div class="container">
                <div class="section-heading heading-left" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="300">
                    <h1 class="title h2">WestCost Animations</h1>
                    <p> 2D animation is one of the significant type of animation used for marketing and advertising purposes. It’s extensively used for making animated movies, cartoons, marketing videos, advertisements, educational materials, 2D animation games, & so much more.</p>
                </div>
                <div class="banner-thumbnail thumbnail-4" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="400">
                    <img  src="assets/media/banner/gif2.gif" width="844" height="599" alt="Illustration">
                </div>
            </div>
            <ul class="shape-group-8 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="500" data-sal-delay="100">
                    <img src="assets/media/others/bubble-9.png" alt="Bubble">
                </li>
                <li class="shape shape-2" data-sal="slide-left" data-sal-duration="500" data-sal-delay="200">
                    <img src="assets/media/others/bubble-22.png" alt="Bubble">
                </li>
                <li class="shape shape-3" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300">
                    <img src="assets/media/others/line-4.png" alt="Line">
                </li>
            </ul>
        </div>-->

        <section class="section section-padding case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="case-study-featured-thumb text-start">
                            <img src="assets/media/banner/gif2.gif" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">WestCost Animations</span>
                                <h2 class="title">We Give Life  To Your Dreams</h2>
                                <p>2D animation is one of the significant type of animation used for marketing and advertising purposes. It’s extensively used for making animated movies, cartoons, marketing videos, advertisements, educational materials, 2D animation games, & so much more.</p>
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




 <!--=       Why Choose Area Start       =-->
        <!--=====================================-->
        <section class="section-padding bg-color-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="why-choose-us">
                            <div class="section-heading heading-left">
                                <span class="subtitle">We Give Life To your Idea.</span>
                                <h2 class="title">The Most Exquisite Way To Catch Eyes</h2>

                            </div>
                            <div class="accordion" id="choose-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="far fa-compress"></i>We Deliver Professional Video Solutions and production strategies to deliver impactful and eye-catching videos.
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#choose-accordion">
                                        <div class="accordion-body">
                                            Write a stellar video script.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="far fa-code"></i>Create a Storyboard for your animation
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#choose-accordion">
                                        <div class="accordion-body">
                                            Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <i class="fal fa-globe"></i>Choose your animation video style.

                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#choose-accordion">
                                        <div class="accordion-body">
                                                Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6 offset-xl-1">
                            <div class="why-choose-us mb--30">
                                <div class="why-choose-thumb">
                                    <img src="assets/media/project/project-13.png" alt="Office">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>




            <section class="section section-padding case-study-featured-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-7 col-lg-6">
                            <div class="case-study-featured-thumb text-start">
                                <img src="assets/media/others/illustration-animation.webp" alt="travel">
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-6">
                            <div class="case-study-featured">
                                <div class="section-heading heading-left">
                                    <span class="subtitle">
                                        </span>
                                    <h2 class="title">Create Brand Awareness
                                        with 2D Animations</h2>
                                    <p>Got a unique value proposition? Make it stand out to your customers with relatable content. 2D animated videos are perfect for telling your brand story.</p>
                                    <p>.</p>
                                    <a href="#" class="axil-btn btn-fill-primary btn-large">Read More</a>
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

            <div class="boby-animation scrollContainer">





                <section class="main-portfolio-wrap">
                    <div class="container">
                       <div class="portfolio-heading">
                          <h3>Portfolio</h3>
                       </div>
                       <div class="heading">
                          <h3>Create The Eye-Catching Animations For You</h3>
                          <p>Let's bring your imagination to life with our expert and artistic animation professionals.</p>
                       </div>
                       <div class="portfolio-wrap inner-portfolio-wrap">
                          <div class="tab-content" id="myTabContent">
                             <!-- here is a tab 1 -->
                             <div class="tab-pane fade show active" id="b2b" role="tabpanel" aria-labelledby="b2b-tab">
                                <div class="row portfolio-responsive-slider">
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/1.mp4" data-poster="images/webp/portfolio/2d-animation/1.webp">
                                         <img src="images/webp/portfolio/2d-animation/1.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/1.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/2.mp4" data-poster="images/webp/portfolio/2d-animation/2.webp">
                                         <img src="images/webp/portfolio/2d-animation/2.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/2.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/3.mp4" data-poster="images/webp/portfolio/2d-animation/3.webp">
                                         <img src="images/webp/portfolio/2d-animation/3.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/3.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/7.mp4" data-poster="images/webp/portfolio/2d-animation/4.webp">
                                         <img src="images/webp/portfolio/2d-animation/4.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/7.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/8.mp4" data-poster="images/webp/portfolio/2d-animation/5.webp">
                                         <img src="images/webp/portfolio/2d-animation/5.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/8.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/6.mp4" data-poster="images/webp/portfolio/2d-animation/6.webp">
                                         <img src="images/webp/portfolio/2d-animation/6.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/6.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/12.mp4" data-poster="images/webp/portfolio/2d-animation/7.webp">
                                         <img src="images/webp/portfolio/2d-animation/7.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/12.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/18.mp4" data-poster="images/webp/portfolio/2d-animation/8.webp">
                                         <img src="images/webp/portfolio/2d-animation/8.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/18.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/15.mp4" data-poster="images/webp/portfolio/2d-animation/9.webp">
                                         <img src="images/webp/portfolio/2d-animation/9.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/15.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="#"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="#"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/4.mp4" data-poster="images/webp/portfolio/2d-animation/10.webp">
                                         <img src="images/webp/portfolio/2d-animation/10.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/4.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/5.mp4" data-poster="images/webp/portfolio/2d-animation/11.webp">
                                         <img src="images/webp/portfolio/2d-animation/11.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/5.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/9.mp4" data-poster="images/webp/portfolio/2d-animation/12.webp">
                                         <img src="images/webp/portfolio/2d-animation/12.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/9.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/13.mp4" data-poster="images/webp/portfolio/2d-animation/13.webp">
                                         <img src="images/webp/portfolio/2d-animation/13.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/13.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/16.mp4" data-poster="images/webp/portfolio/2d-animation/14.webp">
                                         <img src="images/webp/portfolio/2d-animation/14.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/16.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                   <div class="col-lg-4 col-md-12">
                                      <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/17.mp4" data-poster="images/webp/portfolio/2d-animation/15.webp">
                                         <img src="images/webp/portfolio/2d-animation/15.webp" alt="" class="img-fluid">
                                         <div class="video-hover-box-wrap">
                                            <div class="video-hover">

                                            </div>
                                            <div class="video-hover-text-wrap">
                                               <div class="video-icon">
                                                  <div class="video-play-icon">
                                                     <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/17.mp4"><i class="fas fa-play" muted=""></i></a>
                                                  </div>
                                                  {{-- <div class="video-like-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-up"></i></a>
                                                  </div> --}}
                                                  {{-- <div class="video-dislike-icon">
                                                     <a href="javascript:;"><i class="far fa-thumbs-down"></i></a>
                                                  </div> --}}
                                               </div>
                                               <ul>
                                                  <li>2D Animation</li>
                                                  <li>Modeling</li>
                                                  <li>Animation</li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="portfolio-btn">
                             <a href="{{route('portfolio')}}" class="orange-btn default-btn chat">Let’s Animate <i class="sprite sprite-arrow"></i></a>
                             <a href="{{route('contact')}}" class="border-btn default-btn" data-toggle="modal" data-target=".bd-example-modal-lg">Get A Free Quote <i class="sprite sprite-arrow"></i></a>
                          </div>
                       </div>
                    </div>
                 </section>









      </div>

      <script src="js/plugin.js"></script>
      <div class="sticky-div-wraper">
          <a href="" class="chat chat-anch"></a>
          <div class=""></div>

      </div>

      <!-- <script src="js/custom.js"></script>   -->
      <!-- Chat Code -->
      <
      <!-- Mouse Flow -->

      <style>
          .customalert{
              position: fixed;
              padding: 15px 20px;
              min-width: 180px;
              z-index: 99999;
              left: -35px;
              top: 50%;
              transform: rotate(270deg) translateY(-50%);
              text-align: center;
              background: rgba(242, 222, 222, 0.5)
          }
      </style>


      <!-- Forms validation -->
      <script src="js/form_validator.min.js"></script>

      <!-- Main Requests Helper -->
      <script src="js/core/ajaxHelper.js"></script>

      <!-- General Functions -->
      <script src="js/core/generalHelper.js"></script>

      <!-- Sweet Alert -->
      <link rel="stylesheet" type="text/css" href="js/alert/sweetalert.css">
      <script src="js/alert/sweetalert.min.js"></script>

      <!-- Captcha Script -->
      <!-- <script src="https://www.google.com/recaptcha/api.js?onload=onLoadCaptcha&render=explicit"></script> -->

      <!-- Initialzing Script -->
      <script>

          // validation Initializing
          // $.validate({});

          // Captcha Key Initializing
          // var captchaKey = ""

      </script>

      <!-- Lead Management Of Form -->
      <script src="js/core/leadManagement.js"></script>

      <script src="js/core/pricingManagement.js"></script></body>


<!-- Mirrored from www.citrusanimations.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Dec 2021 05:33:57 GMT -->
</html>





        <!--=====================================-->
        <!--=       Projects  Area Start        =-->
        <!--=====================================-->
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
