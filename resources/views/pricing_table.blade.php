<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WestCoast Animations | Pricing Table</title>
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
        <!--=====================================-->
        <!--=        Pricing Area Start         =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading mb-0">
                    <span class="subtitle">Price Packages</span>
                    <h2 class="title">Find the Right Plan.</h2>
                    <p>We’re happy to work on custom packages to meet your needs.</p>
                </div>
                <div class="pricing-billing-duration">
                    <ul>
                        <li class="nav-item">
                            <button class="nav-link active" id="yearly-plan-btn" type="button">Billed monthly</button>
                        </li>
                        <!--<li class="nav-item">
                            <button class="nav-link" id="monthly-plan-btn" type="button">
                                Billed monthly</button>
                        </li>-->
                    </ul>
                </div>
                <div class="row">
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                        <div class="pricing-table active pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">BASIC ANIMATION</h3>
                                <span class="subtitle"></span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$499.00</span>
                                        <span class="duration">/Monthly</span>
                                    </div>
                                   <!-- <div class="monthly-pricing">
                                        <span class="amount">$120.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>-->
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{route('contact')}}" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>30sec Duration</li>
                                    <li>Script Writing</li>
                                    <li>Custom Artwork</li>
                                    <li>Background Music</li>
                                    <li>HD Format Video</li>
                                    <li>Dedicated Support</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="200">
                        <div class="pricing-table pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">PREMIUM ANIMATION</h3>
                                <span class="subtitle"></span>
                                <div class="price-wrap">
                                   <div class="yearly-pricing">
                                        <span class="amount">$799.00</span>
                                        <span class="duration">/Monthly</span>
                                    </div>
                                  <!--  <div class="monthly-pricing">
                                        <span class="amount">$250.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>-->
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{route('contact')}}" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>30sec Duration</li>
                                    <li>Script Writing</li>
                                    <li>Professional Voice-over & SFX</li>
                                    <li>Hand-drawn Illustrations
                                    </li>
                                    <li>Unlimited Revisions</li>
                                    <li>HD Format Video</li>
                                    <li>Dedicated Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4" data-sal="slide-up" data-sal-duration="800" data-sal-delay="300">
                        <div class="pricing-table pricing-borderd">
                            <div class="pricing-header">
                                <h3 class="title">NINJA ANIMATION</h3>
                                <span class="subtitle"></span>
                                <div class="price-wrap">
                                    <div class="yearly-pricing">
                                        <span class="amount">$999.00</span>
                                        <span class="duration">/Monthly</span>
                                    </div>
                                   <!-- <div class="monthly-pricing">
                                        <span class="amount">$500.00</span>
                                        <span class="duration">/monthly</span>
                                    </div>-->
                                </div>
                                <div class="pricing-btn">
                                    <a href="{{route('contact')}}" class="axil-btn btn-large btn-borderd">Get Started Today</a>
                                </div>
                            </div>
                            <div class="pricing-body">
                                <ul class="list-unstyled">
                                    <li>30sec Duration</li>
                                    <li>Script Writing</li>
                                    <li>Professional Voice-over & SFX</li>
                                    <li>Custom 2D Characters</li>
                                    <li>Unlimited Revisions</li>
                                    <li>HD Format Video</li>
                                    <li>Dedicated Support</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-3 list-unstyled">
                <li class="shape shape-2"><img src="assets/media/others/bubble-4.png" alt="shape"></li>
            </ul>
        </section>
        <!--=====================================-->
        <!--=           Faq Area Start         =-->
        <!--=====================================
        <section class="section section-padding-equal bg-color-light faq-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-xl-4">
                        <div class="section-heading heading-left">
                            <span class="subtitle">Pricing Plan</span>
                            <h3 class="title">Frequently asked questions</h3>
                            <p>Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.</p>
                        </div>
                    </div>
                    <div class="col-lg-7 col-xl-8">
                        <div class="faq-accordion">
                            <div class="accordion" id="accordion" data-sal="slide-up" data-sal-duration="800" data-sal-delay="100">
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="true" aria-controls="faq1">
                                            1. Nunc rhoncus magna ut venenatis feugiat.
                                        </button>
                                    </h6>
                                    <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
                                            2. Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
                                            3. Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
                                            4. Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                            5. Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h6 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                            6. Nam interdum ante sapien, quis ullamcorper.
                                        </button>
                                    </h6>
                                    <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#accordion">
                                        <div class="accordion-body">
                                            <p>Vivamus magna est, placerat et dignissim et, elementum quis lacus. Nulla laoreet pharetra vehicula. Vestibulum euismod augue ac velit consectetur, ac tincidunt ante hendrerit. Sed lacinia elementum felis, ut tempus ipsum blandit non.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="shape-group-6 list-unstyled">
                <li class="shape shape-1" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100"><img src="assets/media/others/bubble-7.png" alt="Bubble"></li>
                <li class="shape shape-2" data-sal="slide-down" data-sal-duration="800" data-sal-delay="100"><img src="assets/media/others/line-4.png" alt="line"></li>
                <li class="shape shape-4" data-sal="slide-right" data-sal-duration="800" data-sal-delay="100"><img src="assets/media/others/poses-lady.png" alt="Poses"></li>
            </ul>
        </section>-->
        <!--=====================================-->
        <!--=     Call To Action Area Start     =-->
        <!--=====================================-->
        @include('components.calltoaction')



 <!--=        Contact Area Start       	=-->
        <!--=====================================-->
        <section class="section-padding bg-color-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6" data-sal="slide-up" data-sal-duration="1000">
                        <div class="contact-address mb--30">
                            <div class="section-heading heading-light-left">
                                <span class="subtitle">Need a designer?</span>
                                <h2 class="title">Let’s work together</h2>
                            </div>
                            <div class="address-list">
                                <div class="address">
                                    <h6 class="title">Mail</h6>
                                    <p><a href="zac.wolfe@westcoastanimations.com">zac.wolfe@westcoastanimations.com</a></p>
                                </div>
                                <div class="address">
                                    <h6 class="title">Address</h6>
                                    <p>2619 Wilshire Blvd, Los Angeles, CA 90057</p>
                                </div>
                                <div class="address">
                                    <h6 class="title">Phone</h6>
                                    <p><a href="tel:+1213 478 2978">+1213 478 2978</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="200">
                        <div class="contact-form-box mb--30">
                            <h3 class="title">Describe your project</h3>




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


                            <!--<form method="POST" action="mail.php" class="axil-contact-form">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="contact-name" placeholder="John Smith">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="contact-email" placeholder="example@mail.com">
                                </div>
                                <div class="form-group mb--40">
                                    <label>How can we help you?</label>
                                    <textarea name="contact-message" id="message" class="form-control textarea" cols="30" rows="6"></textarea>
                                </div>
                                <div class="form-group text-end">
                                    <button type="submit" class="axil-btn btn-fill-primary w-auto btn-primary" name="submit-btn">SEND</button>
                                </div>
                                <input type="hidden" class="form-control" name="contact-company" value="Null">
                            </form>-->
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
