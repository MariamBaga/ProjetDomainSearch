<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="utf-8">
<meta name="description" content="Aila">
<meta name="keywords" content="HTML,CSS,JavaScript">
<meta name="author" content="HiBootstrap">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<title>@yield('title') </title>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .alert {
            transition: opacity 0.5s ease-out;
        }
    </style>

<link rel="icon" href="{{ asset('assets/images/tab1.png') }}" type="image/png" sizes="16x16">

<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" media="all" />

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


<div class="authentication-section">
<div class="container-fluid p-0">
<div class="row m-0">
<div class="col-sm-12 col-lg-6 p-0">
<div class="authentication-item authentication-img-bg blue-gradient">
<div class="authentication-info">
<div class="authentication-info-img">
<img src="{{ asset('assets/images/domaine.webp') }}" alt="shape">

</div>
<div class="authentication-info-title section-title section-title-two">
    <h2>Choisissez Votre Nom de Domaine</h2>
    <p>Un nom de domaine est essentiel pour établir votre présence en ligne. Sélectionnez le domaine parfait pour votre site web et commencez à bâtir votre identité numérique dès aujourd'hui.</p>
</div>

</div>
</div>
</div>






@yield('content')


<script>
        $(document).ready(function() {
            // Disparaître après 2 minutes (120000 millisecondes)
            setTimeout(function() {
                $('.alert').fadeOut('slow', function() {
                    $(this).remove();
                });
            }, 50000); // 120000 ms = 2 minutes
        });
    </script>

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
