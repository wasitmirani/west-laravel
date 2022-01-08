<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WestCoast Animations | Portfolio Details</title>
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

<body >
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






        <section class="main-portfolio-wrap portfolio-page">
            <div class="container">
               <div class="portfolio-heading">
                  <h3 class="ml3">Portfolio</h3>
               </div>
               <div class="heading">
                  <h3>CREATE THE EYE-CATCHING ANIMATIONS FOR YOU</h3>
                  <p>Let's bring your imagination to life with our expert and artistic animation professionals.</p>
               </div>

               <div class="portfolio-wrap">
                  <ul class="nav nav-tabs cust-nav-tabs justify-content-center border-0" id="myTab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active cust-nav-link" id="b2b-tab" data-toggle="tab" href="#b2b" role="tab" aria-controls="b2b" aria-selected="true">2D Animation</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link cust-nav-link" id="ecommerce-tab" data-toggle="tab" href="{{('animation2D')}}" role="tab" aria-controls="ecommerce" aria-selected="false">3D Animation</a>
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
                        <a class="nav-link cust-nav-link" id="screencast-tab" data-toggle="tab" href="{{route('screencast')}}" role="tab" aria-controls="screencast" aria-selected="false">Screen Cast</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link cust-nav-link" id="logo-animation-tab" data-toggle="tab" href="#logo-animation" role="tab" aria-controls="logo" aria-selected="false">Logo Animations</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link cust-nav-link" id="product-tab" data-toggle="tab" href="#product" role="tab" aria-controls="product" aria-selected="false">Product Animations</a>
                     </li>
                     {{-- <li class="nav-item">
                        <a class="nav-link cust-nav-link" id="illustration-tab" data-toggle="tab" href="#illustration" role="tab" aria-controls="illustration" aria-selected="false">Illustration</a>
                     </li> --}}
                     <li class="nav-item">
                        <a class="nav-link cust-nav-link" id="music-video-tab" data-toggle="tab" href="#music-video" role="tab" aria-controls="music-video" aria-selected="false">Animated Music Videos</a>
                     </li>
                  </ul>
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                                          </div>
                                          <div class="video-dislike-icon">
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
                     <!-- here is a tab 2 -->
                     <div class="tab-pane fade" id="ecommerce" role="tabpanel" aria-labelledby="ecommerce-tab">
                        <div class="row portfolio-responsive-slider">
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/1.mp4" data-poster="images/webp/portfolio/3d-animation/1.webp">
                                 <img src="images/webp/portfolio/3d-animation/1.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-3d-animation" href="https://www.citrusanimations.com/portfolio-videos/3d-animation/1.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
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
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/3.mp4" data-poster="images/webp/portfolio/3d-animation/2.webp">
                                 <img src="images/webp/portfolio/3d-animation/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-3d-animation" href="https://www.citrusanimations.com/portfolio-videos/3d-animation/3.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
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
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/4.mp4" data-poster="images/webp/portfolio/3d-animation/3.webp">
                                 <img src="images/webp/portfolio/3d-animation/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-3d-animation" href="https://www.citrusanimations.com/portfolio-videos/3d-animation/4.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
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
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/5.mp4" data-poster="images/webp/portfolio/3d-animation/4.webp">
                                 <img src="images/webp/portfolio/3d-animation/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/3d-animation/5.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
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
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/2.mp4" data-poster="images/webp/portfolio/3d-animation/5.webp">
                                 <img src="images/webp/portfolio/3d-animation/5.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-3d-animation" href="https://www.citrusanimations.com/portfolio-videos/3d-animation/2.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
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
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/6.mp4" data-poster="images/webp/portfolio/3d-animation/6.webp">
                                 <img src="images/webp/portfolio/3d-animation/6.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-3d-animation" href="https://www.citrusanimations.com/portfolio-videos/3d-animation/6.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
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
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/7.mp4" data-poster="images/webp/portfolio/3d-animation/7.webp">
                                 <img src="images/webp/portfolio/3d-animation/7.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-3d-animation" href="https://www.citrusanimations.com/portfolio-videos/3d-animation/7.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
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
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/10.mp4" data-poster="images/webp/portfolio/3d-animation/8.webp">
                                 <img src="images/webp/portfolio/3d-animation/8.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-3d-animation" href="https://www.citrusanimations.com/portfolio-videos/3d-animation/10.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
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
                     <!-- here is a tab 3 -->
                     <div class="tab-pane fade" id="animation" role="tabpanel" aria-labelledby="animation-tab">
                        <div class="row portfolio-responsive-slider">

                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/1.mp4" data-poster="images/webp/portfolio/whiteboard/1.webp">
                                 <img src="images/webp/portfolio/whiteboard/1.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/1.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Whiteboard Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/2.mp4" data-poster="images/webp/portfolio/whiteboard/2.webp">
                                 <img src="images/webp/portfolio/whiteboard/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/2.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Whiteboard Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/3.mp4" data-poster="images/webp/portfolio/whiteboard/3.webp">
                                 <img src="images/webp/portfolio/whiteboard/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/3.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Whiteboard Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/4.mp4" data-poster="images/webp/portfolio/whiteboard/4.webp">
                                 <img src="images/webp/portfolio/whiteboard/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/4.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Whiteboard Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/5.mp4" data-poster="images/webp/portfolio/whiteboard/5.webp">
                                 <img src="images/webp/portfolio/whiteboard/5.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/5.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Whiteboard Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/6.mp4" data-poster="images/webp/portfolio/whiteboard/6.webp">
                                 <img src="images/webp/portfolio/whiteboard/6.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/6.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Whiteboard Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/7.mp4" data-poster="images/webp/portfolio/whiteboard/7.webp">
                                 <img src="images/webp/portfolio/whiteboard/7.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/7.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Whiteboard Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/9.mp4" data-poster="images/webp/portfolio/whiteboard/8.webp">
                                 <img src="images/webp/portfolio/whiteboard/8.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/9.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Whiteboard Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/15.mp4" data-poster="images/webp/portfolio/whiteboard/9.webp">
                                 <img src="images/webp/portfolio/whiteboard/9.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/15.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Whiteboard Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- here is a tab 4 -->
                     <div class="tab-pane fade" id="motion" role="tabpanel" aria-labelledby="motion-tab">
                        <div class="row portfolio-responsive-slider">
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/10.mp4" data-poster="images/webp/portfolio/motion-graphics/1.webp">
                                 <img src="images/webp/portfolio/motion-graphics/1.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/10.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Motion Graphics</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/11.mp4" data-poster="images/webp/portfolio/motion-graphics/2.webp">
                                 <img src="images/webp/portfolio/motion-graphics/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-motion-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/11.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Motion Graphics</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/12.mp4" data-poster="images/webp/portfolio/motion-graphics/3.webp">
                                 <img src="images/webp/portfolio/motion-graphics/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/12.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Motion Graphics</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/13.mp4" data-poster="images/webp/portfolio/motion-graphics/4.webp">
                                 <img src="images/webp/portfolio/motion-graphics/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/13.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Motion Graphics</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/14.mp4" data-poster="images/webp/portfolio/motion-graphics/5.webp">
                                 <img src="images/webp/portfolio/motion-graphics/5.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/14.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Motion Graphics</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/1.mp4" data-poster="images/webp/portfolio/motion-graphics/6.webp">
                                 <img src="images/webp/portfolio/motion-graphics/6.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/1.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Motion Graphics</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/2.mp4" data-poster="images/webp/portfolio/motion-graphics/7.webp">
                                 <img src="images/webp/portfolio/motion-graphics/7.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/2.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Motion Graphics</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/3.mp4" data-poster="images/webp/portfolio/motion-graphics/8.webp">
                                 <img src="images/webp/portfolio/motion-graphics/8.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/3.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Motion Graphics</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/9.mp4" data-poster="images/webp/portfolio/motion-graphics/9.webp">
                                 <img src="images/webp/portfolio/motion-graphics/9.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/9.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Motion Graphics</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                     <!-- here is a tab 5 -->
                     <div class="tab-pane fade" id="typography" role="tabpanel" aria-labelledby="whiteboard-tab">
                        <div class="row portfolio-responsive-slider">
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/typography/1.mp4" data-poster="images/webp/portfolio/typography/1.webp">
                                 <img src="images/webp/portfolio/typography/1.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/1.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Typography</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/typography/2.mp4" data-poster="images/webp/portfolio/typography/2.webp">
                                 <img src="images/webp/portfolio/typography/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/2.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Typography</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/typography/3.mp4" data-poster="images/webp/portfolio/typography/3.webp">
                                 <img src="images/webp/portfolio/typography/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/3.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Typography</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/typography/4.mp4" data-poster="images/webp/portfolio/typography/4.webp">
                                 <img src="images/webp/portfolio/typography/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/4.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Typography</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/typography/5.mp4" data-poster="images/webp/portfolio/typography/5.webp">
                                 <img src="images/webp/portfolio/typography/5.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/5.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Typography</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/typography/6.mp4" data-poster="images/webp/portfolio/typography/6.webp">
                                 <img src="images/webp/portfolio/typography/6.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/6.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Typography</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- here is a tab 6 -->
                     <div class="tab-pane fade" id="screencast" role="tabpanel" aria-labelledby="screencast-tab">
                        <div class="row portfolio-responsive-slider">
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/screen-cast/1.mp4" data-poster="images/webp/portfolio/screen-cast/1.webp">
                                 <img src="images/webp/portfolio/screen-cast/1.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/screen-cast-animation/1.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Screen Cast</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/screen-cast/2.mp4" data-poster="images/webp/portfolio/screen-cast/2.webp">
                                 <img src="images/webp/portfolio/screen-cast/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/screen-cast-animation/2.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Screen Cast</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/screen-cast/3.mp4" data-poster="images/webp/portfolio/screen-cast/3.webp">
                                 <img src="images/webp/portfolio/screen-cast/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/screen-cast-animation/3.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Screen Cast</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/screen-cast/4.mp4" data-poster="images/webp/portfolio/screen-cast/4.webp">
                                 <img src="images/webp/portfolio/screen-cast/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/screen-cast-animation/4.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Screen Cast</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- here is a tab 7 -->
                     <div class="tab-pane fade" id="logo-animation" role="tabpanel" aria-labelledby="logo-tab">
                        <div class="row portfolio-responsive-slider">
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/logo-animation/2.mp4" data-poster="images/webp/portfolio/logo-animation/2.webp">
                                 <img src="images/webp/portfolio/logo-animation/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/2.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Logo Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/logo-animation/3.mp4" data-poster="images/webp/portfolio/logo-animation/3.webp">
                                 <img src="images/webp/portfolio/logo-animation/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/3.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Logo Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/logo-animation/4.mp4" data-poster="images/webp/portfolio/logo-animation/4.webp">
                                 <img src="images/webp/portfolio/logo-animation/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/4.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Logo Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/logo-animation/5.mp4" data-poster="images/webp/portfolio/logo-animation/5.webp">
                                 <img src="images/webp/portfolio/logo-animation/5.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/5.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Logo Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/logo-animation/6.mp4" data-poster="images/webp/portfolio/logo-animation/6.webp">
                                 <img src="images/webp/portfolio/logo-animation/6.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/6.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Logo Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/logo-animation/7.mp4" data-poster="images/webp/portfolio/logo-animation/7.webp">
                                 <img src="images/webp/portfolio/logo-animation/7.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/7.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Logo Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/logo-animation/8.mp4" data-poster="images/webp/portfolio/logo-animation/8.webp">
                                 <img src="images/webp/portfolio/logo-animation/8.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/8.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Logo Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/logo-animation/9.mp4" data-poster="images/webp/portfolio/logo-animation/9.webp">
                                 <img src="images/webp/portfolio/logo-animation/9.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/9.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Logo Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- here is a tab 8 -->
                     <div class="tab-pane fade" id="product" role="tabpanel" aria-labelledby="product-tab">
                        <div class="row portfolio-responsive-slider">
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/1.mp4" data-poster="images/webp/portfolio/product-animation/1.webp">
                                 <img src="images/webp/portfolio/product-animation/1.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/1.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Product Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/2.mp4" data-poster="images/webp/portfolio/product-animation/2.webp">
                                 <img src="images/webp/portfolio/product-animation/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/2.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Product Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/3.mp4" data-poster="images/webp/portfolio/product-animation/3.webp">
                                 <img src="images/webp/portfolio/product-animation/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/3.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Product Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/4.mp4" data-poster="images/webp/portfolio/product-animation/4.webp">
                                 <img src="images/webp/portfolio/product-animation/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/4.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Product Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/5.mp4" data-poster="images/webp/portfolio/product-animation/5.webp">
                                 <img src="images/webp/portfolio/product-animation/5.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/5.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Product Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/6.mp4" data-poster="images/webp/portfolio/product-animation/6.webp">
                                 <img src="images/webp/portfolio/product-animation/6.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/6.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Product Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/7.mp4" data-poster="images/webp/portfolio/product-animation/7.webp">
                                 <img src="images/webp/portfolio/product-animation/7.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/7.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Product Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/8.mp4" data-poster="images/webp/portfolio/product-animation/8.webp">
                                 <img src="images/webp/portfolio/product-animation/8.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/8.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Product Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/9.mp4" data-poster="images/webp/portfolio/product-animation/9.webp">
                                 <img src="images/webp/portfolio/product-animation/9.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/9.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Product Animation</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>
                     <!-- here is a tab 9 -->
                     {{-- <div class="tab-pane fade" id="illustration" role="tabpanel" aria-labelledby="illustration-tab">
                        <div class="row portfolio-responsive-slider">
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="images/webp/illustration/children/1.webp" data-poster="images/webp/illustration/children/1.webp">
                                 <img src="images/webp/illustration/children/1.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="images/webp/illustration/children/1.webp"><i class="fas fa-plus"></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Children Illustration</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="images/webp/illustration/children/2.webp" data-poster="images/webp/illustration/children/2.webp">
                                 <img src="images/webp/illustration/children/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="images/webp/illustration/children/2.webp"><i class="fas fa-plus"></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Children Illustration</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="images/webp/illustration/fashion/4.webp" data-poster="images/webp/illustration/fashion/4.webp">
                                 <img src="images/webp/illustration/fashion/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">
                                       <div class="video-hover">

                                       </div>
                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                          <a data-fancybox="video-2d-animation" href="images/webp/illustration/fashion/4.webp"><i class="fas fa-plus"></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Fashion Illustration</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="images/webp/illustration/fashion/5.webp" data-poster="images/webp/illustration/fashion/5.webp">
                                 <img src="images/webp/illustration/fashion/5.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">
                                       <div class="video-hover">

                                       </div>
                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                          <a data-fancybox="video-2d-animation" href="images/webp/illustration/fashion/5.webp"><i class="fas fa-plus"></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Fashion Illustration</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="images/webp/illustration/architecture/2.webp" data-poster="images/webp/illustration/architecture/2.webp">
                                 <img src="images/webp/illustration/architecture/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">
                                       <div class="video-hover">

                                       </div>
                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                          <a data-fancybox="video-2d-animation" href="images/webp/illustration/architecture/2.webp"><i class="fas fa-plus"></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Architecture Illustration</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="images/webp/illustration/architecture/3.webp" data-poster="images/webp/illustration/architecture/3.webp">
                                 <img src="images/webp/illustration/architecture/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">
                                       <div class="video-hover">

                                       </div>
                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                          <a data-fancybox="video-2d-animation" href="images/webp/illustration/architecture/3.webp"><i class="fas fa-plus"></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Architecture Illustration</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                            <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="images/webp/illustration/food-drinks/1.webp" data-poster="images/webp/illustration/food-drinks/1.webp">
                                 <img src="images/webp/illustration/food-drinks/1.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                          <a data-fancybox="video-2d-animation" href="images/webp/illustration/food-drinks/1.webp"><i class="fas fa-plus"></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Food & Drink</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="images/webp/illustration/food-drinks/2.webp" data-poster="images/webp/illustration/food-drinks/2.webp">
                                 <img src="images/webp/illustration/food-drinks/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                          <a data-fancybox="video-2d-animation" href="images/webp/illustration/food-drinks/2.webp"><i class="fas fa-plus"></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Food & Drink</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="images/webp/illustration/animals/4.webp" data-poster="images/webp/illustration/animals/4.webp">
                                 <img src="images/webp/illustration/animals/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                          <a data-fancybox="video-2d-animation" href="images/webp/illustration/animals/4.webp"><i class="fas fa-plus"></i></a>
                                          </div>
                                          <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div>
                                          <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>Animals</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div> --}}
                     <!-- here is a tab 10 -->
                     <div class="tab-pane fade" id="music-video" role="tabpanel" aria-labelledby="music-video-tab">
                        <div class="row portfolio-responsive-slider">
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/1.mp4" data-poster="images/webp/portfolio/music-animation/1.webp">
                                 <img src="images/webp/portfolio/music-animation/1.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/1.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/2.mp4" data-poster="images/webp/portfolio/music-animation/2.webp">
                                 <img src="images/webp/portfolio/music-animation/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/2.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/3.mp4" data-poster="images/webp/portfolio/music-animation/3.webp">
                                 <img src="images/webp/portfolio/music-animation/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/3.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/4.mp4" data-poster="images/webp/portfolio/music-animation/4.webp">
                                 <img src="images/webp/portfolio/music-animation/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/4.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/5.mp4" data-poster="images/webp/portfolio/music-animation/5.webp">
                                 <img src="images/webp/portfolio/music-animation/5.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/5.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/6.mp4" data-poster="images/webp/portfolio/music-animation/6.webp">
                                 <img src="images/webp/portfolio/music-animation/6.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/6.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/7.mp4" data-poster="images/webp/portfolio/music-animation/7.webp">
                                 <img src="images/webp/portfolio/music-animation/7.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/7.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/8.mp4" data-poster="images/webp/portfolio/music-animation/8.webp">
                                 <img src="images/webp/portfolio/music-animation/8.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/8.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/9.mp4" data-poster="images/webp/portfolio/music-animation/9.webp">
                                 <img src="images/webp/portfolio/music-animation/9.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/9.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
                                          <li>Modeling</li>
                                          <li>Animation</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                          <div class="col-lg-4 col-md-12">
                              <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/10.mp4" data-poster="images/webp/portfolio/music-animation/10.webp">
                                 <img src="images/webp/portfolio/music-animation/10.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/music-animation/10.mp4"><i class="fas fa-play" muted=""></i></a>
                                          </div>
                                          {{-- <div class="video-like-icon">
                                             <a href="#"><i class="far fa-thumbs-up"></i></a>
                                          </div> --}}
                                          {{-- <div class="video-dislike-icon">
                                             <a href="#"><i class="far fa-thumbs-down"></i></a>
                                          </div> --}}
                                       </div>
                                       <ul>
                                          <li>Animated Music Video</li>
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
                     <a href="javascript:;" class="border-btn default-btn" data-toggle="modal" data-target=".bd-example-modal-lg">Get A Free Quote <i class="sprite sprite-arrow"></i></a>
                  </div>
               </div>
            </div>
         </section>

         <script src="js/plugin.js"></script>


  <!-- Mirrored from www.citrusanimations.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Dec 2021 05:33:57 GMT -->


















