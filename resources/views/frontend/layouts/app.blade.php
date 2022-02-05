<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Creative Agency</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="{{asset('frontend/img/logo.png')}}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.html">home</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="work.html">work</a></li>
                                        <li><a href="service.html">services</a></li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="work_details.html">work details</a></li>
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>

                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                                <a href="#" target="_black" class="say_hi">Say Hi</a>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- agency_heading_start -->
    <div class="agency_heading">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="agency_text">
                        <h3>We are <span>Design and Development</span> <br>
                            Agency based on California</h3>
                        <a href="#" target="_blank" class="underline_text">Brows Our Products</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="animated_shape">
            <div class="anim_1">
                <img src="{{asset('frontend/img/about/1.png')}}" alt="">
            </div>
            <div class="anim_2">
                <img src="{{asset('frontend/img/about/2.png')}}" alt="">
            </div>
        </div>
    </div>
    <!-- agency_heading_end -->

    <!-- video_area_start -->
    <div class="video_area">
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="video_banner video_bg_1">
                        <a class="popup-video" href="https://www.youtube.com/watch?v=BnTroF3vEqg">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- video_area_end -->

    <!-- works_area_start -->
    <div class="works_area">
        <h1 class="opacity_text d-none d-lg-block">Projects</h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title">
                        <h3>Our Works</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-5 col-md-6">
                    <div class="single_work">
                        <div class="work_thumb">
                            <img src="{{asset('frontend/img/work/1.png')}}" alt="">
                            <div class="work_hover">
                                <div class="work_inner">
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="work_heading">
                            <h3>Social App</h3>
                        </div>
                    </div>
                    <div class="single_work">
                        <div class="work_thumb">
                            <img src="{{asset('frontend/img/work/3.png')}}" alt="">
                            <div class="work_hover">
                                <div class="work_inner">
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="work_heading">
                            <h3>iOS Design System</h3>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-2 col-md-6">
                    <div class="single_work spacec-top">
                        <div class="work_thumb">
                            <img src="{{asset('frontend/img/work/2.png')}}" alt="">
                            <div class="work_hover">
                                <div class="work_inner">
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="work_heading">
                            <h3>Product Packaging</h3>
                        </div>
                    </div>
                    <div class="single_work">
                        <div class="work_thumb">
                            <img src="{{asset('frontend/img/work/4.png')}}" alt="">
                            <div class="work_hover">
                                <div class="work_inner">
                                    <a href="#">View Details</a>
                                </div>
                            </div>
                        </div>
                        <div class="work_heading">
                            <h3>Uber App Design</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="more_products text-center">
                        <a class="boxed_btn_round" href="#">More Products</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- works_area_end -->

    <!-- "service_area_start -->
    <div class="service_area black_bg">
            <h1 class="opacity_text d-none d-lg-block">Services</h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="section_title white-color">
                        <h3>
                            We’re a full-service UX design <br> agency, We build digital products <br> and brands
                        </h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="{{asset('frontend/img/service/1.png')}}" alt="">
                        </div>
                        <h3>UX Research</h3>
                        <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="{{asset('frontend/img/service/2.png')}}" alt="">
                        </div>
                        <h3>UI Design</h3>
                        <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god
                        </p>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="single_service text-center">
                        <div class="icon">
                            <img src="{{asset('frontend/img/service/3.png')}}" alt="">
                        </div>
                        <h3>Development</h3>
                        <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- brand_area_start -->
        <div class="brand_area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="brand_active owl-carousel">
                            <div class="single_brand">
                                <img src="{{asset('frontend/img/brand/1.png')}}" alt="">
                            </div>
                            <div class="single_brand">
                                <img src="{{asset('frontend/img/brand/2.png')}}" alt="">
                            </div>
                            <div class="single_brand">
                                <img src="{{asset('frontend/img/brand/3.png')}}" alt="">
                            </div>
                            <div class="single_brand">
                                <img src="{{asset('frontend/img/brand/4.png')}}" alt="">
                            </div>
                            <div class="single_brand">
                                <img src="{{asset('frontend/img/brand/5.png')}}" alt="">
                            </div>
                            <div class="single_brand">
                                <img src="{{asset('frontend/img/brand/6.png')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand_area_end-->
    </div>
    <!-- "service_area_end -->

    <!-- build_product_start -->
    <div class="build_product">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-6">
                    <div class="build_img">
                        <img src="{{asset('frontend/img/brand/band_big.png')}}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 offset-xl-1 col-md-6">
                    <div class="product_right">
                        <div class="section_title">
                            <h3>We Help you to Build
                                your Product and Brand
                                For Big or Small</h3>
                        </div>
                        <p>Our set he for firmament morning sixth subdue darkness creeping gathered divide our let god. moving. Moving in fourth air night bring upon you’re it beast let you dominion likeness.</p>
                        <a href="#" class="underline_text">Visit Our Profile</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- build_product_end -->

    <!-- counter_area_start -->
    <div class="counter_area">
        <h1 class="opacity_text d-none d-lg-block">
                Quick Fact
        </h1>
        <div class="container">
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3 class="counter">220</h3>
                        <span>Amazing Products</span>
                    </div>
                </div>
                <div class="col-xl-4  col-md-4">
                    <div class="single_counter text-center">
                        <h3 class="counter blue">7930</h3>
                        <span>Happy Clients</span>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="single_counter text-center">
                        <h3 class="counter orange">67</h3>
                        <span>Support Daily Support</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter_area_end -->

    <!-- instragram_area_start -->
    <div class="instragram_area">
            <div class="single_instagram">
                <img src="{{asset('frontend/img/instragram/1.png')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="single_instagram">
                <img src="{{asset('frontend/img/instragram/2.png')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="single_instagram">
                <img src="{{asset('frontend/img/instragram/3.png')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="single_instagram">
                <img src="{{asset('frontend/img/instragram/4.png')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
            <div class="single_instagram">
                <img src="{{asset('frontend/img/instragram/5.png')}}" alt="">
                <div class="ovrelay">
                    <a href="#">
                        <i class="fa fa-instagram"></i>
                    </a>
                </div>
            </div>
        </div>
    <!-- instragram_area_end -->
    <div class="Visit_Work text-center">
        <a href="#" class="Visit_link">Visit Our Work</a>
    </div>
    <!-- footer -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Follow Us
                            </h3>
                            <ul>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#"> Twitter</a></li>
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Youtube</a></li>
                                <li><a href="#">Pinterest</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                    Links
                            </h3>
                            <ul>
                                <li><a href="service.html">Services</a></li>
                                <li><a href="work.html"> Work</a></li>
                                <li><a href="about.html">About</a></li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Address
                            </h3>
                            <p>
                                    300, A-block, Green lane, USA <br>
                                    <a target="_blank" href="support@creative.com">support@creative.com</a> <br>
                                    <a target="_blank" href="+10 672 367 3789">+10 672 367 3789</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->

    <!-- JS here -->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/ajax-form.js' ) }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/scrollIt.js' ) }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/nice-select.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js' ) }}"></script>
    <script src="{{ asset('frontend/js/plugins.js' ) }}"></script>
    <script src="{{ asset('frontend/js/gijgo.min.js' ) }}"></script>

    <!--contact js-->
    <script src="{{ asset('frontend/js/contact.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/mail-script.js') }}"></script>

    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>