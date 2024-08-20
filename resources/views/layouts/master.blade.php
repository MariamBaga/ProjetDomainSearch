<!DOCTYPE html>
<html lang="zxx">

@include('layouts.headLink')

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
                            <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#97fef9f1f8d7f5fbfefab9f4f8fa">
                                <span class="__cf_email__" data-cfemail="563f38303916343a3f3b7835393b">
                                    [email&#160;protected]
                                </span>
                            </a>
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
                        <img src="{{ asset('assets/images/Ibracilinklogo.png') }}" alt="logo" class="blue-logo logo1">
                        <img src="{{ asset('assets/images/Ibracilinklogo.png') }}" alt="logo" class="blue-logo logo2">
                    </a>

                    <div class="navbar-option">
                        <div class="navbar-option-item navbar-option-dots dropdown">
                            <button type="button" id="dot" aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-horizontal-rounded"></i>
                            </button>
                            <ul class="dropdown-menu navbar-dots-dropdown">
                                <li class="dropdown-item">
                                    <div class="navbar-option-item">
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
                                </li>
                            </ul>
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
                            <ul class="navbar-nav ">
                                @auth
                                    <li class="nav-item">
                                        <a href="{{ auth()->user()->hasRole('admin') || auth()->user()->hasRole('super-admin') ? route('admin.dashboard') : route('user.Dashbaord') }}" class="btn btn-blue btn-pill text-nowrap">
                                            Mon Compte
                                        </a>
                                    </li>
                                @else
                                    <li class="navbar-option-item">
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
                                <img src="{{ asset('assets/images/Ibracilinklogo.png') }}" alt="logo" class="white-logo" width="120">
                                <img src="{{ asset('assets/images/Ibracilinklogo.png') }}" alt="logo" class="blue-logo" width="120">
                            </a>

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                        <a href="{{ route('home') }}" class="nav-link active">Domain Name</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about') }}" class="nav-link dropdown-toggle">About Us</a>
                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
                                                <a href="{{ route('condition') }}" class="nav-link">Terms & Conditions</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('politique') }}" class="nav-link">Privacy Policy</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('pricing') }}" class="nav-link">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}" class="nav-link">Contact Us</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="navbar-option">
                                <div class="navbar-option-item">
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
                            </div>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav ml-auto">
                                    @auth
                                        <li class="nav-item">
                                            <a href="{{ auth()->user()->hasRole('admin') || auth()->user()->hasRole('super-admin') ? route('admin.dashboard') : route('user.Dashbaord') }}" class="btn btn-blue btn-pill text-nowrap">
                                                Mon Compte
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
        @yield('beforecontent')
    </header>

    <div class="container">
        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
    </div>

    @yield('content')

    @include('layouts.footerLink')

    <div class="scroll-top" id="scrolltop">
        <div class="scroll-top-inner">
            <span><i class="flaticon-up-arrow"></i></span>
        </div>
    </div>

</body>

</html>