<!-- <section class="section section-padding-equal bg-color-dark">
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
                                    <img src="assets/media/project/pro4.gif" alt="project">
                                </a>
                            </div>
                            <div class="content">
                                <span class="subtitle"></span>
                                <h3 class="title"><a href="{{route('explainer_videos')}}">Explainer-Videos</a></h3>
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
        </section>-->





        <section class="banner banner-style-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-7">
                        <div class="banner-content">
                            <h1 class="title" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">Talk to Our Team Today
                                </h1><p>If you have any questions about our services, or want to discuss your project, shoot us an email at westcoastanimations.com</p>
                            <div data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                                <a href="{{route('portfolio')}}" class="axil-btn btn-fill-white btn-large">View Showcase</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                        <div class="banner-form">
                            <div class="contact-form-box shadow-box">
                                <h3 class="title">Get a free Keystroke quote now</h3>







<!-- form code-->

<!--action="mail.php" class="axil-contact-form-->
@if(session()->has('message'))
<div class="alert alert-success" role="alert">
{{ session()->get('message') }}
</div>
@endif
                                <form  action="{{ route('send.email') }}" method="POST" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="John Doe">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="example@mail.com">
                                    </div>
                                    <div class="form-group mb--40">
                                        <label>Phone</label>
                                        <input type="tel" class="form-control" name="phone" placeholder="+123456789">
                                    </div>
                                    <div class="form-group mb--40">
                                        <label>How can we help you?</label>
                                        <textarea name="msg" id="contact-message" class="form-control textarea" cols="30" rows="4"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="axil-btn btn-borderd btn-fluid btn-primary" name="submit-btn">Get Pricing Now</button>
                                    </div>
                                   <!-- <input type="hidden" class="form-control" name="contact-message" value="Null">-->
                                </form>






                            </div>
                        </div>
                    </div>
                </div>
            </div>
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




    <div class="footer-social-link">
        <ul class="list-unstyled">
            <li><a href="#" data-sal="slide-up" data-sal-duration="500" data-sal-delay="100"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#" data-sal="slide-up" data-sal-duration="500" data-sal-delay="200"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#" data-sal="slide-up" data-sal-duration="500" data-sal-delay="300"><i class="fab fa-pinterest-p"></i></a></li>
            <li><a href="#" data-sal="slide-up" data-sal-duration="500" data-sal-delay="400"><i class="fab fa-linkedin-in"></i></a></li>
            <li><a href="#" data-sal="slide-up" data-sal-duration="500" data-sal-delay="500"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#" data-sal="slide-up" data-sal-duration="500" data-sal-delay="600"><i class="fab fa-vimeo-v"></i></a></li>
            <li><a href="#" data-sal="slide-up" data-sal-duration="500" data-sal-delay="700"><i class="fab fa-dribbble"></i></a></li>
            <li><a href="#" data-sal="slide-up" data-sal-duration="500" data-sal-delay="800"><i class="fab fa-behance"></i></a></li>
        </ul>
    </div>
                <div  class="container">
                    <div class="row">
                        <div class="col-lg-5">
                            <!--<div class="section-heading heading-left mb-0">
                                <span class="subtitle">Our Portfolio</span>
                                <h3 class="title">CREATE THE EYE-CATCHING ANIMATIONS FOR YOU</h3>
                            </div>-->
                            <!--<p>Let's bring your imagination to life with our expert and artistic animation professionals.</p>
                            <p>Creative designs that compel you to choose Logo Vibrant as your digital partner! We offer you with nothing less than unprecedented quality, innovative thinking and a team that loves to bring your ideas to life.</p>-->
                          <!--  <a href="{{route('contact')}}" class="axil-btn btn-fill-primary">Get it Now</a>-->
                        </div>
            <ul class="shape-group-16 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-2.png" alt="Line"></li>
                <li class="shape shape-3"><img src="assets/media/others/bubble-1.png" alt="Line"></li>
            </ul>
        </div>
        <!--=====================================-->
               <!--=       Projects  Area Start        =-->
        <!--=====================================
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

