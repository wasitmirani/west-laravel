<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Explaineer-Videos</title>
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

<body>
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
                            <img src="assets/media/project/1.gif" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">WestCoast Animations</span>
                                <h2 class="title">Top Aspects Of Explainer
                                    Video Animation</h2>
                                <p>Engage your audience in your classic brand through our best explainer video
                                    services to stand out in the industry. Citrus Animations Inc is a top rated video production brand and our outbound recognition lies in the way we incorporate the simplest idea most amazingly.</p>
                                <p></p>
                                <a href="{{route('contact')}}" class="axil-btn btn-fill-primary btn-large">Read More</a>
                            </div>
                            <!--<div class="case-study-counterup">
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
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--=====================================-->
        <!--=       Projects  Area Start        =-->
        <!--=====================================-->


        <div class="boby-animation scrollContainer">







            <section class="main-portfolio-wrap">
              <div class="container">
                 <div class="portfolio-heading">
                    <h3 class="ml3">Portfolio</h3>
                 </div>
                 <div class="heading">
                    <h3>Contemporary 3D Animations
                        With High End Graphics</h3>
                    <p>Our digital experts deliver high-quality and top-notch 3D services. 3D Animated videos are
                        perfect to explain products, concepts or processes in simple and easy to understand terms.</p>
                 </div>

                 <div class="portfolio-wrap">
                    <ul class="nav nav-tabs cust-nav-tabs justify-content-center border-0" id="myTab" role="tablist">
                       <li class="nav-item">
                          <a class="nav-link active cust-nav-link" id="b2b-tab" data-toggle="tab" href="#b2b" role="tab" aria-controls="b2b" aria-selected="true">Explainer-Videos</a>
                       </li>
                     <!--  <li class="nav-item">
                          <a class="nav-link cust-nav-link" id="ecommerce-tab" data-toggle="tab" href="#ecommerce" role="tab" aria-controls="ecommerce" aria-selected="false">3D Animation</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link cust-nav-link" id="animation-tab" data-toggle="tab" href="#animation" role="tab" aria-controls="animation" aria-selected="false">Whiteboard</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link cust-nav-link" id="motion-tab" data-toggle="tab" href="#motion" role="tab" aria-controls="motion" aria-selected="false">Motion Graphics</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link cust-nav-link" id="typography-tab" data-toggle="tab" href="#typography" role="tab" aria-controls="typography" aria-selected="false">Typography</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link cust-nav-link" id="screencast-tab" data-toggle="tab" href="#screencast" role="tab" aria-controls="screencast" aria-selected="false">Screen Cast</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link cust-nav-link" id="logo-animation-tab" data-toggle="tab" href="#logo-animation" role="tab" aria-controls="logo" aria-selected="false">Logo Animations</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link cust-nav-link" id="product-tab" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="false">Product Animations</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link cust-nav-link" id="illustration-tab" data-toggle="tab" href="#illustration" role="tab" aria-controls="illustration" aria-selected="false">Illustration</a>
                       </li>
                       <li class="nav-item">
                          <a class="nav-link cust-nav-link" id="music-video-tab" data-toggle="tab" href="#music-video" role="tab" aria-controls="music-video" aria-selected="false">Animated Music Videos</a>
                       </li>-->
                    </ul>
                    <div class="tab-content" id="myTabContent">
                       <!-- here is a tab 1 -->
                       <div class="tab-pane fade show active" id="b2b" role="tabpanel"
                         aria-labelledby="b2b-tab">
                         <div class="row portfolio-responsive-slider">
                             <div class="col-lg-4 col-md-12">
                                <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/explainer-video/1.mp4">
                                   <img src="images/webp/portfolio/explainer-1.webp" alt="" class="img-fluid">
                                   <div class="video-hover-box-wrap">
                                      <div class="video-hover">

                                      </div>
                                      <div class="video-hover-text-wrap">
                                         <div class="video-icon">
                                            <div class="video-play-icon">
                                               <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/explainer-video/1.mp4" ><i class="fas fa-play" muted></i></a>
                                            </div>
                                            <div class="video-like-icon">
                                               <a href="#"><i class="far fa-thumbs-up"></i></a>
                                            </div>
                                            <div class="video-dislike-icon">
                                               <a href="#"><i class="far fa-thumbs-down"></i></a>
                                            </div>
                                         </div>
                                         <ul>
                                            <li>3D Animation</li>
                                            <li>Modeling</li>
                                            <li>Animation</li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 col-md-12">
                                <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/explainer-video/2.mp4" data-poster="images/webp/portfolio/explainer-2.webp">
                                   <img src="images/webp/portfolio/explainer-2.webp" alt="" class="img-fluid">
                                   <div class="video-hover-box-wrap">
                                      <div class="video-hover">

                                      </div>
                                      <div class="video-hover-text-wrap">
                                         <div class="video-icon">
                                            <div class="video-play-icon">
                                               <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/explainer-video/2.mp4"><i class="fas fa-play" muted></i></a>
                                            </div>
                                            <div class="video-like-icon">
                                               <a href="#"><i class="far fa-thumbs-up"></i></a>
                                            </div>
                                            <div class="video-dislike-icon">
                                               <a href="#"><i class="far fa-thumbs-down"></i></a>
                                            </div>
                                         </div>
                                         <ul>
                                            <li>3D Animation</li>
                                            <li>Modeling</li>
                                            <li>Animation</li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 col-md-12">
                                <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/explainer-video/3.mp4" data-poster="images/webp/portfolio/explainer-3.webp">
                                   <img src="images/webp/portfolio/explainer-3.webp" alt="" class="img-fluid">
                                   <div class="video-hover-box-wrap">
                                      <div class="video-hover">

                                      </div>
                                      <div class="video-hover-text-wrap">
                                         <div class="video-icon">
                                            <div class="video-play-icon">
                                               <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/explainer-video/3.mp4"><i class="fas fa-play" muted></i></a>
                                            </div>
                                            <div class="video-like-icon">
                                               <a href="#"><i class="far fa-thumbs-up"></i></a>
                                            </div>
                                            <div class="video-dislike-icon">
                                               <a href="#"><i class="far fa-thumbs-down"></i></a>
                                            </div>
                                         </div>
                                         <ul>
                                            <li>3D Animation</li>
                                            <li>Modeling</li>
                                            <li>Animation</li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 col-md-12">
                                <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/explainer-video/4.mp4" data-poster="images/webp/portfolio/explainer-4.webp">
                                   <img src="images/webp/portfolio/explainer-4.webp" alt="" class="img-fluid">
                                   <div class="video-hover-box-wrap">
                                      <div class="video-hover">

                                      </div>
                                      <div class="video-hover-text-wrap">
                                         <div class="video-icon">
                                            <div class="video-play-icon">
                                               <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/explainer-video/4.mp4"><i class="fas fa-play" muted></i></a>
                                            </div>
                                            <div class="video-like-icon">
                                               <a href="#"><i class="far fa-thumbs-up"></i></a>
                                            </div>
                                            <div class="video-dislike-icon">
                                               <a href="#"><i class="far fa-thumbs-down"></i></a>
                                            </div>
                                         </div>
                                         <ul>
                                            <li>3D Animation</li>
                                            <li>Modeling</li>
                                            <li>Animation</li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 col-md-12">
                                <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/explainer-video/5.mp4" data-poster="images/webp/portfolio/explainer-5.webp">
                                   <img src="images/webp/portfolio/explainer-5.webp" alt="" class="img-fluid">
                                   <div class="video-hover-box-wrap">
                                      <div class="video-hover">

                                      </div>
                                      <div class="video-hover-text-wrap">
                                         <div class="video-icon">
                                            <div class="video-play-icon">
                                               <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/explainer-video/5.mp4"><i class="fas fa-play" muted></i></a>
                                            </div>
                                            <div class="video-like-icon">
                                               <a href="#"><i class="far fa-thumbs-up"></i></a>
                                            </div>
                                            <div class="video-dislike-icon">
                                               <a href="#"><i class="far fa-thumbs-down"></i></a>
                                            </div>
                                         </div>
                                         <ul>
                                            <li>3D Animation</li>
                                            <li>Modeling</li>
                                            <li>Animation</li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 col-md-12">
                                <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/explainer-video/6.mp4" data-poster="images/webp/portfolio/explainer-6.webp">
                                   <img src="images/webp/portfolio/explainer-6.webp" alt="" class="img-fluid">
                                   <div class="video-hover-box-wrap">
                                      <div class="video-hover">

                                      </div>
                                      <div class="video-hover-text-wrap">
                                         <div class="video-icon">
                                            <div class="video-play-icon">
                                               <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/explainer-video/6.mp4"><i class="fas fa-play" muted></i></a>
                                            </div>
                                            <div class="video-like-icon">
                                               <a href="#"><i class="far fa-thumbs-up"></i></a>
                                            </div>
                                            <div class="video-dislike-icon">
                                               <a href="#"><i class="far fa-thumbs-down"></i></a>
                                            </div>
                                         </div>
                                         <ul>
                                            <li>3D Animation</li>
                                            <li>Modeling</li>
                                            <li>Animation</li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 col-md-12">
                                <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/explainer-video/7.mp4" data-poster="images/webp/portfolio/explainer-7.webp">
                                   <img src="images/webp/portfolio/explainer-7.webp" alt="" class="img-fluid">
                                   <div class="video-hover-box-wrap">
                                      <div class="video-hover">

                                      </div>
                                      <div class="video-hover-text-wrap">
                                         <div class="video-icon">
                                            <div class="video-play-icon">
                                               <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/explainer-video/7.mp4"><i class="fas fa-play" muted></i></a>
                                            </div>
                                            <div class="video-like-icon">
                                               <a href="#"><i class="far fa-thumbs-up"></i></a>
                                            </div>
                                            <div class="video-dislike-icon">
                                               <a href="#"><i class="far fa-thumbs-down"></i></a>
                                            </div>
                                         </div>
                                         <ul>
                                            <li>3D Animation</li>
                                            <li>Modeling</li>
                                            <li>Animation</li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 col-md-12">
                                <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/explainer-video/8.mp4" data-poster="images/webp/portfolio/explainer-8.webp">
                                   <img src="images/webp/portfolio/explainer-8.webp" alt="" class="img-fluid">
                                   <div class="video-hover-box-wrap">
                                      <div class="video-hover">

                                      </div>
                                      <div class="video-hover-text-wrap">
                                         <div class="video-icon">
                                            <div class="video-play-icon">
                                               <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/explainer-video/8.mp4"><i class="fas fa-play" muted></i></a>
                                            </div>
                                            <div class="video-like-icon">
                                               <a href="#"><i class="far fa-thumbs-up"></i></a>
                                            </div>
                                            <div class="video-dislike-icon">
                                               <a href="#"><i class="far fa-thumbs-down"></i></a>
                                            </div>
                                         </div>
                                         <ul>
                                            <li>3D Animation</li>
                                            <li>Modeling</li>
                                            <li>Animation</li>
                                         </ul>
                                      </div>
                                   </div>
                                </div>
                             </div>
                             <div class="col-lg-4 col-md-12">
                                <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/explainer-video/9.mp4" data-poster="images/webp/portfolio/explainer-9.webp">
                                   <img src="images/webp/portfolio/explainer-9.webp" alt="" class="img-fluid">
                                   <div class="video-hover-box-wrap">
                                      <div class="video-hover">

                                      </div>
                                      <div class="video-hover-text-wrap">
                                         <div class="video-icon">
                                            <div class="video-play-icon">
                                               <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/explainer-video/9.mp4"><i class="fas fa-play" muted></i></a>
                                            </div>
                                            <div class="video-like-icon">
                                               <a href="#"><i class="far fa-thumbs-up"></i></a>
                                            </div>
                                            <div class="video-dislike-icon">
                                               <a href="#"><i class="far fa-thumbs-down"></i></a>
                                            </div>
                                         </div>
                                         <ul>
                                            <li>3D Animation</li>
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
                       <a href="{{route('portfolio')}}" class="orange-btn default-btn">View Portfolio <i class="sprite sprite-arrow"></i></a>
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
