@extends('layouts.master')

@section('title')
    Accueil
@endsection

@section('beforecontent')

<div class="container">
<div class="row align-items-center">
<div class="col-sm-12 col-lg-6">
<div class="header-page-content text-center text-lg-start">
<h1>About </h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">About Blim</li>
</ol>
</nav>
</div>
</div>
<div class="col-sm-12 offset-lg-3 col-lg-3">
<div class="header-page-image">
<img src="{{ asset('assets/images/about-us-shape.png') }}" alt="shape">

</div>
</div>
</div>
</div>

@endsection


@section('content')

<section class="about-us-section pt-100 pb-70">
<div class="container">
<div class="row align-items-center">
<div class="col-sm-12 col-lg-6 pb-30">
<div class="section-title section-title-two section-title-left desk-pad-right-10 m-0">
<small>About </small>
<h2>Meet With Our Exceptional Services For Involvement Of Development</h2>
<button class="btn btn-gradient btn-pill">Get Started</button>
</div>
</div>
<div class="col-sm-12 col-lg-6 pb-30">
<div class="about-content-data">
<div class="about-text text-center text-lg-start">
<p class="mb-20">Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiumod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.</p>
<p class="mb-20">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip .</p>
<p>sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciuntcidunt ut labore et dolore magnam aliquam.</p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="team-section pt-100 pb-70 blue-gradient-with-opacity">
<div class="container">
<div class="section-title section-title-two">
<small>Our Experts</small>
<h2>Our professional team</h2>
</div>
<div class="row">
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="info-card fluid-height">
<div class="info-card-inner bg-white full-height">
<div class="info-card-thumb-two bg-blue">
<img src="{{ asset('assets/images/team-1.png') }}" alt="team">

</div>
<div class="info-card-content text-center">
<div class="info-team-data">
<h4>HR Head</h4>
<h3>Dimon Austin</h3>
</div>
<div class="team-social-logo">
<ul class="team-social-list">
<li class="social-btn social-btn-fb"><a href="#"><i class="bx bxl-facebook"></i></a></li>
<li class="social-btn social-btn-tw"><a href="#"><i class="bx bxl-twitter"></i></a></li>
<li class="social-btn social-btn-ins"><a href="#"><i class="bx bxl-instagram"></i></a></li>
<li class="social-btn social-btn-pin"><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
<li class="social-btn social-btn-yt"><a href="#"><i class="bx bxl-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="info-card fluid-height">
<div class="info-card-inner bg-white full-height">
<div class="info-card-thumb-two bg-blue">
<img src="{{ asset('assets/images/team-2.png') }}" alt="team">

</div>
<div class="info-card-content text-center">
<div class="info-team-data">
<h4>Marketing Manager</h4>
<h3>James Carter</h3>
</div>
<div class="team-social-logo">
<ul class="team-social-list">
<li class="social-btn social-btn-fb"><a href="#"><i class="bx bxl-facebook"></i></a></li>
<li class="social-btn social-btn-tw"><a href="#"><i class="bx bxl-twitter"></i></a></li>
<li class="social-btn social-btn-ins"><a href="#"><i class="bx bxl-instagram"></i></a></li>
<li class="social-btn social-btn-pin"><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
<li class="social-btn social-btn-yt"><a href="#"><i class="bx bxl-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="info-card fluid-height">
<div class="info-card-inner bg-white full-height">
<div class="info-card-thumb-two bg-blue">
<img src="{{ asset('assets/images/team-3.png') }}" alt="team">

</div>
<div class="info-card-content text-center">
<div class="info-team-data">
<h4>Head Of Design</h4>
<h3>Saimaon Ketty</h3>
</div>
<div class="team-social-logo">
<ul class="team-social-list">
<li class="social-btn social-btn-fb"><a href="#"><i class="bx bxl-facebook"></i></a></li>
<li class="social-btn social-btn-tw"><a href="#"><i class="bx bxl-twitter"></i></a></li>
<li class="social-btn social-btn-ins"><a href="#"><i class="bx bxl-instagram"></i></a></li>
<li class="social-btn social-btn-pin"><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
<li class="social-btn social-btn-yt"><a href="#"><i class="bx bxl-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="info-card fluid-height">
<div class="info-card-inner bg-white full-height">
<div class="info-card-thumb-two bg-blue">
<img src="{{ asset('assets/images/team-4.png') }}" alt="team">

