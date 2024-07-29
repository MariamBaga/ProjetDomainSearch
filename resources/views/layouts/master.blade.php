<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="description" content="Aila">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>@yield('title') </title>

    <link rel="icon" href="{{ asset('assets/images/tab.png') }}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}" type="text/css" media="all" />
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assets/css/boxicons.min.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" media="all" />

    <link rel="stylesheet" href="{{ asset('assets/css/theme-dark.css') }}" type="text/css" media="all" />

</head>

<body>

    <div class="preloader blue-gradient">
        <div class="preloader-wrapper">
            <div class="preloader-img">
                <img src="{{ asset('assets/images/loader.gif') }}" alt="preloader">
            </div>
        </div>
    </div>


    <div class="topbar bg-white">
        <div class="custom-container-fluid container-fluid">
            <div class="topbar-inner">
                <div class="topbar-item">
                    <div class="topbar-item-list">
                        <div class="topbar-list-thumb">
                            <i class="flaticon-chat"></i>
                        </div>
                        <div class="topbar-list-content">
                            <a href="#">Chat With A Consultant</a>
                        </div>
                    </div>
                    <div class="topbar-item-list">
                        <div class="topbar-list-thumb">
                            <i class="flaticon-phone"></i>
                        </div>
                        <div class="topbar-list-content">
                            <a href="tel:678-215-7765">+678-215-7765</a>
                        </div>
                    </div>
                </div>
                <div class="topbar-item">
                    <div class="topbar-item-list">
                        <div class="topbar-list-thumb">
                            <i class="flaticon-chat"></i>
                        </div>
                        <div class="topbar-list-content">
                            <a
                                href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#97fef9f1f8d7f5fbfefab9f4f8fa"><span
                                    class="__cf_email__"
                                    data-cfemail="563f38303916343a3f3b7835393b">[email&#160;protected]</span></a>
                        </div>
                    </div>
                    <div class="topbar-item-list">
                        <div class="topbar-list-thumb">
                            <i class="flaticon-news-paper"></i>
                        </div>
                        <div class="topbar-list-content">
                            <a href="news-default.html">News Feeds</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>










    <header class="header-banner header-page blue-gradient header-padding">

        <div class="fixed-top">
            <div class="navbar-area">

                <div class="mobile-nav">
                    <a href="{{ route('home') }}" class="mobile-logo">
                        <img src="{{ asset('assets/images/logo-blue.png') }}" alt="logo"
                            class="blue-logo logo1">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="blue-logo logo2">

                    </a>

                    <div class="navbar-option">
                        <div class="navbar-option-item navbar-option-dots dropdown">
                            <button type="button" id="dot" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu navbar-dots-dropdown">
                                <li class="dropdown-item">
                                    <div class="navbar-option-item navbar-language dropdown">
                                        <button class="language-option navbar-option-icon" type="button"
                                            id="language1" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="language-globe"><i class="flaticon-worldwide"></i></span>
                                            <span class="lang-name"></span>
                                            <span class="language-arrow"><i class="bx bx-chevron-down"></i></span>
                                        </button>
                                        <div class="language-dropdown-menu dropdown-menu" aria-labelledby="language1">
                                            <a class="dropdown-item" href="#" id="english1">
                                                <img src="{{ asset('assets/images/flag-1.png') }}" alt="flag">
                                                English
                                            </a>
                                            <a class="dropdown-item" href="#" id="deutsch1">
                                                <img src="{{ asset('assets/images/flag-2.png') }}" alt="flag">
                                                Deutsch
                                            </a>
                                            <a class="dropdown-item" href="#" id="chineese1">
                                                <img src="{{ asset('assets/images/flag-3.png') }}" alt="flag">
                                                简体中文
                                            </a>
                                            <a class="dropdown-item" href="#" id="arabic1">
                                                <img src="{{ asset('assets/images/flag-4.png') }}" alt="flag">
                                                العربيّة
                                            </a>

                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="navbar-option-item dropdown">
                                        <button class="search navbar-option-icon dropdown-toggle" type="button"
                                            id="search1" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            <span class="navbar-search-zoom"><i class="flaticon-zoom"></i></span>
                                            <span class="navbar-search-cancel"><i class="flaticon-cancel"></i></span>
                                        </button>
                                        <div class="navbar-search dropdown-menu" aria-labelledby="search1">
                                            <form>
                                                <div class="form-group">
                                                    <input type="email" class="form-control"
                                                        placeholder="Search...">
                                                    <button class="btn btn-gradient"><span><i
                                                                class="flaticon-loupe"></i></span></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown-item">
                                    <div class="navbar-option-item">
                                        <a href="{{ route('cart') }}" target="_blank"
                                            class="shopping-cart navbar-option-icon">
                                            <span><i class="flaticon-shopping-bags"></i></span>
                                            <span class="shopping-cart-tooltip">
                                                @php
                                                    $cart = session()->get('cart');
                                                    $cartCount =
                                                        is_array($cart) || $cart instanceof Countable
                                                            ? count($cart)
                                                            : 0;
                                                @endphp
                                                {{ $cartCount }}
                                            </span>
                                        </a>
                                    </div>
                                </li>

                            </ul>
                        </div>
                        <div class="navbar-option-item navbar-language dropdown mobile-hide">
                            <button class="language-option navbar-option-icon" type="button" id="language3"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="language-globe"><i class="flaticon-worldwide"></i></span>
                                <span class="lang-name"></span>
                                <span class="language-arrow"><i class="bx bx-chevron-down"></i></span>
                            </button>
                            <div class="language-dropdown-menu dropdown-menu" aria-labelledby="language3">
                                <a class="dropdown-item" href="#" id="english2">
                                    <img src="{{ asset('assets/images/flag-1.png') }}" alt="flag">
                                    English
                                </a>
                                <a class="dropdown-item" href="#" id="deutsch2">
                                    <img src="{{ asset('assets/images/flag-2.png') }}" alt="flag">
                                    Deutsch
                                </a>
                                <a class="dropdown-item" href="#" id="chineese2">
                                    <img src="{{ asset('assets/images/flag-3.png') }}" alt="flag">
                                    简体中文
                                </a>
                                <a class="dropdown-item" href="#" id="arabic2">
                                    <img src="{{ asset('assets/images/flag-4.png') }}" alt="flag">
                                    العربيّة
                                </a>

                            </div>
                        </div>
                        <div class="navbar-option-item navbar-option-search dropdown mobile-hide">
                            <button class="search navbar-option-icon dropdown-toggle" type="button" id="search3"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="navbar-search-zoom"><i class="flaticon-zoom"></i></span>
                                <span class="navbar-search-cancel"><i class="flaticon-cancel"></i></span>
                            </button>
                            <div class="navbar-search dropdown-menu" aria-labelledby="search3">
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Search...">
                                        <button class="btn btn-gradient"><span><i
                                                    class="flaticon-loupe"></i></span></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="navbar-option-item navbar-option-cart mobile-hide">
                            <a href="{{ route('cart') }}" target="_blank" class="shopping-cart navbar-option-icon">
                                <span><i class="flaticon-shopping-bags"></i></span>
                                <span class="shopping-cart-tooltip">
                                    @php
                                        $cart = session()->get('cart');
                                        $cartCount = is_array($cart) || $cart instanceof Countable ? count($cart) : 0;
                                    @endphp
                                    {{ $cartCount }}
                                </span>
                            </a>
                        </div>

                        <div class="navbar-option-item navbar-option-account">
                        <ul class="navbar-nav ml-auto">
                                    <!-- Other nav items... -->
                                    @auth
                                        <li class="nav-item">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                            <a href="{{ route('logout') }}" class="nav-link"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('profile.show') }}" class="nav-link">
                                                <img src="{{ Auth::user()->photo ? Storage::url(Auth::user()->photo) : asset('default-user-photo.png') }}"
                                                    alt="User Photo" class="user-photo">
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}" class="btn btn-blue btn-pill text-nowrap">
                                                Login / Register
                                            </a>
                                        </li>
                                    @endauth
                                </ul>
                        </div>
                    </div>
                </div>


                <div class="main-nav">
                    <div class="custom-container-fluid container-fluid">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="white-logo">
                                <img src="{{ asset('assets/images/logo-blue.png') }}" alt="logo"
                                    class="blue-logo">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" class="nav-link dropdown-toggle">Home</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{ route('home') }}" class="nav-link">Home Page 1</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('home') }}" class="nav-link">Home Page 2</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('home') }}" class="nav-link">Home Page 3</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" class="nav-link active">Domain Name</a>

                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link dropdown-toggle">Pages</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">Services</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="email-security.html" class="nav-link">Email
                                                            Security</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="ssl-certificates.html" class="nav-link">SSL
                                                            Certificates</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="enterprise-email.html" class="nav-link">Enterprise
                                                            Email</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="magento-pro.html" class="nav-link">Magento Pro</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="gsuite-google.html" class="nav-link">G Suite
                                                            Google</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="iptv-services.html" class="nav-link">IPTV
                                                            Services</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="gaming-services.html" class="nav-link">Gaming
                                                            Services</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">Infrastructure</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="voice-servers.html" class="nav-link">Voice
                                                            Servers</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="virtual-numbers.html" class="nav-link">Virtual
                                                            Numbers</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="database-services.html" class="nav-link">Database
                                                            Services</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="ddos-protections.html" class="nav-link">DDoS
                                                            Protections</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('about') }}" class="nav-link">About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="faqs.html" class="nav-link">FAQ's</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="affiliate.html" class="nav-link">Affiliate</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">User</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="{{ route('login') }}"
                                                            class="nav-link">Authentication</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('password.forget') }}"
                                                            class="nav-link">Forget
                                                            Password</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">Shop</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="{{ route('cart') }}" class="nav-link">Cart</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('checkout') }}"
                                                            class="nav-link">Checkout</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="payment-method.html" class="nav-link">Payment
                                                            Method</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="configurator.html" class="nav-link">Configurator</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle">Others</a>
                                                <ul class="dropdown-menu">
                                                    <li class="nav-item">
                                                        <a href="specials.html" class="nav-link">Specials <span
                                                                class="badge badge-primary">New</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="search-page.html" class="nav-link">Search Page</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a href="terms-conditions.html" class="nav-link">Terms &
                                                    Conditions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="404.html" class="nav-link">404 Error Page</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="pricing.html" class="nav-link">Pricing</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                                    </li>
                                </ul>
                            </div>





                            <div class="navbar-option-item navbar-option-cart mobile-hide">
                                <a href="{{ route('cart') }}" target="_blank"
                                    class="shopping-cart navbar-option-icon">
                                    <span><i class="flaticon-shopping-bags"></i></span>
                                    <span class="shopping-cart-tooltip">
                                        @php
                                            $cart = session()->get('cart');
                                            $cartCount =
                                                is_array($cart) || $cart instanceof Countable ? count($cart) : 0;
                                        @endphp
                                        {{ $cartCount }}
                                    </span>
                                </a>
                            </div>

                            <div class="navbar-option-item dropdown">
                                <button class="search navbar-option-icon dropdown-toggle" type="button"
                                    id="search2" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <span class="navbar-search-zoom"><i class="flaticon-zoom"></i></span>
                                    <span class="navbar-search-cancel"><i class="flaticon-cancel"></i></span>
                                </button>
                                <div class="navbar-search dropdown-menu" aria-labelledby="search2">
                                    <form>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Search...">
                                            <button class="btn btn-gradient"><span><i
                                                        class="flaticon-loupe"></i></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="navbar-option-item navbar-language dropdown">
                                <button class="language-option navbar-option-icon" type="button" id="language2"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="language-globe"><i class="flaticon-worldwide"></i></span>
                                    <span class="lang-name"></span>
                                    <span class="language-arrow"><i class="bx bx-chevron-down"></i></span>
                                </button>
                                <div class="language-dropdown-menu dropdown-menu" aria-labelledby="language2">
                                    <a class="dropdown-item" href="#" id="english">
                                        <img src="{{ asset('assets/images/flag-1.png') }}" alt="flag">
                                        English
                                    </a>
                                    <a class="dropdown-item" href="#" id="français">
                                        <img src="{{ asset('assets/images/flag-1.png') }}" alt="flag">
                                        Français
                                    </a>
                                    <a class="dropdown-item" href="#" id="deutsch">
                                        <img src="{{ asset('assets/images/flag-2.png') }}" alt="flag">
                                        Deutsch
                                    </a>
                                    <a class="dropdown-item" href="#" id="chineese">
                                        <img src="{{ asset('assets/images/flag-3.png') }}" alt="flag">
                                        简体中文
                                    </a>
                                    <a class="dropdown-item" href="#" id="arabic">
                                        <img src="{{ asset('assets/images/flag-4.png') }}" alt="flag">
                                        العربيّة
                                    </a>

                                </div>
                            </div>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <!-- Other nav items... -->
                                    @auth
                                        <li class="nav-item">
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                style="display: none;">
                                                @csrf
                                            </form>
                                            <a href="{{ route('logout') }}" class="nav-link"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="{{ route('profile.show') }}" class="nav-link">
                                                <img src="{{ Auth::user()->photo ? Storage::url(Auth::user()->photo) : asset('default-user-photo.png') }}"
                                                    alt="User Photo" class="user-photo">
                                            </a>
                                        </li>
                                    @else
                                        <li class="nav-item">
                                            <a href="{{ route('login') }}" class="btn btn-blue btn-pill text-nowrap">
                                                Login / Register
                                            </a>
                                        </li>
                                    @endauth
                                </ul>
                            </div>
                        </nav>






                    </div>
                </div>

            </div>
        </div>
        </div>

        @yield('beforecontent')

    </header>




    @yield('content')


















    <footer class="footer-bg">

        <div class="footer-upper pt-100 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4">
                        <div class="footer-content-item">
                            <div class="footer-logo">
                                <a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}"
                                        alt="logo">
                                </a>
                            </div>
                            <div class="footer-details">
                                <p>Lorem ipsum dolor sit amet, consectetur adiisicing elit, sed do eiusmod tempor inc
                                    Neque porro quisquam est, qui dolorem magnam quaerat luptatemd do eiusmod tempor inc
                                    Neque porro quisquam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-8">
                        <div class="footer-right pl-80">
                            <div class="row">
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="footer-content-list footer-content-item">
                                        <div class="footer-content-title">
                                            <h3>Get Support</h3>
                                        </div>
                                        <ul class="footer-details footer-list">
                                            <li><a href="shared-hosting.html">Shared Hosting</a></li>
                                            <li><a href="wordpress-hosting.html">WordPress Hosting</a></li>
                                            <li><a href="cloud-hosting.html">Cloud Hosting</a></li>
                                            <li><a href="vps-hosting.html">VPS Hosting</a></li>
                                            <li><a href="dedicated-hosting.html">Dedicated Hosting</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="footer-content-list footer-content-item">
                                        <div class="footer-content-title">
                                            <h3>Company</h3>
                                        </div>
                                        <ul class="footer-details footer-list">
                                            <li><a href="{{ route('about') }}">About Us</a></li>
                                            <li><a href="{{ route('contact') }}">Contact Us</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>

                                            <li><a href="affiliate.html">Affiliate</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 col-lg-4">
                                    <div class="footer-content-list footer-content-item">
                                        <div class="footer-content-title">
                                            <h3>Solutions</h3>
                                        </div>
                                        <ul class="footer-details footer-list">
                                            <li><a href="terms-conditions.html">Terms & Conditions</a></li>
                                            <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                            <li><a href="{{ route('login') }}">Authentication</a></li>
                                            <li><a href="pricing.html">Pricing</a></li>
                                            <li><a href="faqs.html">FAQ's</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-lower">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-sm-12 col-lg-5 pt-10 pb-10">
                        <div class="footer-lower-item-inner footer-lower-item-left">

                            <div class="footer-lower-content">
                                <h3>@Blim</h3>
                                <div class="footer-social-logo">
                                    <ul class="footer-social-list">
                                        <li class="social-btn social-btn-fb"><a href="#"><i
                                                    class="bx bxl-facebook"></i></a></li>
                                        <li class="social-btn social-btn-tw"><a href="#"><i
                                                    class="bx bxl-twitter"></i></a></li>
                                        <li class="social-btn social-btn-ins"><a href="#"><i
                                                    class="bx bxl-instagram"></i></a></li>
                                        <li class="social-btn social-btn-pin"><a href="#"><i
                                                    class="bx bxl-pinterest-alt"></i></a></li>
                                        <li class="social-btn social-btn-yt"><a href="#"><i
                                                    class="bx bxl-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-7 pt-10 pb-10">
                        <div class="footer-lower-item-inner footer-lower-item-right justify-content-lg-end">

                            <div class="footer-lower-text text-lg-end">
                                <p class="footer-text-copy">Copyright Design & Developed by <a
                                        href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
                                <p class="footer-text-gen">Terms & Conditions May Apply. <a
                                        href="terms-conditions.html" target="_blank">Click Here</a></p>
                            </div>

                            <div class="footer-lower-button">
                                <button class="btn btn-pill">Refer A Friend</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>

    <script data-cfasync="false"
        src="https://templates.hibootstrap.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
    <script src="{{ asset('assets/js/contact-form-script.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.meanmenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>
