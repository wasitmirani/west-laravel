<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WestCoast Animations | Contact</title>
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
        <!--=====================================
        @include('components.breadcrumb')-->





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
        <!--=       Contact  Area Start        =-->
        <!--=====================================
        <section class="section section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-6">
                        <div class="contact-form-box shadow-box mb--30">
                            <h3 class="title">Talk to Our Team Today</h3>
                               <p> If you have any questions about our services, or want to discuss your project, shoot us an email at
                                <a href=" westcoastanimations@gmail.com"> westcoastanimations@gmail.com</a>
                               </p>

                            <form method="POST" action="mail.php" class="axil-contact-form">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="contact-name">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="contact-email">
                                </div>
                                <div class="form-group">
                                    <label>Contact</label>
                                    <input type="text" class="form-control" name="contact-number">
                                </div>
                                <div class="form-group mb--40">
                                    <label>How can we help you?</label>
                                    <textarea name="contact-message" id="contact-message" class="form-control textarea" cols="30" rows="4"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="axil-btn btn-fill-primary btn-fluid btn-primary" name="submit-btn">Get Pricing Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 offset-xl-1">
                        <div class="contact-info mb--100 mb_md--30 mt_md--0 mt--150">
                            <h4 class="title">Phone</h4>
                            <p>Our customer care is open from Mon-Fri, 10:00 am to 6:00 pm</p>
                            <h4 class="phone-number"><a href="tel:1234567890">(123) 456 7890</a></h4>
                        </div>
                        <div class="contact-info mb--30">
                            <h4 class="title">Email</h4>
                            <p>Our support team will get back to in 48-h during standard business hours.</p>
                            <h4 class="phone-number"><a href="mailto:info@example.com">info@example.com</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="list-unstyled shape-group-12">
                <li class="shape shape-1"><img src="assets/media/others/bubble-2.png" alt="Bubble"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-1.png" alt="Bubble"></li>
                <li class="shape shape-3"><img src="assets/media/others/circle-3.png" alt="Circle"></li>
            </ul>
        </section>-->

        <!--=====================================-->
        <!--=       Location  Area Start        =-->
        <!--=====================================
        <section class="section section-padding bg-color-dark overflow-hidden">
            <div class="container">
                <div class="section-heading heading-light-left">
                    <span class="subtitle">Find Us</span>
                    <h2 class="title">Our office</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="office-location">
                            <div class="thumbnail">
                                <img src="assets/media/others/location-1.png" alt="Office">
                            </div>
                            <div class="content">
                                <h4 class="title">Virginia-HQ</h4>
                                <p>435 Pouros Locks United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="office-location">
                            <div class="thumbnail">
                                <img src="assets/media/others/location-2.png" alt="Office">
                            </div>
                            <div class="content">
                                <h4 class="title">Nevada</h4>
                                <p>46 Watsica Creek Suite 071 United States</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="office-location">
                            <div class="thumbnail">
                                <img src="assets/media/others/location-3.png" alt="Office">
                            </div>
                            <div class="content">
                                <h4 class="title">Columbia</h4>
                                <p>7140 Wehner Tunnel Washington, D.C</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="office-location">
                            <div class="thumbnail">
                                <img src="assets/media/others/location-4.png" alt="Office">
                            </div>
                            <div class="content">
                                <h4 class="title">New Mexico</h4>
                                <p>10 Maggie Valleys United States</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-11 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/line-6.png" alt="line"></li>
                <li class="shape shape-2"><img src="assets/media/others/circle-3.png" alt="line"></li>
            </ul>
        </section>-->
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
