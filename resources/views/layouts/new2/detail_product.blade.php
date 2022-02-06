{{-- @extends('layouts.new2.master')
@section('containers')
</div>
    
    <div id="counter-1" class="page-section p-80-cont">
        <div class="container">

            <div class="row text-center">

                <!-- Item -->
                <div class="col-xs-6 col-sm-3">
                    <div class="count-number">
                        75
                    </div>
                    <div class="count-descr">
                        <span class="count-title">AWARDS WINNING</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-xs-6 col-sm-3">
                    <div class="count-number">
                        450
                    </div>
                    <div class="count-descr">
                        <span class="count-title">HAPPY CLIENTS</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-xs-6 col-sm-3">
                    <div class="count-number">
                        151
                    </div>
                    <div class="count-descr">
                        <span class="count-title">PROJECTS DONE</span>
                    </div>
                </div>

                <!-- Item -->
                <div class="col-xs-6 col-sm-3">
                    <div class="count-number">
                        768
                    </div>
                    <div class="count-descr">
                        <span class="count-title">HOURS OF CODE</span>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- DIVIDER -->
    <hr class="mt-0 mb-0">

    <!-- ADS 1 -->
    <div class="page-section">
        <div class="container">
            <div class="row">

                <div class="col-md-6 left-50">
                    <div class="fes2-main-text-cont">
                        <div class="title-fs-45">
                            OPTIMIZED FOR<br>
                            <span class="bold">MOBILE</span>
                        </div>
                        <div class="line-3-100"></div>
                        <div class="fes2-text-cont">Sed ut perspiciatis unde omnis iste nat eror acus antium que.
                            Asperiores, ea velit enim labore doloribus.</div>
                        <div class="mt-30">
                            <a class="button medium thin hover-dark" href="https://1.envato.market/GVZ26">BUY NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 right-50 wow fadeInLeft">

                    <div class="ads-img-cont">
                        <img src="images/ads-phone.jpg" alt="img">
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- DIVIDER -->
    <hr class="mt-0 mb-0">

    <!-- ADS 2 -->
    <div class="page-section">
        <div class="container">
            <div class="row">

                <div class="col-md-6  ">
                    <div class="fes2-main-text-cont">
                        <div class="title-fs-45">
                            POWERFUL<br>
                            <span class="bold">OPTIONS</span>
                        </div>
                        <div class="line-3-100"></div>
                        <div class="fes2-text-cont">Sed ut perspiciatis unde omnis iste nat eror acus antium que.
                            Asperiores, ea velit enim labore doloribus.</div>
                        <div class="mt-30">
                            <a class="button medium thin hover-dark" href="https://1.envato.market/GVZ26">BUY NOW</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 wow fadeInRight">

                    <div class="ads-img-cont">
                        <img src="images/ads-noute.jpg" alt="img">
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection --}}
<!DOCTYPE html>
<!--

 Theme Name: HASWELL
 Description: HTML/CSS 
 Author: ABCgomel 
 Designed & Coded by ABCgomel
 
-->

<html lang="en">

