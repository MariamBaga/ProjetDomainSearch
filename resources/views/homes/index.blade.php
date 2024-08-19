@extends('layouts.master')

@section('title')
    Accueil
@endsection

@section('beforecontent')
    <div class="container">
    <div class="row align-items-center">
    <div class="col-sm-12 col-lg-6">
        <div class="header-page-content text-center text-lg-start">
            {{-- Titre principal de la page --}}
            <h1>Nom de Domaine</h1>
            {{-- Description du service de noms de domaine --}}
            <p>Découvrez notre service d'achat de noms de domaine. Protégez votre marque en ligne avec un domaine personnalisé, adapté à vos besoins professionnels ou personnels.</p>
            <ul class="section-button">
                {{-- Bouton pour démarrer l'achat d'un domaine --}}
                <li><button class="btn btn-pill">Commencer</button></li>
            </ul>
        </div>
    </div>
    <div class="col-sm-12 offset-lg-3 col-lg-3">
        <div class="header-page-image">
            {{-- Image illustrative pour la section d'en-tête --}}
            <img src="{{ asset('assets/images/vps-header-shape.png') }}" alt="forme">
        </div>
    </div>
</div>

    </div>
@endsection


@section('content')
    <section
        class="domain-search-section-two default-box-shadow max-1000 bg-white margin-minus-box pt-100 pb-80 border-radius-3">
        <div class="container">
            <div class="section-title section-title-two text-center">
                <h2>Search perfect domain</h2>
            </div>
            <div class="domain-search domain-search-two">
                <form id="domain-search-form" method="POST" action="{{ route('search.domain') }}">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="domain_name" class="form-control search-text-field"
                            placeholder="Search Your Domain Name..." required>
                        <div class="input-group-append">
                            <select name="domain_extension" class="form-control" required>
                                <option value="com">COM</option>
                                <option value="net">NET</option>
                                <option value="org">ORG</option>
                                <option value="co">CO</option>
                                <option value="video">VIDEO</option>
                                <option value="tech">TECH</option>
                                <option value="design">DESIGN</option>
                                <option value="xyz">XYZ</option>
                                <option value="io">IO</option>
                            </select>
                        </div>
                        <button class="btn btn-gradient">Search Now</button>
                    </div>
                </form>

                <div class="domain-search-category">
                    <ul>
                        <li>
                            <a href="#" class="active">.com only $8.88</a>
                        </li>
                        <li>
                            <a href="#">.co only $9.88</a>
                        </li>
                        <li>
                            <a href="#">.info only $6.70</a>
                        </li>
                        <li>
                            <a href="#">.net only $7.80</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section class="pricing-section p-tb-100">
        <div class="container">
            <div class="section-title section-title-two">
            <small>Plan tarifaire</small>
{{-- Titre de la section --}}
<h2>Tarification des domaines</h2>
{{-- Paragraphe d'introduction sur les tarifs des domaines --}}
<p>Découvrez nos tarifs compétitifs pour l'achat de noms de domaine. Nous offrons des options flexibles pour répondre à tous vos besoins, que vous soyez un particulier ou une entreprise. Choisissez la durée qui vous convient et profitez de prix avantageux tout en assurant la sécurité et la gestion optimale de votre domaine.</p>

            </div>
            <div class="pricing-table-default">
                <table>
                    <thead>
                        <tr>
                            <th class="th-bg text-center th-lg">Name</th>
                            <th>
                                <span class="d-flex flex-column align-items-center">
                                    <i class="flaticon-forward"></i>
                                    Transfer
                                </span>
                            </th>
                            <th>
                                <span class="d-flex flex-column align-items-center">
                                    <i class="flaticon-login"></i>
                                    Register
                                </span>
                            </th>
                            <th>
                                <span class="d-flex flex-column align-items-center">
                                    <i class="flaticon-renewable-energy"></i>
                                    Renew
                                </span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($domainPrices as $price)
                            <tr>
                                <td class="td-main td-bg">
                                    <div class="td-domain-name">
                                        <span class="bullet bullet-orange"></span>
                                        <p>{{ $price->name }}</p>
                                    </div>
                                </td>
                                <td>{{ $price->transfer_price }} {{ $price->currency }}</td>
                                <td>{{ $price->register_price }} {{ $price->currency }}</td>
                                <td>{{ $price->renew_price }} {{ $price->currency }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="td-main td-bg"></td>
                            <td><a href="{{ route('cart') }}" class="btn btn-gradient">Buy Now</a></td>
                            <td><a href="{{ route('cart') }}" class="btn btn-gradient">Buy Now</a></td>
                            <td><a href="{{ route('cart') }}" class="btn btn-gradient">Buy Now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="choose-section pt-100 pb-70 blue-gradient-with-opacity">
        <div class="container">
            <div class="section-title section-title-two">


                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam quis </p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="box-card fluid-height">
                        <div class="box-card-inner box-card-inner-2 box-card-white-hover full-height border-around">
                            <div class="box-number"><span>01</span></div>
                            <div class="box-card-content text-center">
                                <div class="box-card-thumb">
                                    <img src="{{ asset('assets/images/choose-1.png') }}" alt="choose-us">

                                </div>
                                <div class="box-card-details">
                                    <h3>Dedicated support</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elt ttotam rem aperiam dolore
                                        magnam luptatem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="box-card fluid-height">
                        <div class="box-card-inner box-card-inner-2 box-card-white-hover full-height border-around">
                            <div class="box-number"><span>02</span></div>
                            <div class="box-card-content text-center">
                                <div class="box-card-thumb">
                                    <img src="{{ asset('assets/images/choose-2.png') }}" alt="choose-us">

                                </div>
                                <div class="box-card-details">
                                    <h3>Data security</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elt ttotam rem aperiam dolore
                                        magnam luptatem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                    <div class="box-card fluid-height">
                        <div class="box-card-inner box-card-inner-2 box-card-white-hover full-height border-around">
                            <div class="box-number"><span>03</span></div>
                            <div class="box-card-content text-center">
                                <div class="box-card-thumb">
                                    <img src="{{ asset('assets/images/choose-3.png') }}" alt="choose-us">

                                </div>
                                <div class="box-card-details">
                                    <h3>Data migration</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elt ttotam rem aperiam dolore
                                        magnam luptatem.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <div class="testimonial-section-two pb-70">
        <div class="container">
            <div class="client-carousel-2-area">
                <div class="row align-items-center">
                    <div class="col-sm-12 col-lg-5 pb-30">
                        <div class="client-thumb-carousel owl-carousel">
                            <div class="item">
                                <img src="{{ asset('assets/images/client-thumb-1.png') }}" alt="client">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/client-thumb-2.png') }}" alt="client">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/client-thumb-3.png') }}" alt="client">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/client-thumb-4.png') }}" alt="client">
                            </div>
                            <div class="item">
                                <img src="{{ asset('assets/images/client-thumb-5.png') }}" alt="client">
                            </div>

                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1 pb-30">
    <div class="client-content-2">
        <div class="section-title section-title-two section-title-left">
            {{-- Titre de la section --}}
            <h2>Ce que disent les clients</h2>
        </div>
        <div class="client-content-carousel owl-carousel owl-theme">
            <div class="item">
                <div class="client-carousel-details text-center text-lg-start">
                    {{-- Témoignage de Alexa Jesmin --}}
                    <p class="client-carousel-para">Je suis extrêmement satisfaite des services offerts. L'équipe est très professionnelle et toujours prête à aider.</p>
                    <h3 class="client-carousel-name">Alexa Jesmin</h3>
                    <h4 class="client-carousel-designation">Responsable marketing</h4>
                </div>
            </div>
            <div class="item">
                <div class="client-carousel-details text-center text-lg-start">
                    {{-- Témoignage de Devit M. Kotlin --}}
                    <p class="client-carousel-para">Les solutions proposées ont permis à notre entreprise de se développer rapidement et efficacement. Un service exceptionnel !</p>
                    <h3 class="client-carousel-name">Devit M. Kotlin</h3>
                    <h4 class="client-carousel-designation">PDG & Fondateur</h4>
                </div>
            </div>
            <div class="item">
                <div class="client-carousel-details text-center text-lg-start">
                    {{-- Témoignage de John Doe --}}
                    <p class="client-carousel-para">Le support technique est réactif et compétent. Nous avons pu résoudre nos problèmes en un rien de temps.</p>
                    <h3 class="client-carousel-name">John Doe</h3>
                    <h4 class="client-carousel-designation">Directeur technique</h4>
                </div>
            </div>
            <div class="item">
                <div class="client-carousel-details text-center text-lg-start">
                    {{-- Témoignage de Robert Alberto --}}
                    <p class="client-carousel-para">Un service fiable et une équipe toujours disponible pour répondre à nos besoins. Je recommande vivement.</p>
                    <h3 class="client-carousel-name">Robert Alberto</h3>
                    <h4 class="client-carousel-designation">Développeur senior</h4>
                </div>
            </div>
            <div class="item">
                <div class="client-carousel-details text-center text-lg-start">
                    {{-- Témoignage de Mike Devid --}}
                    <p class="client-carousel-para">L'accompagnement personnalisé nous a permis de tirer le meilleur parti de leurs solutions. Un vrai partenaire de confiance.</p>
                    <h3 class="client-carousel-name">Mike Devid</h3>
                    <h4 class="client-carousel-designation">Responsable des ressources humaines</h4>
                </div>
            </div>
        </div>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>


    <section class="faq-section pt-100 pb-70 blue-gradient-with-opacity">
        <div class="container">
            <div class="section-title section-title-two">
                <h2>Que souhaitez-vous savoir ?</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-5 pb-30">
                    <div class="faq-accordion">

                        <div class="faq-accordion-item faq-accordion-item-active bg-white">
                            <div class="faq-accordion-header">
                                <h3 class="faq-accordion-title">Qu'est-ce que l'hébergement dédié ?</h3>
                            </div>
                            <div class="faq-accordion-body">
                                <div class="faq-accordion-body-inner">
                                    {{-- L'hébergement dédié est une forme d'hébergement web où un serveur entier est mis à la disposition d'un seul client. Cela permet un contrôle total sur les ressources du serveur, garantissant ainsi une performance optimale pour les applications ou les sites web hébergés. --}}
                                    <p class="faq-accordion-para">L'hébergement dédié est une forme d'hébergement web où un
                                        serveur entier est mis à la disposition d'un seul client. Cela permet un contrôle
                                        total sur les ressources du serveur, garantissant ainsi une performance optimale
                                        pour les applications ou les sites web hébergés.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-accordion-item bg-white">
                            <div class="faq-accordion-header">
                                <h3 class="faq-accordion-title">Le prix augmente-t-il avec le partage ?</h3>
                                <div class="faq-accordion-header-overlay"></div>
                            </div>
                            <div class="faq-accordion-body">
                                <div class="faq-accordion-body-inner">
                                    {{-- Non, le prix de l'hébergement partagé est généralement fixe et dépend du plan que vous choisissez. Toutefois, certaines fonctionnalités ou ressources supplémentaires peuvent entraîner des frais supplémentaires. --}}
                                    <p class="faq-accordion-para">Non, le prix de l'hébergement partagé est généralement
                                        fixe et dépend du plan que vous choisissez. Toutefois, certaines fonctionnalités ou
                                        ressources supplémentaires peuvent entraîner des frais supplémentaires.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-accordion-item bg-white">
                            <div class="faq-accordion-header">
                                <h3 class="faq-accordion-title">Quels accès ai-je pendant la période d'essai gratuite ?
                                </h3>
                                <div class="faq-accordion-header-overlay"></div>
                            </div>
                            <div class="faq-accordion-body">
                                <div class="faq-accordion-body-inner">
                                    {{-- Pendant la période d'essai gratuite, vous avez accès à toutes les fonctionnalités principales du service, vous permettant de tester son efficacité et de vérifier s'il correspond à vos besoins avant de vous engager. --}}
                                    <p class="faq-accordion-para">Pendant la période d'essai gratuite, vous avez accès à
                                        toutes les fonctionnalités principales du service, vous permettant de tester son
                                        efficacité et de vérifier s'il correspond à vos besoins avant de vous engager.</p>
                                </div>
                            </div>
                        </div>

                        <div class="faq-accordion-item bg-white">
                            <div class="faq-accordion-header">
                                <h3 class="faq-accordion-title">Quels accès ai-je avec le plan gratuit ?</h3>
                                <div class="faq-accordion-header-overlay"></div>
                            </div>
                            <div class="faq-accordion-body">
                                <div class="faq-accordion-body-inner">
                                    {{-- Avec le plan gratuit, vous bénéficiez d'un accès limité aux fonctionnalités du service, conçu pour vous donner un aperçu de ce que nous offrons. Pour débloquer des fonctionnalités avancées, vous devrez passer à un plan payant. --}}
                                    <p class="faq-accordion-para">Avec le plan gratuit, vous bénéficiez d'un accès limité
                                        aux fonctionnalités du service, conçu pour vous donner un aperçu de ce que nous
                                        offrons. Pour débloquer des fonctionnalités avancées, vous devrez passer à un plan
                                        payant.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1 pb-30">
                    <div class="about-content-image">
                        <img src="{{ asset('assets/images/faq.png') }}" alt="FAQ">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
