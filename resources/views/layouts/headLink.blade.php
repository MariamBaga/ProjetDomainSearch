
<head>
    <meta charset="utf-8">
    <meta name="description" content="Aila">
    <meta name="keywords" content="HTML,CSS,JavaScript">
    <meta name="author" content="HiBootstrap">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <title>@yield('title') </title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .alert {
            transition: opacity 0.5s ease-out;
        }
    </style>

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


