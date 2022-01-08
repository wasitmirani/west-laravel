<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Typography</title>
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
        <!--=====================================-->
        <!--=       Breadcrumb Area Start       =-->
        <!--=====================================-->

        <section class="section section-padding case-study-featured-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="case-study-featured-thumb text-start">
                            <img src="assets/media/project/typography/6.gif" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">WestCoast Animations</span>
                                <h2 class="title">Present Your Words In
                                    A More Attractive Way</h2>
                                <p>
                                    We Deliver Professional Video Solutions And production strategies to deliver impactful & eye-catching videos.</p>
                                <p>Typography is basically how text is presented, in the most literal sense. Typography has real potential to make or break a business. Whether the company is professional consulting service, a healthcare provider or an educational platform — the choice and style of words can make a big difference</p>
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
      <!--  <section class="section section-padding-equal pt--200 pt_md--80 pt_sm--60">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">We Give Life To your Idea.
                    </span>
                    <h2 class="title">OUR JOURNEY TOWARDS THE BEST</h2>
                    <p>
                        With decades of experience in animations our team has worked to the top.
Our efforts speaks for themselves.
                         </p>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                      <!--  <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                        <button data-filter=".branding"><span class="filter-text">Branding</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Mobile</span></button>-->
                 <!--   </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">

                                            <video autoplay width="786.5" height="442.27" src="assets/media/project/typography/1.mp4"></video>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Explainer-Videos</a></h4>
                                    <span class="subtitle">.Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
<!--<div class="col-md-6 project mobile">-->
                          <!--  <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/typography/2.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Explainer-Videos</a></h4>
                                    <span class="subtitle">.Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/typography/3.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Explainer-Videos</a></h4>
                                    <span class="subtitle">.Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/typography/4.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Explainer-Videos</a></h4>
                                    <span class="subtitle">.Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/typography/5.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Explainer-Videos</a></h4>
                                    <span class="subtitle">Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/pro6.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">Explainer-Videos</a></h4>
                                    <span class="subtitle">Modeling   .Animation</span>
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



<!--citrus code-->

