<!doctype html>
<html lang="en" class="theme-fs-sm" data-bs-theme="light" data-bs-theme-color="default" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title data-setting="app_name">@yield('title')</title>
    <meta name="description"
        content="Qompac UI is a revolutionary Bootstrap Admin Dashboard Template and UI Components Library. The Admin Dashboard Template and UI Component features 8 modules.">
    <meta name="keywords"
        content="premium, admin, dashboard, template, bootstrap 5, clean ui, qompac-ui, admin dashboard,responsive dashboard, optimized dashboard,">
    <meta name="author" content="Iqonic Design">
    <meta name="DC.title" content="Qompac UI Responsive Bootstrap 5 Admin Dashboard Template">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets1/images/favicon.ico') }}">

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('assets1/css/core/libs.min.css') }}">

    <!-- Flatpickr css -->
    <link rel="stylesheet" href="{{ asset('assets1/vendor/flatpickr/dist/flatpickr.min.css') }}">

    <!-- qompac-ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/qompac-ui.min28b5.css?v=2.0.0') }}">

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/custom.min28b5.css?v=2.0.0') }}">

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/rtl.min28b5.css?v=2.0.0') }}">

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('assets1/css/customizer.min28b5.css?v=2.0.0') }}">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

</head>





<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body ">
                <img alt="loader" class="image-loader img-fluid">

            </div>
        </div>
    </div>
    <!-- loader END -->
    <aside class="sidebar sidebar-base sidebar-white sidebar-default navs-rounded-all " id="first-tour"
        data-toggle="main-sidebar" data-sidebar="responsive">
        <div class="sidebar-header d-flex align-items-center justify-content-start">
            <a href="{{ route('home') }}" class="navbar-brand">

                <!--Logo start-->
                <div class="logo-main">
                    <div class="logo-normal">
                        <img src="{{ asset('assets/images/Ibracilinklogo.png') }}" alt="logo" class="white-logo"
                            width="40">
                    </div>
                    <div class="logo-mini">
                        <svg class=" icon-30" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                fill="currentColor" />
                            <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9" />
                        </svg>
                    </div>
                </div>
                <!--logo End-->

            </a>
            <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                <i class="icon">

                    <svg class="icon-10" width="10" height="10" viewBox="0 0 8 8" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M7.29853 8C7.11974 8 6.94002 7.93083 6.80335 7.79248L3.53927 4.50446C3.40728 4.37085 3.33333 4.18987 3.33333 4.00036C3.33333 3.81179 3.40728 3.63081 3.53927 3.4972L6.80335 0.207279C7.07762 -0.069408 7.52132 -0.069408 7.79558 0.209174C8.06892 0.487756 8.06798 0.937847 7.79371 1.21453L5.02949 4.00036L7.79371 6.78618C8.06798 7.06286 8.06892 7.51201 7.79558 7.79059C7.65892 7.93083 7.47826 8 7.29853 8Z"
                            fill="white" />
                        <path
                            d="M3.96552 8C3.78673 8 3.60701 7.93083 3.47034 7.79248L0.206261 4.50446C0.0742745 4.37085 0.000325203 4.18987 0.000325203 4.00036C0.000325203 3.81179 0.0742745 3.63081 0.206261 3.4972L3.47034 0.207279C3.74461 -0.069408 4.18831 -0.069408 4.46258 0.209174C4.73591 0.487756 4.73497 0.937847 4.4607 1.21453L1.69649 4.00036L4.4607 6.78618C4.73497 7.06286 4.73591 7.51201 4.46258 7.79059C4.32591 7.93083 4.14525 8 3.96552 8Z"
                            fill="white" />
                    </svg>
                </i>
            </div>
        </div>
        <div class="sidebar-body pt-0 data-scrollbar">
            <div class="sidebar-list">
                <!-- Sidebar Menu Start -->
                <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled text-start" href="#" tabindex="-1">
                            <span class="default-icon">Home</span>
                            <span class="mini-icon" data-bs-toggle="tooltip" title="Home"
                                data-bs-placement="right">-</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="{{ route('user.Dashbaord') }}">
                            <i class="icon" data-bs-toggle="tooltip" title="Dashboard" data-bs-placement="right">
                                <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span style="text-transform: none;" class="item-name">Tableau de bord</span>
                        </a>
                    </li>


                    <li>
                        <hr class="hr-horizontal">
                    </li>
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Pages</span>
                            <span class="mini-icon">-</span>
                        </a>
                    </li>




                    <li class="nav-item">
                        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#utilities-error"
                            role="button" aria-expanded="false" aria-controls="utilities-error">
                            <i class="icon" data-bs-toggle="tooltip" data-bs-placement="right"
                                aria-label="Utilities" data-bs-original-title="Utilities">
                                <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path opacity="0.4"
                                        d="M11.9912 18.6215L5.49945 21.864C5.00921 22.1302 4.39768 21.9525 4.12348 21.4643C4.0434 21.3108 4.00106 21.1402 4 20.9668V13.7087C4 14.4283 4.40573 14.8725 5.47299 15.37L11.9912 18.6215Z"
                                        fill="currentColor"></path>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.89526 2H15.0695C17.7773 2 19.9735 3.06605 20 5.79337V20.9668C19.9989 21.1374 19.9565 21.3051 19.8765 21.4554C19.7479 21.7007 19.5259 21.8827 19.2615 21.9598C18.997 22.0368 18.7128 22.0023 18.4741 21.8641L11.9912 18.6215L5.47299 15.3701C4.40573 14.8726 4 14.4284 4 13.7088V5.79337C4 3.06605 6.19625 2 8.89526 2ZM8.22492 9.62227H15.7486C16.1822 9.62227 16.5336 9.26828 16.5336 8.83162C16.5336 8.39495 16.1822 8.04096 15.7486 8.04096H8.22492C7.79137 8.04096 7.43991 8.39495 7.43991 8.83162C7.43991 9.26828 7.79137 9.62227 8.22492 9.62227Z"
                                        fill="currentColor"></path>
                                </svg>
                            </i>
                            <span class="item-name">Domaine</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7"></path>
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="utilities-error" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="{{ route('User.domain.list') }}">
                                    <i class="icon" data-bs-toggle="tooltip" data-bs-placement="right"
                                        aria-label="Error 404" data-bs-original-title="Error 404">
                                        <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor">
                                                </circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <span style="text-transform: none;"  class="item-name">Liste de Domaine</span>
                                </a>
                            </li>


                        </ul>
                    </li>


                    <li>
                        <hr class="hr-horizontal">
                    </li>
                    <li class="nav-item static-item">
                        <a class="nav-link static-item disabled" href="#" tabindex="-1">
                            <span class="default-icon">Elements</span>
                            <span class="mini-icon" data-bs-toggle="tooltip" title="Elements"
                                data-bs-placement="right">-</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="collapse" href="#sidebar-maps" role="button"
                            aria-expanded="false" aria-controls="sidebar-maps">
                            <i class="icon" data-bs-toggle="tooltip" title="Maps" data-bs-placement="right">
                                <svg width="20" class="icon-20" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M8.53162 2.93677C10.7165 1.66727 13.402 1.68946 15.5664 2.99489C17.7095 4.32691 19.012 6.70418 18.9998 9.26144C18.95 11.8019 17.5533 14.19 15.8075 16.0361C14.7998 17.1064 13.6726 18.0528 12.4488 18.856C12.3228 18.9289 12.1848 18.9777 12.0415 19C11.9036 18.9941 11.7693 18.9534 11.6508 18.8814C9.78243 17.6746 8.14334 16.134 6.81233 14.334C5.69859 12.8314 5.06584 11.016 5 9.13442C4.99856 6.57225 6.34677 4.20627 8.53162 2.93677ZM9.79416 10.1948C10.1617 11.1008 11.0292 11.6918 11.9916 11.6918C12.6221 11.6964 13.2282 11.4438 13.6748 10.9905C14.1214 10.5371 14.3715 9.92064 14.3692 9.27838C14.3726 8.29804 13.7955 7.41231 12.9073 7.03477C12.0191 6.65723 10.995 6.86235 10.3133 7.55435C9.63159 8.24635 9.42664 9.28872 9.79416 10.1948Z"
                                        fill="currentColor"></path>
                                    <ellipse opacity="0.4" cx="12" cy="21" rx="5"
                                        ry="1" fill="currentColor"></ellipse>
                                </svg>
                            </i>
                            <span class="item-name">Maps</span>
                            <i class="right-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" class="icon-18"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7" />
                                </svg>
                            </i>
                        </a>
                        <ul class="sub-nav collapse" id="sidebar-maps" data-bs-parent="#sidebar-menu">
                            <li class="nav-item">
                                <a class="nav-link " href="maps/google.html">
                                    <i class="icon">
                                        <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor">
                                                </circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Google"
                                        data-bs-placement="right"> G </i>
                                    <span class="item-name">Google</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="maps/vector.html">
                                    <i class="icon">
                                        <svg class="icon-10" width="10" viewBox="0 0 24 24" fill="currentColor"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <g>
                                                <circle cx="12" cy="12" r="8" fill="currentColor">
                                                </circle>
                                            </g>
                                        </svg>
                                    </i>
                                    <i class="sidenav-mini-icon" data-bs-toggle="tooltip" title="Vector"
                                        data-bs-placement="right"> V </i>
                                    <span class="item-name">Vector</span>
                                </a>
                            </li>
                        </ul>
                    </li>


                </ul>

                <!-- Sidebar Menu End -->
            </div>
        </div>
        <div class="sidebar-footer"></div>
    </aside>
    <main class="main-content">
        <div class="position-relative ">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar">
                <div class="container-fluid navbar-inner">
                    <a href="{{ route('home') }}" class="navbar-brand">

                        <!--Logo start-->
                        <div class="logo-main">
                            <div class="logo-normal">
                                <img src="{{ asset('assets/images/Ibracilinklogo.png') }}" alt="logo"
                                    class="white-logo" width="25">
                            </div>
                            <div class="logo-mini">
                                <svg class="text-primary icon-30" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.25333 2H22.0444L29.7244 15.2103L22.0444 28.1333H7.25333L0 15.2103L7.25333 2ZM11.2356 9.32316H18.0622L21.3334 15.2103L18.0622 20.9539H11.2356L8.10669 15.2103L11.2356 9.32316Z"
                                        fill="currentColor" />
                                    <path d="M23.751 30L13.2266 15.2103H21.4755L31.9999 30H23.751Z" fill="#3FF0B9" />
                                </svg>
                            </div>
                        </div>
                        <!--logo End-->

                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon d-flex">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <div class="d-flex align-items-center justify-content-between product-offcanvas">



                        <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1"
                            id="offcanvasBottom">
                            <div class="offcanvas-body">
                                <ul class="iq-nav-menu list-unstyled">
                                    <li class="nav-item ">
                                        <a class="nav-link menu-arrow justify-content-start active"
                                            data-bs-toggle="collapse" href="{{ route('home') }}" role="button"
                                            aria-expanded="false" aria-controls="homeData">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                                    fill="currentColor" />
                                            </svg>
                                            <span class="nav-text ms-2">Accueil</span>
                                        </a>

                                    </li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <span class="navbar-toggler-bar bar1 mt-1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0 ">


                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link" id="notification-drop" data-bs-toggle="dropdown">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19.7695 11.6453C19.039 10.7923 18.7071 10.0531 18.7071 8.79716V8.37013C18.7071 6.73354 18.3304 5.67907 17.5115 4.62459C16.2493 2.98699 14.1244 2 12.0442 2H11.9558C9.91935 2 7.86106 2.94167 6.577 4.5128C5.71333 5.58842 5.29293 6.68822 5.29293 8.37013V8.79716C5.29293 10.0531 4.98284 10.7923 4.23049 11.6453C3.67691 12.2738 3.5 13.0815 3.5 13.9557C3.5 14.8309 3.78723 15.6598 4.36367 16.3336C5.11602 17.1413 6.17846 17.6569 7.26375 17.7466C8.83505 17.9258 10.4063 17.9933 12.0005 17.9933C13.5937 17.9933 15.165 17.8805 16.7372 17.7466C17.8215 17.6569 18.884 17.1413 19.6363 16.3336C20.2118 15.6598 20.5 14.8309 20.5 13.9557C20.5 13.0815 20.3231 12.2738 19.7695 11.6453Z"
                                            fill="currentColor"></path>
                                        <path opacity="0.4"
                                            d="M14.0088 19.2283C13.5088 19.1215 10.4627 19.1215 9.96275 19.2283C9.53539 19.327 9.07324 19.5566 9.07324 20.0602C9.09809 20.5406 9.37935 20.9646 9.76895 21.2335L9.76795 21.2345C10.2718 21.6273 10.8632 21.877 11.4824 21.9667C11.8123 22.012 12.1482 22.01 12.4901 21.9667C13.1083 21.877 13.6997 21.6273 14.2036 21.2345L14.2026 21.2335C14.5922 20.9646 14.8734 20.5406 14.8983 20.0602C14.8983 19.5566 14.4361 19.327 14.0088 19.2283Z"
                                            fill="currentColor"></path>
                                    </svg>
                                    <span class="bg-danger dots"></span>
                                </a>
                                <ul class="p-0 sub-drop dropdown-menu dropdown-menu-end"
                                    aria-labelledby="notification-drop">
                                    <li class="p-0">
                                        <div
                                            class="p-3 card-header d-flex justify-content-between bg-primary rounded-top">
                                            <div class="header-title">
                                                <h5 class="mb-0 text-white" style="text-transform: none;">Tous les notifications</h5>
                                            </div>
                                        </div>
                                        <div class="p-0 card-body all-notification">
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                                        src="{{ asset('assets1/images/shapes/01.png') }}"
                                                        alt="" loading="lazy">
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Emma Watson Bni</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">95 MB</p>
                                                            <small class="float-end font-size-12">Just Now</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                                            src="{{ asset('assets1/images/shapes/02.png') }}"
                                                            alt="" loading="lazy">
                                                    </div>
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">New customer is join</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Cyst Bni</p>
                                                            <small class="float-end font-size-12">5 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                                        src="{{ asset('assets1/images/shapes/03.png') }}"
                                                        alt="" loading="lazy">
                                                    <div class="ms-3 w-100">
                                                        <h6 class="mb-0 ">Two customer is left</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Cyst Bni</p>
                                                            <small class="float-end font-size-12">2 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="iq-sub-card">
                                                <div class="d-flex align-items-center">
                                                    <img class="p-1 avatar-40 rounded-pill bg-primary-subtle"
                                                        src="{{ asset('assets1/images/shapes/04.png') }}"
                                                        alt="" loading="lazy">
                                                    <div class="w-100 ms-3">
                                                        <h6 class="mb-0 ">New Mail from Fenny</h6>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-0">Cyst Bni</p>
                                                            <small class="float-end font-size-12">3 days ago</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>

                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item theme-scheme-dropdown">
                                <a href="#" class="nav-link" id="mode-drop">
                                    <svg class="icon-24" width="24" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z"
                                            fill="currentColor"></path>
                                        <path
                                            d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <ul class="list-unstyled dropdown-menu dropdown-content">
                                    <li data-setting="radio">
                                        <div class="dropdown-item d-flex align-items-center">
                                            <input type="radio" value="light" class="btn-check"
                                                name="theme_scheme" id="color-mode-light">
                                            <label class="d-block" for="color-mode-light">
                                                <svg class="icon-24" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="ms-3 mb-0">Light</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li data-setting="radio">
                                        <div class="dropdown-item d-flex align-items-center">
                                            <input type="radio" value="dark" class="btn-check"
                                                name="theme_scheme" id="color-mode-dark">
                                            <label class="d-block" for="color-mode-dark">
                                                <svg class="icon-24" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z"
                                                        fill="currentColor"></path>
                                                    <path
                                                        d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="ms-3 mb-0">Dark</span>
                                            </label>
                                        </div>
                                    </li>
                                    <li data-setting="radio">
                                        <div class="dropdown-item d-flex align-items-center">
                                            <input type="radio" value="auto" class="btn-check"
                                                name="theme_scheme" id="color-mode-auto" checked>
                                            <label class="d-block" for="color-mode-auto">
                                                <svg class="icon-24" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                                <span class="ms-3 mb-0">Auto</span>
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item iq-full-screen d-none  d-xl-block border-end" id="fullscreen-item">
                                <a href="#" class="nav-link pe-3" id="btnFullscreen"
                                    data-bs-toggle="dropdown">
                                    <span class="btn-inner">
                                        <svg class="normal-screen icon-24" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M18.5528 5.99656L13.8595 10.8961" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M5.8574 18.896L10.5507 13.9964" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                        <svg class="full-normal-screen icon-32 d-none" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                            <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                            <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755"
                                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round"></path>
                                        </svg>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="py-0 nav-link d-flex align-items-center ps-3" href="#"
                                    id="profile-setting" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ Auth::user()->photo ? Storage::url(Auth::user()->photo) : asset('assets1/images/avatars/default.png') }}"
                                        alt="User-Profile"
                                        class="theme-color-default-img img-fluid avatar avatar-50 avatar-rounded"
                                        loading="lazy">
                                    <div class="caption ms-3 d-none d-md-block">
                                        <h6 class="mb-0 caption-title">{{ Auth::user()->name }}</h6>

                                    </div>
                                </a>


                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profile-setting">
                                    <li><a class="dropdown-item" href="{{ route('Userprofil') }}">Profile</a></li>
                                    <li><a class="dropdown-item" href="app/user-privacy-setting.html">Paramètre</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Déconnexion</a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!--Nav End-->

            @yield('beforecontente')
        </div>






        @yield('content')






        <!-- Footer Section Start -->
        <footer class="footer">
            <div class="footer-body">
                <ul class="left-panel list-inline mb-0 p-0">
                    <li class="list-inline-item me-2"><a href="privacy-policy.html">Privacy Policy</a></li>
                    <li class="list-inline-item"><a href="terms-of-use.html">Terms of Use</a></li>
                </ul>
                
            </div>
        </footer>
        <!-- Footer Section End -->
    </main>
    <!-- Wrapper End-->
    <!-- Live Customizer start -->
    <!-- Setting offcanvas start here -->
    <div class="offcanvas offcanvas-end live-customizer" tabindex="-1" id="live-customizer"
        data-bs-backdrop="false" data-bs-scroll="true" aria-labelledby="live-customizer-label" aria-modal="true"
        role="dialog">
        <div class="offcanvas-header pb-0">
            <div class="d-flex align-items-center">
                <h4 class="offcanvas-title" id="live-customizer-label">Setting Pannel</h4>
            </div>
            <div class="close-icon" data-bs-dismiss="offcanvas">
                <svg xmlns="http://www.w3.org/2000/svg" width="24px" class="h-5 w-5" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
        </div>
        <div class="offcanvas-body data-scrollbar">
            <div class="row">
                <div class="col-lg-12">
                    <div>
                        <div class="text-center mb-4">
                            <h5 class="d-inline-block">Style Setting</h5>
                        </div>
                        <div>
                            <!-- Theme start here -->
                            <div class="mb-4">
                                <h5 class="mb-3">Theme</h5>
                                <div class=" mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custom-redio-btn mt-2" type="radio"
                                            value="light" name="theme_scheme" id="color-mode-light" checked="">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between"
                                            for="color-mode-light">
                                            <span>Light Theme</span>
                                            <div class="text-primary ">
                                                <svg width="60" height="27" viewBox="0 0 60 27"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25"
                                                        rx="4.125" fill="white"></rect>
                                                    <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B">
                                                    </circle>
                                                    <rect x="16.5" y="8.25" width="37.5" height="3"
                                                        rx="1.5" fill="#DADCE0"></rect>
                                                    <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25"
                                                        rx="4.125" stroke="#DADCE0" stroke-width="0.75">
                                                    </rect>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class=" mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100 ">
                                        <input class="form-check-input custom-redio-btn mt-2" type="radio"
                                            value="dark" name="theme_scheme" id="color-mode-dark">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between"
                                            for="color-mode-dark">
                                            <span>Dark Theme</span>
                                            <div class="text-primary ">
                                                <svg width="60" height="27" viewBox="0 0 60 27"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25"
                                                        rx="4.125" fill="#1E2745"></rect>
                                                    <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B">
                                                    </circle>
                                                    <rect x="16.5" y="8.25" width="37.5" height="3"
                                                        rx="1.5" fill="#DADCE0"></rect>
                                                    <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25"
                                                        rx="4.125" stroke="currentColor" stroke-width="0.75">
                                                    </rect>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="d-flex align-items-center justify-content-between" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custom-redio-btn mt-2" type="radio"
                                            value="auto" name="theme_scheme" id="color-mode-auto">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between"
                                            for="color-mode-auto">
                                            <span>Device Default</span>
                                            <div class="text-primary ">
                                                <svg class="rounded" width="60" height="27"
                                                    viewBox="0 0 60 27" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25"
                                                        rx="4.125" fill="#1E2745"></rect>
                                                    <circle cx="9.75" cy="9.75" r="3.75" fill="#80868B">
                                                    </circle>
                                                    <rect x="16.5" y="8.25" width="37.5" height="3"
                                                        rx="1.5" fill="#DADCE0"></rect>
                                                    <rect x="6" y="18" width="48" height="3" rx="1.5"
                                                        fill="currentColor"></rect>
                                                    <g clip-path="url(#clip0_507_92)">
                                                        <rect width="30" height="27" fill="white"></rect>
                                                        <circle cx="9.75" cy="9.75" r="3.75"
                                                            fill="#80868B"></circle>
                                                        <rect x="16.5" y="8.25" width="37.5" height="3"
                                                            rx="1.5" fill="#DADCE0"></rect>
                                                        <rect x="6" y="18" width="48" height="3"
                                                            rx="1.5" fill="currentColor"></rect>
                                                    </g>
                                                    <rect x="0.375" y="0.375" width="59.25" height="26.25"
                                                        rx="4.125" stroke="#DADCE0" stroke-width="0.75">
                                                    </rect>
                                                    <defs>
                                                        <clipPath id="clip0_507_92">
                                                            <rect width="30" height="27" fill="white">
                                                            </rect>
                                                        </clipPath>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <!-- theme end here -->
                            <hr class="hr-horizontal">
                            <!-- Menu start here -->
                            <div>
                                <h6 class="mt-4 mb-3">Menu Color</h6>
                                <div class="d-grid gap-3 grid-cols-3 mb-3">
                                    <div data-setting="radio">
                                        <input type="radio" value="sidebar-white" class="btn-check"
                                            name="sidebar_color" id="sidebar-white" checked="">
                                        <label class="btn btn-border d-block" for="sidebar-white"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="White Menu">
                                            Light
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="sidebar-dark" class="btn-check"
                                            name="sidebar_color" id="sidebar-dark">
                                        <label class="btn btn-border d-block" for="sidebar-dark"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Dark Menu">
                                            Dark
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="sidebar-color" class="btn-check"
                                            name="sidebar_color" id="sidebar-color">
                                        <label class="btn btn-border d-block" for="sidebar-color"
                                            data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="Colored Menu">
                                            Color
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-horizontal">
                            <!-- Menu Style start here -->


                            <!-- Menu Style end here -->

                            <hr class="hr-horizontal">

                            <!-- Active Menu Style start here -->

                            <div class="mb-4">
                                <h5 class="mt-4 mb-3">Active Menu Style</h5>
                                <div class="d-grid gap-3 grid-cols-2">
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="sidebar-default navs-rounded" class="btn-check"
                                            name="sidebar_menu_style" id="navs-rounded">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-rounded">
                                            Rounded One
                                        </label>
                                    </div>
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="sidebar-default navs-rounded-all"
                                            class="btn-check" name="sidebar_menu_style" id="navs-rounded-all">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-rounded-all">
                                            Rounded All
                                        </label>
                                    </div>
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="sidebar-default navs-pill" class="btn-check"
                                            name="sidebar_menu_style" id="navs-pill">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-pill">
                                            Pill One Side
                                        </label>
                                    </div>
                                    <div data-setting="radio" class="text-center">
                                        <input type="radio" value="sidebar-default navs-pill-all" class="btn-check"
                                            name="sidebar_menu_style" id="navs-pill-all">
                                        <label class="btn btn-border btn-setting-panel d-block overflow-hidden"
                                            for="navs-pill-all">
                                            Pill All
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-horizontal">
                            <!-- Color customizer start here -->
                            <div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mt-4 mb-3">Color Customizer</h6>
                                    <div class="d-flex align-items-center">
                                        <a href="#custom-color" data-bs-toggle="collapse" role="button"
                                            aria-expanded="false" aria-controls="custom-color">Custom</a>
                                        <div data-setting="radio">
                                            <input type="radio" value="default" class="btn-check"
                                                name="theme_color" id="theme-color-default"
                                                data-colors='{"primary": "#2647c8", "secondary": "aca4bc"}'>
                                            <label class="btn bg-transparent px-2 border-0" for="theme-color-default"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Reset Color"
                                                data-bs-original-title="Reset color">
                                                <svg width="18" height="18" viewBox="0 0 24 24"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M21.4799 12.2424C21.7557 12.2326 21.9886 12.4482 21.9852 12.7241C21.9595 14.8075 21.2975 16.8392 20.0799 18.5506C18.7652 20.3986 16.8748 21.7718 14.6964 22.4612C12.518 23.1505 10.1711 23.1183 8.01299 22.3694C5.85488 21.6205 4.00382 20.196 2.74167 18.3126C1.47952 16.4293 0.875433 14.1905 1.02139 11.937C1.16734 9.68346 2.05534 7.53876 3.55018 5.82945C5.04501 4.12014 7.06478 2.93987 9.30193 2.46835C11.5391 1.99683 13.8711 2.2599 15.9428 3.2175L16.7558 1.91838C16.9822 1.55679 17.5282 1.62643 17.6565 2.03324L18.8635 5.85986C18.945 6.11851 18.8055 6.39505 18.549 6.48314L14.6564 7.82007C14.2314 7.96603 13.8445 7.52091 14.0483 7.12042L14.6828 5.87345C13.1977 5.18699 11.526 4.9984 9.92231 5.33642C8.31859 5.67443 6.8707 6.52052 5.79911 7.74586C4.72753 8.97119 4.09095 10.5086 3.98633 12.1241C3.8817 13.7395 4.31474 15.3445 5.21953 16.6945C6.12431 18.0446 7.45126 19.0658 8.99832 19.6027C10.5454 20.1395 12.2278 20.1626 13.7894 19.6684C15.351 19.1743 16.7062 18.1899 17.6486 16.8652C18.4937 15.6773 18.9654 14.2742 19.0113 12.8307C19.0201 12.5545 19.2341 12.3223 19.5103 12.3125L21.4799 12.2424Z"
                                                        fill="#2647c8" />
                                                    <path
                                                        d="M20.0941 18.5594C21.3117 16.848 21.9736 14.8163 21.9993 12.7329C22.0027 12.4569 21.7699 12.2413 21.4941 12.2512L19.5244 12.3213C19.2482 12.3311 19.0342 12.5633 19.0254 12.8395C18.9796 14.283 18.5078 15.6861 17.6628 16.8739C16.7203 18.1986 15.3651 19.183 13.8035 19.6772C12.2419 20.1714 10.5595 20.1483 9.01246 19.6114C7.4654 19.0746 6.13845 18.0534 5.23367 16.7033C4.66562 15.8557 4.28352 14.9076 4.10367 13.9196C4.00935 18.0934 6.49194 21.37 10.008 22.6416C10.697 22.8908 11.4336 22.9852 12.1652 22.9465C13.075 22.8983 13.8508 22.742 14.7105 22.4699C16.8889 21.7805 18.7794 20.4073 20.0941 18.5594Z"
                                                        fill="aca4bc" />
                                                </svg>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse" id="custom-color">
                                    <div class="form-group d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-primary-color">Primary</label>
                                        <input class="" name="theme_color" data-extra="primary" type="color"
                                            id="custom-primary-color" value="#2647c8" data-setting="color">
                                    </div>
                                    <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-secondary-color">Secondary</label>
                                        <input class="" name="theme_color" data-extra="secondary"
                                            type="color" id="custom-secondary-color" value="#00C3F9"
                                            data-setting="color">
                                    </div>
                                    <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-success-color">Success</label>
                                        <input class="" name="theme_color" data-extra="success" type="color"
                                            id="custom-success-color" value="#91969E" data-setting="color">
                                    </div>
                                    <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-danger-color">Danger</label>
                                        <input class="" name="theme_color" data-extra="danger" type="color"
                                            id="custom-danger-color" value="#DB5363" data-setting="color">
                                    </div>
                                    <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-warning-color">Warning</label>
                                        <input class="" name="theme_color" data-extra="warning" type="color"
                                            id="custom-warning-color" value="#EA6A12" data-setting="color">
                                    </div>
                                    <div class="form-group d-flex d-flex justify-content-between align-items-center">
                                        <label class="" for="custom-info-color">Info</label>
                                        <input class="" name="theme_color" data-extra="info" type="color"
                                            id="custom-info-color" value="#E586B3" data-setting="color">
                                    </div>
                                </div>
                                <div class="grid-cols-5 mb-4 d-grid gap-3">
                                    <div data-setting="radio">
                                        <input type="radio" value="color-1" class="btn-check" name="theme_color"
                                            id="theme-color-1">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-1"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-1"
                                            data-bs-original-title="Theme-1">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#2185F4" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1BBC6" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="color-2" class="btn-check" name="theme_color"
                                            id="theme-color-2">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-2"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-2"
                                            data-bs-original-title="Theme-2">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#34A853" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#B1C6B7" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="color-3" class="btn-check" name="theme_color"
                                            id="theme-color-3">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-3"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-3"
                                            data-bs-original-title="Theme-3">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#553AF9" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#B4B1C6" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="color-4" class="btn-check"
                                            name="theme_color" id="theme-color-4">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-4"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-4"
                                            data-bs-original-title="Theme-4">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#FF3003" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#C6B5B1" />
                                            </svg>
                                        </label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="color-5" class="btn-check"
                                            name="theme_color" id="theme-color-5">
                                        <label class="btn btn-border d-block bg-transparent" for="theme-color-5"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Theme-5"
                                            data-bs-original-title="Theme-5">
                                            <svg class="customizer-btn" xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" width="26" height="26">
                                                <circle cx="12" cy="12" r="10" fill="#fa6aae" />
                                                <path d="M2,12 a1,1 1 1,0 20,0" fill="#cfc6c6" />
                                            </svg>
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Color customizer end here -->
                            <hr class="hr-horizontal">
                            <div>
                                <h6 class="d-inline-block mb-3 me-2">Page Style </h6>
                                <div class="d-grid gap-3 grid-cols-2 mb-4">
                                    <div data-setting="radio">
                                        <input type="radio" value="container" class="btn-check"
                                            name="page_layout" id="page-layout-boxed">
                                        <label class="btn btn-border d-block" for="page-layout-boxed">Boxed</label>
                                    </div>
                                    <div data-setting="radio">
                                        <input type="radio" value="container-fluid" class="btn-check"
                                            name="page_layout" id="page-layout-full-width" checked="">
                                        <label class="btn btn-border d-block" for="page-layout-full-width">Full
                                            Width</label>
                                    </div>
                                </div>
                            </div>
                            <hr class="hr-horizontal">
                            <!-- Direction customizer start here -->
                            <div>
                                <h5 class="mb-3 mt-4">Direction</h5>
                                <div class=" mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custom-redio-btn" type="radio"
                                            value="ltr" name="theme_scheme_direction" data-prop="dir"
                                            id="theme-scheme-direction-ltr" checked="">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between"
                                            for="theme-scheme-direction-ltr">
                                            <span>LTR</span>
                                            <svg class="text-primary" width="60" height="27"
                                                viewBox="0 0 60 27" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="11.5" cy="13.5002" r="6.5" fill="currentColor">
                                                </circle>
                                                <rect x="21" y="7.70026" width="34" height="5"
                                                    rx="2" fill="#80868B"></rect>
                                                <rect opacity="0.5" x="21" y="16.1003" width="25.6281"
                                                    height="3.2" rx="1.6" fill="#80868B"></rect>
                                                <rect x="0.375" y="0.375244" width="59.25" height="26.25"
                                                    rx="4.125" stroke="currentColor" stroke-width="0.75">
                                                </rect>
                                            </svg>
                                        </label>
                                    </div>

                                </div>
                                <div class="mb-3" data-setting="radio">
                                    <div class="form-check mb-0 w-100">
                                        <input class="form-check-input custom-redio-btn" type="radio"
                                            value="rtl" name="theme_scheme_direction" data-prop="dir"
                                            id="theme-scheme-direction-rtl">
                                        <label
                                            class="form-check-label d-flex align-items-center justify-content-between "
                                            for="theme-scheme-direction-rtl">
                                            <span>RTL</span>
                                            <svg class="text-primary" width="60" height="27"
                                                viewBox="0 0 60 27" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle r="6.5" transform="matrix(-1 0 0 1 48.5 13.5002)"
                                                    fill="currentColor"></circle>
                                                <rect width="34" height="5" rx="2"
                                                    transform="matrix(-1 0 0 1 39 7.70026)" fill="#80868B"></rect>
                                                <rect opacity="0.5" width="25.6281" height="3.2"
                                                    rx="1.6" transform="matrix(-1 0 0 1 39 16.1003)"
                                                    fill="#80868B"></rect>
                                                <rect x="-0.375" y="0.375" width="59.25" height="26.25"
                                                    rx="4.125" transform="matrix(-1 0 0 1 59.25 0.000244141)"
                                                    stroke="currentColor" stroke-width="0.75"></rect>
                                            </svg>
                                        </label>
                                    </div>

                                </div>
                            </div>
                            <!-- Direction customizer end here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Settings sidebar end here -->

    <a class="btn btn-fixed-end btn-warning btn-icon btn-setting" id="settingbutton" data-bs-toggle="offcanvas"
        data-bs-target="#live-customizer" role="button" aria-controls="live-customizer">
        <svg class="icon-24 animated-rotate" width="24" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M20.8064 7.62361L20.184 6.54352C19.6574 5.6296 18.4905 5.31432 17.5753 5.83872V5.83872C17.1397 6.09534 16.6198 6.16815 16.1305 6.04109C15.6411 5.91402 15.2224 5.59752 14.9666 5.16137C14.8021 4.88415 14.7137 4.56839 14.7103 4.24604V4.24604C14.7251 3.72922 14.5302 3.2284 14.1698 2.85767C13.8094 2.48694 13.3143 2.27786 12.7973 2.27808H11.5433C11.0367 2.27807 10.5511 2.47991 10.1938 2.83895C9.83644 3.19798 9.63693 3.68459 9.63937 4.19112V4.19112C9.62435 5.23693 8.77224 6.07681 7.72632 6.0767C7.40397 6.07336 7.08821 5.98494 6.81099 5.82041V5.82041C5.89582 5.29601 4.72887 5.61129 4.20229 6.52522L3.5341 7.62361C3.00817 8.53639 3.31916 9.70261 4.22975 10.2323V10.2323C4.82166 10.574 5.18629 11.2056 5.18629 11.8891C5.18629 12.5725 4.82166 13.2041 4.22975 13.5458V13.5458C3.32031 14.0719 3.00898 15.2353 3.5341 16.1454V16.1454L4.16568 17.2346C4.4124 17.6798 4.82636 18.0083 5.31595 18.1474C5.80554 18.2866 6.3304 18.2249 6.77438 17.976V17.976C7.21084 17.7213 7.73094 17.6516 8.2191 17.7822C8.70725 17.9128 9.12299 18.233 9.37392 18.6717C9.53845 18.9489 9.62686 19.2646 9.63021 19.587V19.587C9.63021 20.6435 10.4867 21.5 11.5433 21.5H12.7973C13.8502 21.5001 14.7053 20.6491 14.7103 19.5962V19.5962C14.7079 19.088 14.9086 18.6 15.2679 18.2407C15.6272 17.8814 16.1152 17.6807 16.6233 17.6831C16.9449 17.6917 17.2594 17.7798 17.5387 17.9394V17.9394C18.4515 18.4653 19.6177 18.1544 20.1474 17.2438V17.2438L20.8064 16.1454C21.0615 15.7075 21.1315 15.186 21.001 14.6964C20.8704 14.2067 20.55 13.7894 20.1108 13.5367V13.5367C19.6715 13.284 19.3511 12.8666 19.2206 12.3769C19.09 11.8873 19.16 11.3658 19.4151 10.928C19.581 10.6383 19.8211 10.3982 20.1108 10.2323V10.2323C21.0159 9.70289 21.3262 8.54349 20.8064 7.63277V7.63277V7.62361Z"
                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle cx="12.1747" cy="11.8891" r="2.63616" stroke="currentColor" stroke-width="1.5"
                stroke-linecap="round" stroke-linejoin="round"></circle>
        </svg>
    </a>
    <!-- Live Customizer end -->

    <!-- Library Bundle Script -->
    <script src="{{ asset('assets1/js/core/libs.min.js') }}"></script>

    <!-- Plugin Scripts -->

    <!-- Flatpickr Script -->
    <script src="{{ asset('assets1/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets1/js/plugins/flatpickr.js') }}" defer></script>

    <!-- Select2 Script -->
    <script src="{{ asset('assets1/js/plugins/select2.js') }}" defer></script>

    <!-- Slider-tab Script -->
    <script src="{{ asset('assets1/js/plugins/slider-tabs.js') }}"></script>

    <!-- Lodash Utility -->
    <script src="{{ asset('assets1/vendor/lodash/lodash.min.js') }}"></script>

    <!-- Utilities Functions -->
    <script src="{{ asset('assets1/js/iqonic-script/utility.min.js') }}"></script>

    <!-- Settings Script -->
    <script src="{{ asset('assets1/js/iqonic-script/setting.min.js') }}"></script>

    <!-- Settings Init Script -->
    <script src="{{ asset('assets1/js/setting-init.js') }}"></script>

    <!-- External Library Bundle Script -->
    <script src="{{ asset('assets1/js/core/external.min.js') }}"></script>

    <!-- Widgetchart Script -->
    <script src="{{ asset('assets1/js/charts/widgetcharts28b5.js?v=2.0.0') }}" defer></script>

    <!-- Dashboard Script -->
    <script src="{{ asset('assets1/js/charts/dashboard28b5.js?v=2.0.0') }}" defer></script>

    <!-- qompacui Script -->
    <script src="{{ asset('assets1/js/qompac-ui28b5.js?v=2.0.0') }}" defer></script>

    <script src="{{ asset('assets1/js/sidebar28b5.js?v=2.0.0') }}" defer></script>

</body>


</html>
