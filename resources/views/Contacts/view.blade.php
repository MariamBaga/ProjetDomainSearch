@extends('layouts.master')

@section('title')
    Accueil
@endsection

@section('beforecontent')
<div class="container">
<div class="row align-items-center">
<div class="col-sm-12 col-lg-6">
<div class="header-page-content text-center text-lg-start">
<h1>Contact Us</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
</ol>
</nav>
</div>
</div>
<div class="col-sm-12 offset-lg-3 col-lg-3">
<div class="header-page-image">
<img src="assets/images/contact-us.png" alt="shape">
</div>
</div>
</div>
</div>
@endsection


@section('content')
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
<h3>Send Mail</h3>
<ul class="box-card-list">
<li><i class="flaticon-chat"></i><a class="link-us" href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#4c25222a230c2e202521622f2321"><span class="__cf_email__" data-cfemail="85ecebe3eac5e7e9ece8abe6eae8">[email&#160;protected]</span></a></li>
<li><i class="flaticon-email"></i><a class="link-us" href="https://www.info.blim.com/">info.blim.com</a></li>
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
<h3>Make A Call</h3>
<ul class="box-card-list">
<li><i class="flaticon-phone"></i><a href="tel:678-215-7765">+678-215-7765</a></li>
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
<h3>Find Us</h3>
<p>RT11- 12, 0998 Avenue, NY 90001 United States</p>
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
<img src="assets/images/support-2.png" alt="support">
</div>
</div>
</div>
<div class="col-sm-12 col-lg-8 pb-30">
<div class="comment-content-item">
<div class="comment-area bg-white">
<div class="sub-section-title">
<h3>Leave A Message</h3>
<p>Your email address will not be published. Required fields are marked *</p>
</div>
<div class="comment-input-area mt-30">
<form id="contactForm">
<div class="row">
<div class="col-sm-12 col-md-6 col-lg-6">
<div class="form-group mb-20">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="flaticon-user"></i></span>
</div>
<input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name*" />
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
<input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email*" />
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
<input type="text" name="phone_number" id="phone_number" required data-error="Please enter your phone number" class="form-control" placeholder="Phone*" />
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
<input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Subject*" />
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
<textarea name="message" class="form-control" id="message" rows="5" required data-error="Please write your message" placeholder="Your Message*"></textarea>
</div>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-sm-12">
<div class="form-group">
<div class="form-check agree-label">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
<label class="form-check-label" for="gridCheck">
Accept <a href="terms-conditions.html">Terms & Conditions</a> And <a href="privacy-policy.html">Privacy Policy</a>
</label>
<div class="help-block with-errors gridCheck-error"></div>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<button class="btn btn-gradient" type="submit">
Send A Message
</button>
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
