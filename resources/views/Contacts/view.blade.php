@extends('layouts.master')

@section('title', 'contact')

@section('beforecontent')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-6">
                <div class="header-page-content text-center text-lg-start">
                    <h1>Contactez-nous</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home')}}">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contactez-nous</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-sm-12 offset-lg-3 col-lg-3">
                <div class="header-page-image">
                <img src="{{ asset('assets/images/contact-us.png') }}" alt="shape">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <section class="contact-us-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="box-card fluid-height">
                        <div class="box-card-inner box-card-black full-height default-box-shadow">
                            <div class="box-card-content text-center">
                                <div class="box-card-icon blue-gradient">
                                    <i class="flaticon-email"></i>
                                </div>
                                <div class="box-card-details">
                                    <h3 style="text-transform: none;">Envoyer un mail</h3>
                                    <ul class="box-card-list">
                                        <li><i class="flaticon-chat"></i><a class="link-us" href="mailto: hello@ibracilinks.com">[email&#160;protected]</a></li>
                                        <li><i class="flaticon-email"></i><a class="link-us" href="https://www.info.blim.com/"> hello@ibracilinks.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4">
                    <div class="box-card fluid-height">
                        <div class="box-card-inner blue-gradient full-height default-box-shadow">
                            <div class="box-card-content text-center">
                                <div class="box-card-icon bg-white">
                                    <i class="flaticon-phone-call-1"></i>
                                </div>
                                <div class="box-card-details">
                                    <h3 style="text-transform: none;">Passer un appel</h3>
                                    <ul class="box-card-list">
                                        <li><i class="flaticon-phone"></i><a href="tel:+22378616194">+22378616194</a></li>
                                        <li><i class="flaticon-email"></i>1123-567-55795</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
                    <div class="box-card fluid-height">
                        <div class="box-card-inner bg-white full-height default-box-shadow">
                            <div class="box-card-content text-center">
                                <div class="box-card-icon blue-gradient">
                                    <i class="flaticon-pin"></i>
                                </div>
                                <div class="box-card-details">
                                    <h3 style="text-transform: none;">Nous trouver</h3>
                                    <p>Hall de Bamako Rue ..</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="comment-section pt-100 pb-70 blue-gradient-with-opacity">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-12 col-lg-4 pb-30">
                    <div class="comment-content-item">
                        <div class="about-content-image image-margin-left desk-pad-right-20">
                        <img src="{{ asset('assets/images/support-2.png') }}" alt="support">

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-8 pb-30">
                    <div class="comment-content-item">
                        <div class="comment-area bg-white">
                            <div class="sub-section-title">
                                <h3 style="text-transform: none;">Laissez un message</h3>
                                <p>Votre adresse e-mail ne sera pas publiée. Les champs requis sont indiqués *</p>
                            </div>
                            <div class="comment-input-area mt-30">
                                <form name="contactForm" action="{{ route('contact.post') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="text" name="name" id="name" class="form-control" required data-error="Veuillez entrer votre nom" placeholder="Nom*" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="email" name="email" id="email" class="form-control" required data-error="Veuillez entrer votre email" placeholder="Email*" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-phone-call"></i></span>
                                                    </div>
                                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Téléphone (facultatif)" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6 col-lg-6">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-book"></i></span>
                                                    </div>
                                                    <input type="text" name="subject" id="subject" class="form-control" required data-error="Veuillez entrer votre sujet" placeholder="Sujet*" />
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                                    </div>
                                                    <textarea name="message" class="form-control" id="message" rows="5" required data-error="Veuillez écrire votre message" placeholder="Votre message*"></textarea>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <button class="btn btn-gradient" type="submit">Envoyer un message</button>
                                            <div id="msgSubmit"></div>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-section">
        <div class="map-iframe">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6046.501305802305!2d-74.18132445596852!3d40.73450981702761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25370329a0e1d%3A0xe1bcdc2adcfee473!2sNewark%2C%20NJ%2C%20USA!5e0!3m2!1sen!2sbd!4v1601732077578!5m2!1sen!2sbd"></iframe>
        </div>
    </div>
@endsection
