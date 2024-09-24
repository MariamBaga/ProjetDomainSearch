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
                            <a href="{{route('contact')}}">Chat With A Consultant</a>
                        </div>
                    </div>
                    <div class="topbar-item-list">
                        <div class="topbar-list-thumb">
                            <i class="flaticon-phone"></i>
                        </div>
                        <div class="topbar-list-content">
                            <a href="tel:+22378616194"> +22378616194</a>
                        </div>
                    </div>
                </div>
                <div class="topbar-item">
                    <div class="topbar-item-list">
                        <div class="topbar-list-thumb">
                            <i class="flaticon-chat"></i>
                        </div>
                        <div class="topbar-list-content">
                            <a href="mailto: hello@ibracilinks.com">
                                hello@ibracilinks.com
                            </a>
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
                                        <a href="{{ route('home') }}" class="nav-link ">Nom de Domaine</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('about') }}" class="nav-link ">À propos de nous</a>

                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('contact') }}" class="nav-link">Contactez-Nous</a>
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
                                                Connection/Inscription
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