<head>
    <title>UAC</title>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="robots" content="index, follow">
    <meta name="keywords" content="HTML5 Template">
    <meta name="description" content="Haswell - Responsive HTML5 Template">
    <meta name="author" content="ABCgomel">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('asset/images/favicon/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('asset/images/favicon/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114"
        href="{{ asset('asset/images/favicon/apple-touch-icon-114x114.png') }}">

    <!-- CSS -->

    <!-- FLEXSLIDER SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/flexslider.css') }}">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700%7COpen+Sans:400,300,700' rel='stylesheet'
        type='text/css'>

    <!-- ICONS ELEGANT FONT & FONT AWESOME & LINEA ICONS -->
    <link rel="stylesheet" href="{{ asset('assets/css/icons-fonts.css') }}">

    <!-- CSS THEME -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <!-- ANIMATE -->
    <link rel='stylesheet' href="{{ asset('assets/css/animate.min.css') }}">

    <!-- IE Warning CSS -->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie-warning.css" ><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" type="text/css" href="css/ie8-fix.css" ><![endif]-->

    <!-- Magnific popup  in style.css	Owl Carousel Assets in style.css -->

    <!-- CSS end -->

    <!-- JS begin some js files in bottom of file-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Modernizr -->
    <!-- <script src="js/modernizr.js"></script> -->
    <style>
        @media (min-width: 501px) {
            .logo-img {
                min-width: 250px;
                height: auto;
            }

            .tulisan {
                display: none;
            }
        }

        @media (max-width: 500px) {
            .logo-img {
                min-width: 150px;
                height: auto;
            }

            .tp-caption {
                width: 350px;
                height: auto;
                box-sizing: border-box
            }

            .tp-caption img {
                display: none;
            }

        }

    </style>
</head>

<body>

    <!-- LOADER -->
    <div id="loader-overflow">
        <div id="loader-cont">
            <div id="loader3">Please enable JS</div>
        </div>
    </div>

    <div id="wrap" class="boxed ">
        <div class="grey-bg">
            <!-- Grey BG  -->

            <!--[if lte IE 8]>
    <div id="ie-container">
     <div id="ie-cont-close">
      <a href='#' onclick='javascript&#058;this.parentNode.parentNode.style.display="none"; return false;'><img src='images/ie-warn/ie-warning-close.jpg' style='border: none;' alt='Close'></a>
     </div>
     <div id="ie-cont-content" >
      <div id="ie-cont-warning">
       <img src='images/ie-warn/ie-warning.jpg' alt='Warning!'>
      </div>
      <div id="ie-cont-text" >
       <div id="ie-text-bold">
        You are using an outdated browser
       </div>
       <div id="ie-text">
        For a better experience using this site, please upgrade to a modern web browser.
       </div>
      </div>
      <div id="ie-cont-brows" >
       <a href='http://www.firefox.com' target='_blank'><img src='images/ie-warn/ie-warning-firefox.jpg' alt='Download Firefox'></a>
       <a href='http://www.opera.com/download/' target='_blank'><img src='images/ie-warn/ie-warning-opera.jpg' alt='Download Opera'></a>
       <a href='http://www.apple.com/safari/download/' target='_blank'><img src='images/ie-warn/ie-warning-safari.jpg' alt='Download Safari'></a>
       <a href='http://www.google.com/chrome' target='_blank'><img src='images/ie-warn/ie-warning-chrome.jpg' alt='Download Google Chrome'></a>
      </div>
     </div>
    </div>
    <![endif]-->

            <!-- HEADER 1 NO-TRANSPARENT -->
            <header id="nav" class="header header-1 no-transparent affix-on-mobile">

                <div class="header-wrapper">
                    <div class="container-m-30 clearfix">
                        <div class="logo-row">

                            <!-- LOGO -->
                            <div class="logo-container-2">
                                <div class="logo-2">
                                    <a href="/" class="clearfix"><?php $p = App\Models\Profile::where('id', 1)->first(); ?>
                                        <img src="{{ asset('be_contact_logo/' . $p->img_light) }}"
                                            class="logo-img logo-color-change" alt="Logo">
                                    </a>
                                </div>
                            </div>
                            <!-- BUTTON -->
                            <div class="menu-btn-respons-container">
                                <button type="button" class="navbar-toggle btn-navbar collapsed" data-toggle="collapse"
                                    data-target="#main-menu .navbar-collapse">
                                    <span aria-hidden="true" class="icon_menu hamb-mob-icon"></span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- MAIN MENU CONTAINER -->
                    <div class="main-menu-container">

                        <div class="container-m-30 clearfix">

                            <!-- MAIN MENU -->
                            <div id="main-menu">
                                <div class="navbar navbar-default" role="navigation">

                                    <!-- MAIN MENU LIST -->
                                    <nav class="collapse collapsing navbar-collapse right-1024">
                                        <ul class="nav navbar-nav">

                                            <li class="parent {{ Request::routeIs('landing') ? 'current' : '' }}">
                                                <a href="/">
                                                    <div class="main-menu-title">HOME</div>
                                                </a>
                                            </li>

                                            <!-- MENU ITEM -->
                                            <li
                                                class="parent {{ Request::routeIs('all.product') ? 'current' : '' }}">
                                                <a href="{{ route('all.product') }}">
                                                    <div class="main-menu-title">PRODUCT</div>
                                                </a>
                                            </li>

                                            <li class="parent">
                                                <a href="/">
                                                    <div class="main-menu-title">ABOUT US</div>
                                                </a>
                                            </li>

                                            <li class="parent">
                                                <a href="#contact">
                                                    <div class="main-menu-title">CONTACT</div>
                                                </a>
                                            </li>



                                        </ul>

                                    </nav>

                                </div>
                            </div>
                            <!-- END main-menu -->

                        </div>
                        <!-- END container-m-30 -->

                    </div>
                    <!-- END main-menu-container -->

                    <!-- SEARCH READ DOCUMENTATION -->


                </div>
                <!-- END header-wrapper -->

            </header>

            <!-- PAGE TITLE SMALL -->
            <div class="page-title-cont page-title-small grey-light-bg">
                <div class="relative container align-left">
                    <div class="row">

                        <div class="col-md-8">
                            <h1 class="page-title">{{ $product->name }}</h1>
                        </div>

                        <div class="col-md-4">
                            <div class="breadcrumbs">
                                <a href="/">Home</a><span class="slash-divider">/</span><a class="bread-current"
                                    href="/all-product">ALL PRODUCTS</a><span class="slash-divider">/</span>
                                <span class="bread-current" href="/all-product">{{ $product->name }}</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- SINI --}}
            <div class="page-section p-140-cont">
                <div class="container">
                    <div class="row">

                        <!-- ITEM PHOTO -->
                        <div class="col-md-4 col-sm-12 mb-50">

                            <div class="post-prev-img popup-gallery">
                                <a href="{{ asset('be_product/' . $product->img) }}"><img
                                        src="{{ asset('be_product/' . $product->img) }}" alt="img"></a>
                            </div>

                        </div>

                        <!-- CONTENT -->
                        <div class="col-md-7 col-sm-12 col-md-offset-1 mb-50">

                            <h3 class="mt-0 mb-30">{{ $product->name }}</h3>

                            <hr class="mt-0 mb-30">
                            <div class="row">

                                <div class="col-xs-6  mt-0 mb-30">
                                    <del>$xx</del>
                                    <strong class="item-price">$xx</strong>
                                </div>

                                <div class="col-xs-6 text-right">
                                    <span class="font-black"><i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i></span>
                                </div>

                            </div>

                            <hr class="mt-0 mb-30">

                            <div class="mb-30" style="text-align: justify">
                                {{ $product->deskripsi }}
                            </div>

                            <hr class="mt-0 mb-30">

                            <!-- ADD TO CART -->
                            <div class="row mb-30">
                                <form method="post" action="#" class="form">
                                    <div class="col-xs-8 col-sm-10 col-md-6">
                                        <div class="post-prev-more-cont clearfix">
                                            <div class="shop-add-btn-cont">
                                                <a class="button medium gray shop-add-btn"
                                                    href="{{ $data_contact->whatsapp }}" target="_blank">CALL / CONTACT US</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>


                        </div>

                    </div>
                </div>


            </div>

            <hr class="mt-0 mb-80">

            <!-- RELATED PRODUCTS -->
            <div class="container">
                <div class="row">

                    <div class="col-md-12">
                        <h4 class="blog-page-title mt-0 mb-40">RELATED PRODUCTS</h4>
                    </div>

                    <div class="owl-3items-nav owl-carousel owl-arrows-bg">
                        @foreach ($data_product as $item)
                        <div class="item mb-0 text-center">

                            <!-- SHOP Item 1 -->
                            <div>

                                <div class="post-prev-img">
                                    <a href="/coconut-product/{{$item->slug}}"><img src="{{ asset('be_product/' . $item->img) }}" alt="img"></a>
                                </div>

                                <div class="post-prev-title mb-5">
                                    <h3><a class="font-norm a-inv" style="text-transform: uppercase" href="/coconut-product/{{$item->slug}}">{{$item->name}}</a></h3>
                                </div>

                                <div class="shop-price-cont">
                                    <strong>$xx</strong>
                                </div>

                            </div>

                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>


        <!-- DIVIDER -->
        <hr id="web-design-section" class="mt-0 mb-80">


        <!-- NEWS LETTER -->
        <div class="page-section p-110-cont" id="contact">
            <div class="container">
                <div class="row">

                    <div class="col-md-4 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="icon icon-basic-map"></div>
                            </div>
                            <div class="cis-text">
                                <h3><span class="bold">ADDRESS</span></h3>
                                <p>{{ $data_contact->alamat }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="icon icon-basic-mail"></div>
                            </div>
                            <div class="cis-text">
                                <h3><span class="bold">EMAIL</span></h3>
                                <p><a href="mailto:info@haswell.com">{{ $data_contact->email }}</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="cis-cont">
                            <div class="cis-icon">
                                <div class="icon icon-basic-smartphone"></div>
                            </div>
                            <div class="cis-text">
                                <h3><span class="bold">PHONE</span></h3>
                                <p>{{ $data_contact->telp }}</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="page-section gray-bg" id="">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-6">
                        <div class="row">
                            <!-- <div data-address="580 California Street, San Francisco, CA" id="google-map"></div> -->

                            <!-- *This is an example of using latitude and longitude if you need to use them instead of an address. Read more in the documentation.* -->
                            {{-- <div data-latitude="37.792888" data-longitude="-122.404041" id="google-map"></div> --}}
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3957.407620157608!2d112.74823310265508!3d-7.308019703658126!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fba78a3b4027%3A0x9c42c5ff58de32d2!2sJl.%20Sidosermo%20I%20No.8a%2C%20Sidosermo%2C%20Kec.%20Wonocolo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060239!5e0!3m2!1sid!2sid!4v1636277246273!5m2!1sid!2sid"
                                width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="contact-form-cont">
                            <!-- TITLE -->
                            <div class="mb-40">
                                <h2 class="section-title">CONTACT <span class="bold">US</span></h2>
                            </div>

                            <!-- CONTACT FORM -->
                            <div class="" id="">
                                <form action="/client-message-post" method="post">@csrf
                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <!-- <label>Your name *</label> -->
                                            <input type="text" value="" data-msg-required="Please enter your name"
                                                maxlength="100" class="controled" name="nama" id="name"
                                                placeholder="NAME" required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <!-- <label>Your email address *</label> -->
                                            <input type="email" value=""
                                                data-msg-required="Please enter your email address"
                                                data-msg-email="Please enter a valid email address" maxlength="100"
                                                class="controled" name="email" id="email" placeholder="EMAIL"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-30">
                                            <!-- <label>Your email address *</label> -->
                                            <input type="number" value=""
                                                data-msg-required="Please enter your phone number"
                                                data-msg-email="Please enter a valid email address" maxlength="100"
                                                class="controled" name="telp" id="telp" placeholder="PHONE NUMBER"
                                                required>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-40">
                                            <!-- <label>Message *</label> -->
                                            <textarea maxlength="5000" data-msg-required="Please enter your message"
                                                rows="3" class="controled" name="komen" id="message"
                                                placeholder="MESSAGE" required></textarea>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-md-12 text-center-xxs">
                                            <input type="submit" value="SEND MESSAGE" class="button medium gray"
                                                data-loading-text="Loading...">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- FOOTER 2 -->
        <footer class="page-section pt-80 pb-50">
            <div class="container">
                <div class="row">

                    <div class="col-md-3 col-sm-3 widget">
                        <div class="logo-footer-cont">
                            <a href="#">
                                <img class="logo-footer" src="{{ asset('assets/images/logo-footer.png') }}"
                                    alt="logo">
                            </a>
                        </div>
                        <div class="footer-2-text-cont">
                            <address>
                                Jl. Sidosermo I No.8a<br>
                                Indonesia, Surabaya
                            </address>
                        </div>
                        <div class="footer-2-text-cont">
                            1-800-312-2121
                        </div>
                        <div class="footer-2-text-cont">
                            <a class="a-text" href="mailto:info@haswell.com">uac@gmail.com</a>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-3 widget">
                        <h4>NAVIGATE</h4>
                        <ul class="links-list bold a-text-cont">
                            <li><a href="/">HOME</a></li>
                            <li><a href="#">PRODUCT</a></li>
                            <li><a href="{{ $data_contact->whatsapp }}">CONTACT</a></li>
                            <li><a href="/">ABOUT US</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-3 widget">
                        <h4>ABOUT US</h4>
                        <ul class="links-list a-text-cont">
                            <li><a href="{{ $data_contact->whatsapp }}">CONTACT</a></li>
                        </ul>
                    </div>

                    <div class="col-md-3 col-sm-3 widget">
                        <h4>RECENT POSTS</h4>
                        <div id="post-list-footer">
                            <ul class="nav navbar-nav" id="nav-sidebar">
                                @foreach ($data_product as $item)
                                    <div class="post-prev-title">
                                        <h3><a class="a-text" style="text-transform: uppercase"
                                                href="#{{ $item->slug }}">{{ $item->name }}</a></h3>
                                    </div>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-2-copy-cont clearfix">
                    <!-- Social Links -->
                    {{-- <div class="footer-2-soc-a right">
                            <a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" title="Behance" target="_blank"><i class="fa fa-behance"></i></a>
                            <a href="#" title="LinkedIn+" target="_blank"><i class="fa fa-linkedin"></i></a>
                            <a href="#" title="Dribbble" target="_blank"><i class="fa fa-dribbble"></i></a>
                        </div> --}}

                    <!-- Copyright -->
                    <div class="left">
                        <a class="footer-2-copy" href="#" target="_blank">&copy; Universal Agro Coco 2021</a>
                    </div>


                </div>

            </div>
        </footer>

        <!-- BACK TO TOP -->
        <p id="back-top">
            <a href="#top" title="Back to Top"><span class="icon icon-arrows-up"></span></a>
        </p>

    </div><!-- End BG -->
    </div><!-- End wrap -->

    <!-- JS begin -->

    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery-1.11.2.min.js') }}"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- MAGNIFIC POPUP -->
    <script src='{{ asset('assets/js/jquery.magnific-popup.min.js') }}'></script>

    <!-- PORTFOLIO SCRIPTS -->
    <script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/masonry.pkgd.min.js') }}"></script>

    <!-- COUNTER -->
    <script src="{{ asset('assets/js/jquery.countTo.js') }}"></script>

    <!-- APPEAR -->
    <script src="{{ asset('assets/js/jquery.appear.js') }}"></script>

    <!-- GOOLE MAP -->
    <script src="https://maps.google.com/maps/api/js?key=INSERT-YOUR-API-KEY-HERE"></script>
    <script src="{{ asset('assets/js/gmap3.min.js') }}"></script>

    <!--[if lt IE 10]><script src="js/jquery.placeholder.js"></script><![endif]-->

    <!-- FORMS VALIDATION	-->
    <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-validation.min.js') }}"></script>

    <!-- OWL CAROUSEL -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

    <!-- MAIN SCRIPT -->
    <script src="{{ asset('assets/js/main.js') }}"></script>

    <!-- REVOSLIDER SCRIPTS  -->
    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="{{ asset('assets/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/rs-plugin/js/jquery.themepunch.revolution-parallax.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
    <!-- JS end -->
    <script>
        $(document).ready(function() {

            //NAV SIDEBAR------------------------------------------------------------------
            var top_offset = $('header').height() - 1; // get height of fixed navbar

            $('#nav-sidebar').onePageNav({
                currentClass: 'current',
                changeHash: false,
                scrollSpeed: 700,
                scrollOffset: top_offset,
                scrollThreshold: 0.5,
                filter: '',
                easing: 'swing',
                begin: function() {
                    //I get fired when the animation is starting
                },
                end: function() {
                    //I get fired when the animation is ending
                },
                scrollChange: function($currentListItem) {
                    //I get fired when you enter a section and I pass the list item of the section
                }
            });

            //SIDEBAR STICKY---------------------------------------------	  
            var //offsetSb = $('.page-title-bg').height(),
                offsetFooter = $('#footer-offset').height() + 30;
            // DM Menu
            jQuery('#sidebar-stiky').affix({
                offset: {
                    top: 300, //top offset for header 1 for others headers it will have other value
                    bottom: offsetFooter
                }
            });

        });
    </script>

</body>

</html>
