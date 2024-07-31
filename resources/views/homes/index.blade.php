@extends('layouts.master')

@section('title')
    Accueil
@endsection

@section('beforecontent')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-6">
                <div class="header-page-content text-center text-lg-start">
                    <h1>Domain Name</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam.</p>
                    <ul class="section-button">
                        <li><button class="btn btn-pill">Get Started</button></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 offset-lg-3 col-lg-3">
                <div class="header-page-image">
                    <img src="{{ asset('assets/images/vps-header-shape.png') }}" alt="shape">

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
                <small>Pricing plan</small>
                <h2>Domain pricing</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim</p>
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
                            <td><a href="cart.html" class="btn btn-gradient">Buy Now</a></td>
                            <td><a href="cart.html" class="btn btn-gradient">Buy Now</a></td>
                            <td><a href="cart.html" class="btn btn-gradient">Buy Now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <section class="choose-section pt-100 pb-70 blue-gradient-with-opacity">
        <div class="container">
            <div class="section-title section-title-two">
                <small>Why best</small>
                <h2>Why choose us</h2>
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


    <section class="feature-section pt-100 pb-70">
        <div class="container">
            <div class="section-title section-title-two">
                <small>We offers</small>
                <h2>Hosting features</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam quis</p>
            </div>
            <div class="row">
                <div class="col-sm-12 col-lg-6">
                    <div class="feature-item feature-item-2 fluid-height">
                        <div class="feature-item-inner full-height bg-white">
                            <div class="feature-item-thumb feature-item-thumb-round bg-off-hard-gradient">
                                <img src="{{ asset('assets/images/feature-icon-1.png') }}" alt="cloud">

                            </div>
                            <div class="feature-item-content">
                                <h3>Personalized Email Service</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elt,tium, totam rem aperiam, eaque
                                    ipsa quae ab illo invent ut labore et dolore magnam luptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="feature-item feature-item-2 fluid-height">
                        <div class="feature-item-inner full-height bg-white">
                            <div class="feature-item-thumb feature-item-thumb-round bg-off-hard-gradient">
                                <img src="{{ asset('assets/images/feature-icon-2.png') }}" alt="cloud">

                            </div>
                            <div class="feature-item-content">
                                <h3>WordPress & cPanel</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elt,tium, totam rem aperiam, eaque
                                    ipsa quae ab illo invent ut labore et dolore magnam luptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="feature-item feature-item-2 fluid-height">
                        <div class="feature-item-inner full-height bg-white">
                            <div class="feature-item-thumb feature-item-thumb-round bg-off-hard-gradient">
                                <img src="{{ asset('assets/images/feature-icon-3.png') }}" alt="cloud">

                            </div>
                            <div class="feature-item-content">
                                <h3>Free SSL Certificates</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elt,tium, totam rem aperiam, eaque
                                    ipsa quae ab illo invent ut labore et dolore magnam luptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="feature-item feature-item-2 fluid-height">
                        <div class="feature-item-inner full-height bg-white">
                            <div class="feature-item-thumb feature-item-thumb-round bg-off-hard-gradient">
                                <img src="{{ asset('assets/images/feature-icon-4.png') }}" alt="cloud">

                            </div>
                            <div class="feature-item-content">
                                <h3>LiteSpeed Web Server</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elt,tium, totam rem aperiam, eaque
                                    ipsa quae ab illo invent ut labore et dolore magnam luptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="feature-item feature-item-2 fluid-height">
                        <div class="feature-item-inner full-height bg-white">
                            <div class="feature-item-thumb feature-item-thumb-round bg-off-hard-gradient">
                                <img src="{{ asset('assets/images/feature-icon-5.png') }}" alt="cloud">

                            </div>
                            <div class="feature-item-content">
                                <h3>PHP Selector</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elt,tium, totam rem aperiam, eaque
                                    ipsa quae ab illo invent ut labore et dolore magnam luptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6">
                    <div class="feature-item feature-item-2 fluid-height">
                        <div class="feature-item-inner full-height bg-white">
                            <div class="feature-item-thumb feature-item-thumb-round bg-off-hard-gradient">
                                <img src="{{ asset('assets/images/feature-icon-6.png') }}" alt="cloud">

                            </div>
                            <div class="feature-item-content">
                                <h3>No Multi-Tenancy</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elt,tium, totam rem aperiam, eaque
                                    ipsa quae ab illo invent ut labore et dolore magnam luptatem.</p>
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
                                <small>Testimonials</small>
                                <h2>What clients are saying</h2>
                            </div>
                            <div class="client-content-carousel owl-carousel owl-theme">
                                <div class="item">
                                    <div class="client-carousel-details text-center text-lg-start">
                                        <p class="client-carousel-para">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua eos qui
                                            velit, sed quia non numquam eius modi tempora cidunt lboredolore magnam
                                            luptatem.</p>
                                        <h3 class="client-carousel-name">Alexa Jesmin</h3>
                                        <h4 class="client-carousel-designation">Marketing Manager</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-carousel-details text-center text-lg-start">
                                        <p class="client-carousel-para">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua eos qui
                                            velit, sed quia non numquam eius modi tempora cidunt lboredolore magnam
                                            luptatem.</p>
                                        <h3 class="client-carousel-name">Devit m. kotlin</h3>
                                        <h4 class="client-carousel-designation">CEO & Founder</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-carousel-details text-center text-lg-start">
                                        <p class="client-carousel-para">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua eos qui
                                            velit, sed quia non numquam eius modi tempora cidunt lboredolore magnam
                                            luptatem.</p>
                                        <h3 class="client-carousel-name">John Doe</h3>
                                        <h4 class="client-carousel-designation">CTO</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-carousel-details text-center text-lg-start">
                                        <p class="client-carousel-para">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua eos qui
                                            velit, sed quia non numquam eius modi tempora cidunt lboredolore magnam
                                            luptatem.</p>
                                        <h3 class="client-carousel-name">Robert Alberto</h3>
                                        <h4 class="client-carousel-designation">Senior Developer</h4>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="client-carousel-details text-center text-lg-start">
                                        <p class="client-carousel-para">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua eos qui
                                            velit, sed quia non numquam eius modi tempora cidunt lboredolore magnam
                                            luptatem.</p>
                                        <h3 class="client-carousel-name">Mike devid</h3>
                                        <h4 class="client-carousel-designation">HR</h4>
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
                <h2>What Would You Like To Know?</h2>
            </div>
            <div class="row align-items-center">
                <div class="col-sm-12 col-md-12 col-lg-5 pb-30">
                    <div class="faq-accordion">

                        <div class="faq-accordion-item faq-accordion-item-active bg-white">
                            <div class="faq-accordion-header">
                                <h3 class="faq-accordion-title">What Is Dedicated Hosting?</h3>
                            </div>
                            <div class="faq-accordion-body">
                                <div class="faq-accordion-body-inner">
                                    <p class="faq-accordion-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniaquis nostrud ullamco nisi ut aliquip.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item bg-white">
                            <div class="faq-accordion-header">
                                <h3 class="faq-accordion-title">Does the price grow up with sharing?</h3>
                                <div class="faq-accordion-header-overlay"></div>
                            </div>
                            <div class="faq-accordion-body">
                                <div class="faq-accordion-body-inner">
                                    <p class="faq-accordion-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniaquis nostrud ullamco nisi ut aliquip.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item bg-white">
                            <div class="faq-accordion-header">
                                <h3 class="faq-accordion-title">What access do I have on a free trial?</h3>
                                <div class="faq-accordion-header-overlay"></div>
                            </div>
                            <div class="faq-accordion-body">
                                <div class="faq-accordion-body-inner">
                                    <p class="faq-accordion-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniaquis nostrud ullamco nisi ut aliquip.</p>
                                </div>
                            </div>
                        </div>
                        <div class="faq-accordion-item bg-white">
                            <div class="faq-accordion-header">
                                <h3 class="faq-accordion-title">What access do I have on the free plan?</h3>
                                <div class="faq-accordion-header-overlay"></div>
                            </div>
                            <div class="faq-accordion-body">
                                <div class="faq-accordion-body-inner">
                                    <p class="faq-accordion-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                        veniaquis nostrud ullamco nisi ut aliquip.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-1 pb-30">
                    <div class="about-content-image">
                        <img src="{{ asset('assets/images/faq.png') }}" alt="faq">

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