<div class="boby-animation scrollContainer">







    <section class="main-portfolio-wrap">
      <div class="container">
         <div class="portfolio-heading">
            <h3 class="ml3">Portfolio</h3>
         </div>
         <div class="heading">
            <h3>Self-explanatory Typographic
                Animations For Your Brand.</h3>
            <p>Writing is an art, making it interesting is more than art. We have artisits who have been animating typography since decades. We create content which attracts every target audience.</p>
         </div>

         <div class="portfolio-wrap">
            <ul class="nav nav-tabs cust-nav-tabs justify-content-center border-0" id="myTab" role="tablist">
               <li class="nav-item">
                  <a class="nav-link active cust-nav-link" id="b2b-tab" data-toggle="tab" href="#b2b" role="tab" aria-controls="b2b" aria-selected="true">Typography</a>
               </li>
            <!--   <li class="nav-item">
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/\typography/1.mp4" data-poster="images/webp/portfolio/typography/1.webp">
                           <img src="images/webp/portfolio/typography/1.webp" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/\typography/1.mp4" ><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/2.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/3.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/4.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/5.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/typography/6.mp4" data-poster="images/webp/portfolio/2d-animation/6.webp">
                           <img src="images/webp/portfolio/2d-animation/6.webp" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/6.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                   <!-- <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>-->
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/2d-animation/12.mp4" data-poster="images/webp/portfolio/2d-animation/7.webp">
                           <img src="images/webp/portfolio/2d-animation/7.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/12.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/2d-animation/8.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/18.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/2d-animation/9.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/2d-animation/15.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
             <!--  <div class="tab-pane fade" id="ecommerce" role="tabpanel"
                  aria-labelledby="ecommerce-tab">
                  <div class="row portfolio-responsive-slider">
                     <div class="col-lg-4 col-md-12">
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/1.mp4" data-poster="images/webp/portfolio/3d-animation/1.webp">
                           <img src="images/webp/portfolio/3d-animation/1.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-3d-animation" href="portfolio-videos/3d-animation/1.mp4" ><i class="fas fa-play" muted></i></a>
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/3.mp4" data-poster="images/webp/portfolio/3d-animation/2.webp">
                           <img src="images/webp/portfolio/3d-animation/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-3d-animation" href="portfolio-videos/3d-animation/3.mp4"><i class="fas fa-play" muted></i></a>
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/4.mp4" data-poster="images/webp/portfolio/3d-animation/3.webp">
                           <img src="images/webp/portfolio/3d-animation/3.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-3d-animation" href="portfolio-videos/3d-animation/4.mp4"><i class="fas fa-play" muted></i></a>
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/5.mp4" data-poster="images/webp/portfolio/3d-animation/4.webp">
                           <img src="images/webp/portfolio/3d-animation/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="portfolio-videos/3d-animation/5.mp4"><i class="fas fa-play" muted></i></a>
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/2.mp4" data-poster="images/webp/portfolio/3d-animation/5.webp">
                           <img src="images/webp/portfolio/3d-animation/5.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-3d-animation" href="portfolio-videos/3d-animation/2.mp4"><i class="fas fa-play" muted></i></a>
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/6.mp4" data-poster="images/webp/portfolio/3d-animation/6.webp">
                           <img src="images/webp/portfolio/3d-animation/6.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-3d-animation" href="portfolio-videos/3d-animation/6.mp4"><i class="fas fa-play" muted></i></a>
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/7.mp4" data-poster="images/webp/portfolio/3d-animation/7.webp">
                           <img src="images/webp/portfolio/3d-animation/7.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-3d-animation" href="portfolio-videos/3d-animation/7.mp4"><i class="fas fa-play" muted></i></a>
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
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/3d-animation/10.mp4" data-poster="images/webp/portfolio/3d-animation/8.webp">
                           <img src="images/webp/portfolio/3d-animation/8.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-3d-animation" href="portfolio-videos/3d-animation/10.mp4"><i class="fas fa-play" muted></i></a>
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
               </div>-->
               <!-- here is a tab 3 -->
               <div class="tab-pane fade" id="animation" role="tabpanel"
                  aria-labelledby="animation-tab">
                  <div class="row portfolio-responsive-slider">

                     <div class="col-lg-4 col-md-12">
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/whiteboard/1.mp4" data-poster="images/webp/portfolio/whiteboard/1.webp">
                           <img src="images/webp/portfolio/whiteboard/1.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/1.mp4" ><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/whiteboard/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/2.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/whiteboard/3.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/3.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/whiteboard/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/4.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/whiteboard/5.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/5.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/whiteboard/6.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/6.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/whiteboard/7.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/7.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/whiteboard/8.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/9.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/whiteboard/9.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/15.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
               <div class="tab-pane fade" id="motion" role="tabpanel"
                  aria-labelledby="motion-tab">
                  <div class="row portfolio-responsive-slider">
                     <div class="col-lg-4 col-md-12">
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/motion-graphics/10.mp4" data-poster="images/webp/portfolio/motion-graphics/1.webp">
                           <img src="images/webp/portfolio/motion-graphics/1.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/10.mp4" ><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/motion-graphics/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-motion-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/11.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/motion-graphics/3.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/12.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/motion-graphics/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/13.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/motion-graphics/5.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/14.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/motion-graphics/6.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/1.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/motion-graphics/7.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/2.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/motion-graphics/8.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/3.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/motion-graphics/9.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/motion-graphics/9.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
               <div class="tab-pane fade" id="typography" role="tabpanel"
                aria-labelledby="whiteboard-tab">
                  <div class="row portfolio-responsive-slider">
                     <div class="col-lg-4 col-md-12">
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/typography/1.mp4" data-poster="images/webp/portfolio/typography/1.webp">
                           <img src="images/webp/portfolio/typography/1.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/1.mp4" ><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/typography/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/2.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/typography/3.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/3.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/typography/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="portfolio-videos/typography/4.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/typography/5.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/5.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/typography/6.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/typography/6.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
               <div class="tab-pane fade" id="screencast" role="tabpanel"
                aria-labelledby="screencast-tab">
                  <div class="row portfolio-responsive-slider">
                     <div class="col-lg-4 col-md-12">
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/screen-cast/1.mp4" data-poster="images/webp/portfolio/screen-cast/1.webp">
                           <img src="images/webp/portfolio/screen-cast/1.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/screen-cast-animation/1.mp4" ><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/screen-cast/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/screen-cast-animation/2.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/screen-cast/3.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/screen-cast-animation/3.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/screen-cast/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/screen-cast-animation/4.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
               <div class="tab-pane fade" id="logo-animation" role="tabpanel"
                aria-labelledby="logo-tab">
                  <div class="row portfolio-responsive-slider">
                     <div class="col-lg-4 col-md-12">
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/logo-animation/2.mp4" data-poster="images/webp/portfolio/logo-animation/2.webp">
                           <img src="images/webp/portfolio/logo-animation/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/2.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/logo-animation/3.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/3.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/logo-animation/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/4.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/logo-animation/5.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/5.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/logo-animation/6.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/6.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/logo-animation/7.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/7.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/logo-animation/8.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/8.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/logo-animation/9.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/logo-animation/9.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
               <div class="tab-pane fade" id="product" role="tabpanel"
                 aria-labelledby="product-tab">
                  <div class="row portfolio-responsive-slider">
                     <div class="col-lg-4 col-md-12">
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/product-animation/1.mp4" data-poster="images/webp/portfolio/product-animation/1.webp">
                           <img src="images/webp/portfolio/product-animation/1.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/1.mp4" ><i class="fas fa-play" muted></i></a>
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
                           <img src="images/webp/portfolio/product-animation/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/2.mp4"><i class="fas fa-play" muted></i></a>
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
                           <img src="images/webp/portfolio/product-animation/3.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/3.mp4"><i class="fas fa-play" muted></i></a>
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
                           <img src="images/webp/portfolio/product-animation/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/4.mp4"><i class="fas fa-play" muted></i></a>
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
                           <img src="images/webp/portfolio/product-animation/5.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/5.mp4"><i class="fas fa-play" muted></i></a>
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
                        <div class="portfolio-box">
                           <img src="images/webp/portfolio/product-animation/6.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">
                                 <video loop="" muted>
                                    <source src="portfolio-videos/product-animation/6.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                 </video>
                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/6.mp4"><i class="fas fa-play" muted></i></a>
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
                           <img src="images/webp/portfolio/product-animation/7.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/7.mp4"><i class="fas fa-play" muted></i></a>
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
                           <img src="images/webp/portfolio/product-animation/8.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/8.mp4"><i class="fas fa-play" muted></i></a>
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
                           <img src="images/webp/portfolio/product-animation/9.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="https://www.citrusanimations.com/portfolio-videos/product-animation/9.mp4"><i class="fas fa-play" muted></i></a>
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
               <div class="tab-pane fade" id="illustration" role="tabpanel"
                 aria-labelledby="illustration-tab">
                  <div class="row portfolio-responsive-slider">
                     <div class="col-lg-4 col-md-12">
                        <div class="portfolio-box" data-video="images/webp/illustration/children/1.webp" data-poster="images/webp/illustration/children/1.webp">
                           <img src="images/webp/illustration/children/1.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="images/webp/illustration/children/1.html" ><i class="fas fa-plus"></i></a>
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
                           <img src="images/webp/illustration/children/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="images/webp/illustration/children/2.html" ><i class="fas fa-plus"></i></a>
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
                           <img src="images/webp/illustration/fashion/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">
                                 <div class="video-hover">

                                 </div>
                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                    <a data-fancybox="video-2d-animation" href="images/webp/illustration/fashion/4.html" ><i class="fas fa-plus"></i></a>
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
                           <img src="images/webp/illustration/fashion/5.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">
                                 <div class="video-hover">

                                 </div>
                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                    <a data-fancybox="video-2d-animation" href="images/webp/illustration/fashion/5.html" ><i class="fas fa-plus"></i></a>
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
                           <img src="images/webp/illustration/architecture/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">
                                 <div class="video-hover">

                                 </div>
                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                    <a data-fancybox="video-2d-animation" href="images/webp/illustration/architecture/2.html" ><i class="fas fa-plus"></i></a>
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
                           <img src="images/webp/illustration/architecture/3.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">
                                 <div class="video-hover">

                                 </div>
                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                    <a data-fancybox="video-2d-animation" href="images/webp/illustration/architecture/3.html" ><i class="fas fa-plus"></i></a>
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
                           <img src="images/webp/illustration/food-drinks/1.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                    <a data-fancybox="video-2d-animation" href="images/webp/illustration/food-drinks/1.html" ><i class="fas fa-plus"></i></a>
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
                           <img src="images/webp/illustration/food-drinks/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                    <a data-fancybox="video-2d-animation" href="images/webp/illustration/food-drinks/2.html" ><i class="fas fa-plus"></i></a>
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
                           <img src="images/webp/illustration/animals/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                    <a data-fancybox="video-2d-animation" href="images/webp/illustration/animals/4.html" ><i class="fas fa-plus"></i></a>
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
               </div>
               <!-- here is a tab 10 -->
               <div class="tab-pane fade" id="music-video" role="tabpanel"
                 aria-labelledby="music-video-tab">
                  <div class="row portfolio-responsive-slider">
                     <div class="col-lg-4 col-md-12">
                        <div class="portfolio-box" data-video="https://www.citrusanimations.com/portfolio-videos/music-animation/1.mp4" data-poster="images/webp/portfolio/music-animation/1.webp">
                           <img src="images/webp/portfolio/music-animation/1.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="portfolio-videos/music-animation/1.mp4" ><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/music-animation/2.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="portfolio-videos/music-animation/2.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/music-animation/3.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="portfolio-videos/music-animation/3.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/music-animation/4.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="portfolio-videos/music-animation/4.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/music-animation/5.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="portfolio-videos/music-animation/5.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/music-animation/6.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="portfolio-videos/music-animation/6.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/music-animation/7.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="portfolio-2d-animation" href="portfolio-videos/music-animation/7.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/music-animation/8.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="portfolio-videos/music-animation/8.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/music-animation/9.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="portfolio-videos/music-animation/9.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
                           <img src="images/webp/portfolio/music-animation/10.html" alt="" class="img-fluid">
                           <div class="video-hover-box-wrap">
                              <div class="video-hover">

                              </div>
                              <div class="video-hover-text-wrap">
                                 <div class="video-icon">
                                    <div class="video-play-icon">
                                       <a data-fancybox="video-2d-animation" href="portfolio-videos/music-animation/10.mp4"><i class="fas fa-play" muted></i></a>
                                    </div>
                                    <div class="video-like-icon">
                                       <a href="#"><i class="far fa-thumbs-up"></i></a>
                                    </div>
                                    <div class="video-dislike-icon">
                                       <a href="#"><i class="far fa-thumbs-down"></i></a>
                                    </div>
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
               <a href="{{route('contact')}}" class="border-btn default-btn" data-toggle="modal" data-target=".bd-example-modal-lg">Get A Free Quote <i class="sprite sprite-arrow"></i></a>
            </div>
         </div>
      </div>
   </section>









</div>

<script src="js/plugin.js"></script>
<div class="sticky-div-wraper">
<!-- <a href="javascript:;" class="chat chat-anch"></a>-->
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

<script src="js/core/pricingManagement.js"></script>






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