</div>
<div class="info-card-content text-center">
<div class="info-team-data">
<h4>Team Head</h4>
<h3>Oster Clark</h3>
</div>
<div class="team-social-logo">
<ul class="team-social-list">
<li class="social-btn social-btn-fb"><a href="#"><i class="bx bxl-facebook"></i></a></li>
<li class="social-btn social-btn-tw"><a href="#"><i class="bx bxl-twitter"></i></a></li>
<li class="social-btn social-btn-ins"><a href="#"><i class="bx bxl-instagram"></i></a></li>
<li class="social-btn social-btn-pin"><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
<li class="social-btn social-btn-yt"><a href="#"><i class="bx bxl-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="info-card fluid-height">
<div class="info-card-inner bg-white full-height">
<div class="info-card-thumb-two bg-blue">
<img src="{{ asset('assets/images/team-5.png') }}" alt="team">

</div>
<div class="info-card-content text-center">
<div class="info-team-data">
<h4>Support Manager</h4>
<h3>James Ward</h3>
</div>
<div class="team-social-logo">
<ul class="team-social-list">
<li class="social-btn social-btn-fb"><a href="#"><i class="bx bxl-facebook"></i></a></li>
<li class="social-btn social-btn-tw"><a href="#"><i class="bx bxl-twitter"></i></a></li>
<li class="social-btn social-btn-ins"><a href="#"><i class="bx bxl-instagram"></i></a></li>
<li class="social-btn social-btn-pin"><a href="#"><i class="bx bxl-pinterest-alt"></i></a></li>
<li class="social-btn social-btn-yt"><a href="#"><i class="bx bxl-youtube"></i></a></li>
</ul>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="info-card fluid-height">
<div class="feature-item-content full-height d-flex flex-column justify-content-center text-center text-md-start">
<h3>Do you want to join our Team?</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
<p><a href="authentication.html" class="btn btn-pill btn-gradient">Apply Now</a></p>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="choose-section pt-100 pb-70">
<div class="container">
<div class="section-title section-title-two">
<small>Why best</small>
<h2>Why choose us</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis </p>
</div>
<div class="row">
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="box-card fluid-height">
<div class="box-card-inner box-card-inner-2 full-height border-around">
<div class="box-number"><span>01</span></div>
<div class="box-card-content text-center">
<div class="box-card-thumb">
<img src="{{ asset('assets/images/choose-1.png') }}" alt="choose-us">

</div>
<div class="box-card-details">
<h3>Dedicated support</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elt ttotam rem aperiam dolore magnam luptatem.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-4">
<div class="box-card fluid-height">
<div class="box-card-inner box-card-inner-2 full-height border-around">
<div class="box-number"><span>02</span></div>
<div class="box-card-content text-center">
<div class="box-card-thumb">
<img src="{{ asset('assets/images/choose-2.png') }}" alt="choose-us">

</div>
<div class="box-card-details">
<h3>Data security</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elt ttotam rem aperiam dolore magnam luptatem.</p>
</div>
</div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-6 col-lg-4 offset-md-3 offset-lg-0">
<div class="box-card fluid-height">
<div class="box-card-inner box-card-inner-2 full-height border-around">
<div class="box-number"><span>03</span></div>
<div class="box-card-content text-center">
<div class="box-card-thumb">
<img src="{{ asset('assets/images/choose-3.png') }}" alt="choose-us">

</div>
<div class="box-card-details">
<h3>Data migration</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elt ttotam rem aperiam dolore magnam luptatem.</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


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
<p class="faq-accordion-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud ullamco nisi ut aliquip.</p>
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
<p class="faq-accordion-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud ullamco nisi ut aliquip.</p>
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
<p class="faq-accordion-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud ullamco nisi ut aliquip.</p>
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
<p class="faq-accordion-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaquis nostrud ullamco nisi ut aliquip.</p>
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
