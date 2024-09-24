<footer class="footer-bg">

    <div class="footer-upper pt-100 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="footer-content-item">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/Ibracilinklogo.png') }} "
                                    alt="logo" width="120">
                            </a>
                        </div>
                        <div class="footer-details">
                            <p> Ibraci Links est une start-up de développement de logiciels qui travaille avec des
                                entreprises et des organisations locales, nationales et internationales, grandes et
                                petites, pour fournir des solutions techniques et créatives adaptées aux entreprises.

                                Avec Ibraci Links, vous n’avez pas à embaucher, former, nourrir et orchestrer une équipe
                                IT.
                                Vous apportez votre vision, elle le réalise. </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-8">
                    <div class="footer-right pl-80">
                        <div class="row">

                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="footer-content-list footer-content-item">
                                    <div class="footer-content-title">
                                        <h3>Entreprise</h3>
                                    </div>
                                    <ul class="footer-details footer-list">
                                        <li><a href="{{ route('about') }}">À propos</a></li>
                                        <li><a href="{{ route('contact') }}">Contact</a></li>
                                        <li><a href="pricing.html">Tarification</a></li>


                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-4 col-lg-4">
                                <div class="footer-content-list footer-content-item">
                                    <div class="footer-content-title">
                                        <h3>Solutions</h3>
                                    </div>
                                    <ul class="footer-details footer-list">
                                        <li><a href="{{ route('condition') }}">Conditions générales</a></li>
                                        <li><a href="{{ route('politique') }}">Politique de confidentialité</a></li>
                                        <li><a href="{{ route('login') }}">Connexion</a></li>
                                        <li><a href="pricing.html">Pricing</a></li>

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
                            <h3>@IbraciLinks</h3>
                            <div class="footer-social-logo">
                                <ul class="footer-social-list">
                                    <li class="social-btn social-btn-fb"><a href="https://facebook.com/ibracilinks"><i
                                                class="bx bxl-facebook"></i></a></li>
                                    <li class="social-btn social-btn-tw"><a href="https://twitter.com/ibracilinks"><i
                                                class="bx bxl-twitter"></i></a></li>
                                    <li class="social-btn social-btn-ins"><a href="https://instagram.com/ibracilinks"><i
                                                class="bx bxl-instagram"></i></a></li>
                                    <li class="social-btn social-btn-pin"><a href="https://pinterest.com/ibracilinks"><i
                                                class="bx bxl-pinterest-alt"></i></a></li>
                                    <li class="social-btn social-btn-yt"><a
                                            href="https://www.youtube.com/channel/UC8f3FPwtYGPfbjTRuewr9bg"><i
                                                class="bx bxl-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-7 pt-10 pb-10">
                    <div class="footer-lower-item-inner footer-lower-item-right justify-content-lg-end">

                        

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
