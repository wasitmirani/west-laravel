<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>White-Board</title>
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
                            <img src="assets/media/project/whiteboard/2.gif" alt="travel">
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="case-study-featured">
                            <div class="section-heading heading-left">
                                <span class="subtitle">WestCoast Animations</span>
                                <h2 class="title">Make Things Interesting
                                    For Everyone With
                                    Our Whiteboard Animations</h2>
                                <p>
                                    Educate people in a way which also keeps them entertained. Our experts create whiteboard animations with utmost precision and professionalism. We offer the best in every field.</p>

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





        <section class="main-portfolio-wrap">
            <div class="container">
               <div class="portfolio-heading">
                  <h3>Portfolio</h3>
               </div>
               <div class="heading">
                  <h3>Our Journey Towards The Best</h3>
                  <p>With decades of experience in animations our team has worked to the top. <br>
                     Our efforts speaks for themselves.</p>
               </div>
               <div class="portfolio-wrap inner-portfolio-wrap">
                  <div class="tab-content" id="myTabContent">
                     <!-- here is a tab 1 -->
                     <div class="tab-pane fade show active" id="animation" role="tabpanel" aria-labelledby="animation-tab">
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
                                 <img src="images/webp/portfolio/whiteboard/2.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/2.mp4"><i class="fas fa-play" muted=""></i></a>
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
                                 <img src="images/webp/portfolio/whiteboard/3.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/3.mp4"><i class="fas fa-play" muted=""></i></a>
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
                                 <img src="images/webp/portfolio/whiteboard/4.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/4.mp4"><i class="fas fa-play" muted=""></i></a>
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
                                 <img src="images/webp/portfolio/whiteboard/5.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/5.mp4"><i class="fas fa-play" muted=""></i></a>
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
                                 <img src="images/webp/portfolio/whiteboard/6.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/6.mp4"><i class="fas fa-play" muted=""></i></a>
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
                                 <img src="images/webp/portfolio/whiteboard/7.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="portfolio-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/7.mp4"><i class="fas fa-play" muted=""></i></a>
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
                                 <img src="images/webp/portfolio/whiteboard/8.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/9.mp4"><i class="fas fa-play" muted=""></i></a>
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
                                 <img src="images/webp/portfolio/whiteboard/9.webp" alt="" class="img-fluid">
                                 <div class="video-hover-box-wrap">
                                    <div class="video-hover">

                                    </div>
                                    <div class="video-hover-text-wrap">
                                       <div class="video-icon">
                                          <div class="video-play-icon">
                                             <a data-fancybox="video-whiteboard" href="https://www.citrusanimations.com/portfolio-videos/whiteboard/15.mp4"><i class="fas fa-play" muted=""></i></a>
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
                  </div>
                  <div class="portfolio-btn">
                     <a href="{{route('portfolio')}}" class="orange-btn default-btn chat">Let’s Animate <i class="sprite sprite-arrow"></i></a>
                     <a href="{{route('contact')}}" class="border-btn default-btn" data-toggle="modal" data-target=".bd-example-modal-lg">Get A Free Quote <i class="sprite sprite-arrow"></i></a>
                  </div>
               </div>
            </div>
         </section>

         <script src="js/plugin.js"></script>





        <!--  <section class="section section-padding-equal pt--200 pt_md--80 pt_sm--60">
            <div class="container">
                <div class="section-heading heading-left">
                    <span class="subtitle">We Give Life To your Idea.
                    </span>
                    <h2 class="title">Whiteboard Animations
                        For Explaining Creatively.</h2>
                    <p>

We Deliver Professional Video Solutions And production strategies to deliver impactful & eye-catching videos.
                         </p> <p>Whiteboard animation is a method where a story is conveyed on a whiteboard. Initially, writers would record themselves while drawing on a whiteboard. This animation style was demonstrated to be so appealing that it is now hugely famous among animators, marketers, & educators alike.</p>
                </div>
                <div class="axil-isotope-wrapper">
                    <div class="isotope-button isotope-project-btn">
                      <!--  <button data-filter="*" class="is-checked"><span class="filter-text">All Works</span></button>
                        <button data-filter=".branding"><span class="filter-text">Branding</span></button>
                        <button data-filter=".mobile"><span class="filter-text">Mobile</span></button>-->
                  <!--  </div>
                    <div class="row row-35 isotope-list">
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">

                                            <video autoplay width="786.5" height="442.27" src="assets/media/project/whiteboard/1.mp4"></video>
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">white-board-Animation</a></h4>
                                    <span class="subtitle">.Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
<div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/whiteboard/7.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">white-board-Animation</a></h4>
                                    <span class="subtitle">.Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/whiteboard/3.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">white-board-Animation</a></h4>
                                    <span class="subtitle">.Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/whiteboard/4.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">white-board-Animation</a></h4>
                                    <span class="subtitle">.Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
                       <div class="col-md-6 project branding">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/whiteboard/5.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">white-board-Animation</a></h4>
                                    <span class="subtitle">Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 project mobile">
                            <div class="project-grid">
                                <div class="thumbnail">
                                    <a href="single-portfolio.html">
                                        <video autoplay width="789.5" height="442.27" src="assets/media/project/whiteboard/6.mp4" alt="project">
                                    </a>
                                </div>
                                <div class="content">
                                    <h4 class="title"><a href="single-portfolio.html">white-board-Animation</a></h4>
                                    <span class="subtitle">Modeling   .Animation</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="more-project-btn">
                        <a href="{{route('portfolio')}}" class="axil-btn btn-fill-primary">Discover More Projects</a>
                    </div>
                </div>
            </div>-->
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
    <script src="https://kit.fontawesome.com/3f8daf2c35.js" crossorigin="anonymous"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
</body>

</html>
