<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>WestCoast Animations | Business</title>
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
        <!--=       Why Choose Area Start       =-->
        <!--=====================================-->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="why-choose-us">
                            <div class="section-heading heading-left">
                                <span class="subtitle">About Us</span>
                                <h3 class="title">Why branding matters?</h3>
                                <p>Ut condimentum enim nec diam convallis mollis. Sed felis quam, semper dapibus purus sed, rhoncus ullamcorper lacus.</p>
                            </div>
                            <div class="accordion" id="choose-accordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="far fa-compress"></i> Strategy
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#choose-accordion">
                                        <div class="accordion-body">
                                            Aenean hendrerit laoreet vehicula. Nullam convallis augue at enim gravida pellentesque.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <i class="far fa-code"></i>Design
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
                                            <i class="fal fa-globe"></i>Development
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
                        <div class="contact-form-box shadow-box mb--30">
                            <h3 class="title">Get a free Keystroke quote now</h3>
                            <form>
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="name" placeholder="John Smith">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="name" placeholder="example@mail.com">
                                </div>
                                <div class="form-group mb--40">
                                    <label>Phone</label>
                                    <input type="tel" class="form-control" name="Phone" placeholder="+123456789">
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="axil-btn btn-fill-primary btn-fluid" name="submit-btn">Get Pricing Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=       Work Process Area Start     =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-light pb--70">
            <div class="container">
                <div class="section-heading mb--90">
                    <span class="subtitle">Process</span>
                    <h2 class="title">Our logo design process</h2>
                    <p>Our comprehensive logo design strategy ensures a perfectly crafted logo for your business.</p>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/process-1.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step One</span>
                        <h3 class="title">Discover</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/process-2.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step Two</span>
                        <h3 class="title">Prototype</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
                <div class="process-work" data-sal="slide-right" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/process-3.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step Three</span>
                        <h3 class="title">Test</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
                <div class="process-work content-reverse" data-sal="slide-left" data-sal-duration="1000" data-sal-delay="100">
                    <div class="thumbnail paralax-image">
                        <img src="assets/media/others/process-4.png" alt="Thumbnail">
                    </div>
                    <div class="content">
                        <span class="subtitle">Step four</span>
                        <h3 class="title">Build</h3>
                        <p>Donec metus lorem, vulputate at sapien sit amet, auctor iaculis lorem. In vel hendrerit nisi. Vestibulum eget risus velit. Aliquam tristique libero at dui sodales, et placerat orci lobortis. Maecenas ipsum neque, elementum id dignissim et, imperdiet vitae mauris.</p>
                    </div>
                </div>
            </div>
            <ul class="shape-group-17 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/bubble-24.png" alt="Bubble"></li>
                <li class="shape shape-2"><img src="assets/media/others/bubble-23.png" alt="Bubble"></li>
                <li class="shape shape-3"><img src="assets/media/others/line-4.png" alt="Line"></li>
                <li class="shape shape-4"><img src="assets/media/others/line-5.png" alt="Line"></li>
                <li class="shape shape-5"><img src="assets/media/others/line-4.png" alt="Line"></li>
                <li class="shape shape-6"><img src="assets/media/others/line-5.png" alt="Line"></li>
            </ul>
        </section>

        <!--=====================================-->






<!--=      About  Quality Area Start    =-->
        <!--=====================================-->
        <section class="section section-padding bg-color-dark pb--80 pb_lg--40 pb_md--20">
            <div class="container">
                <div class="section-heading heading-light-left mb--100">
                    <span class="subtitle">Our Valus</span>
                    <h2 class="title">Why should you work with us?</h2>
                    <p class="opacity-50">Nulla facilisi. Nullam in magna id dolor
                        blandit rutrum eget vulputate augue sed eu leo eget risus imperdiet.</p>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="about-quality active">
                            <h3 class="sl-number">1</h3>
                            <h5 class="title">Exceed clients’ and colleagues’ expectations</h5>
                            <p>Ut id orci ultricies, gravida arcu ac, elementum
                                eros. Curabitur tortor ipsum, imperdiet eget odio
                                ac, faucibus ultricies nisl. Maecenas
                                scelerisque dignissim elit.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">2</h3>
                            <h5 class="title">Take ownership and question the status quo in a constructive manner</h5>
                            <p>Nulla facilisi. Vestibulum vel urna eget magna condimentum faucibus. Sed arcu mi, semper sed suscipit vel, rhoncus vel justo.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">3</h3>
                            <h5 class="title">Be brave, curious and experiment – learn from all successes and failures</h5>
                            <p>Quisque aliquet quis est in faucibus. Aenean eget lorem ac risus placerat convallis eget a eros. Suspendisse dignissim ultrices tellus, id placerat mauris lacinia a.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">4</h3>
                            <h5 class="title">Act in a way that makes all of us proud</h5>
                            <p>Proin dignissim facilisis tortor a mattis. Morbi non maximus nunc, ut mattis tellus. In hac habitasse platea dictumst. Mauris viverra enim tellus, vel ultrices dolor aliquam non.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="about-quality">
                            <h3 class="sl-number">5</h3>
                            <h5 class="title">Build an inclusive, transparent and socially responsible culture</h5>
                            <p>Maecenas eros sapien, egestas at elit nec, eleifend sagittis orci.</p>
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
        <!--=====================================-->s







        <!--=     Featured Project Area Start   =-->
        <!--=====================================-->
        <section class="section section-padding">
            <div class="container">
                <div class="section-heading">
                    <span class="subtitle">Our Project</span>
                    <h2 class="title">Featured Designs</h2>
                </div>
                <div class="row">
                    <div class="col-lg-6">
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
                    <div class="col-lg-6">
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
                </div>
            </div>
            <ul class="shape-group-16 list-unstyled">
                <li class="shape shape-1"><img src="assets/media/others/circle-2.png" alt="circle"></li>
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
