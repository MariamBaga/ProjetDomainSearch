@extends('layouts.Authentification')

@section('title')
    password_forget
@endsection




@section('content')


<div class="col-sm-12 col-lg-6 p-0">
<div class="authentication-item bg-white authentication-grid-lost">
<div class="authentication-user-panel">
<div class="authentication-user-header">
<a href="{{route ('home')}}"><img src="assets/images/logo-blue.png" class="logo1" alt="logo"></a>
<a href="{{route ('home')}}"><img src="assets/images/logo.png" class="logo2" alt="logo"></a>
<h1>Welcome to Blim</h1>
</div>
<div class="authentication-user-body">
<p class="mt-40">Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
<div class="authentication-form">
<form>
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12">
<div class="form-group mb-20">
<div class="input-group">
<div class="input-group-prepend">
<span class="input-group-text"><i class="flaticon-user"></i></span>
</div>
<input type="text" class="form-control" placeholder="User Name Or Email Address *" required>
</div>
</div>
</div>
<div class="col-sm-12 col-md-12 col-lg-12">
<button class="btn btn-gradient full-width mb-20">Reset Password</button>
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
</div>


@endsection
