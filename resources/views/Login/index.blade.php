@extends('layouts.Authentification')

@section('title')
    Accueil
@endsection

@section('content')
    <div class="col-sm-12 col-lg-6 p-0">
        <div class="authentication-item bg-white">
            <div class="authentication-user-panel">
                <div class="authentication-user-header">
                    <a href="{{ route('home') }}"><img src="assets/images/logo-blue.png" class="logo1" alt="logo"></a>
                    <a href="{{ route('home') }}"><img src="assets/images/logo.png" class="logo2" alt="logo"></a>
                    <h1>Welcome to Blim</h1>
                </div>
                <div class="authentication-user-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="authentication-tab">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                        <div class="authentication-tab-item authentication-tab-active" data-authentcation-tab="1">
                            <i class="flaticon-user-1"></i>
                            Login
                        </div>
                        <div class="authentication-tab-item" data-authentcation-tab="2">
                            <i class="flaticon-user-2"></i>
                            Register
                        </div>
                    </div>
                    <div class="authentication-tab-details">
                        <div class="authentication-tab-details-item authentication-tab-details-active"
                            data-authentcation-details="1">
                            <div class="authentication-form">
                                <form action="{{ route('login.post') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="email" name="email"
                                                        placeholder="Email Address*" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Password*" required />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <button class="btn btn-gradient full-width mb-20">Login</button>
                                        </div>
                                    </div>
                                    <div class="authentication-account-access mb-20">
                                        <div class="authentication-account-access-item">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="check1">
                                                <label class="form-check-label" for="check1">Remember me!</label>
                                            </div>
                                        </div>
                                        <div class="authentication-account-access-item">
                                            <div class="authentication-link">
                                                <a href="{{ route('password.forget') }}">Forget password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="authentication-divider mb-20">
                                <span>Or Login With</span>
                            </div>
                            <div class="authentication-social-access">
                                <div class="authentication-social-item social-btn social-btn-fb">
                                    <a href="#" class="btn btn-pill default-box-shadow">Facebook</a>
                                </div>
                                <div class="authentication-social-item social-btn social-btn-tw">
                                    <a href="#" class="btn btn-pill default-box-shadow">Twitter</a>
                                </div>
                                <div class="authentication-social-item social-btn social-btn-ld">
                                    <a href="#" class="btn btn-pill default-box-shadow">Linkedin</a>
                                </div>
                            </div>
                        </div>
                        <div class="authentication-tab-details-item" data-authentcation-details="2">
                            <div class="authentication-form">
                                <form action="{{ route('register.post') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="name" name="name"
                                                        placeholder="Username*" required value="{{ old('name') }}" />

                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="email"
                                                        name="email" placeholder="Email Address *" required
                                                        value="{{ old('email') }}" />

                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="tel" class="form-control" id="phone"
                                                        name="phone" placeholder="+000 123 456 00"
                                                        value="{{ old('phone') }}">

                                                    @if ($errors->has('phone'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="password" class="form-control" id="password"
                                                        name="password" placeholder="Password *" required />

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="password" class="form-control" id="password_confirmation"
                                                        name="password_confirmation" placeholder="Confirm Password *"
                                                        required />

                                                    @if ($errors->has('password_confirmation'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="country"
                                                        name="country" placeholder="Country"
                                                        value="{{ old('country') }}">

                                                    @if ($errors->has('country'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('country') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <div class="form-group mb-20">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                    </div>
                                                    <input type="file" class="form-control" id="photo"
                                                        name="photo" placeholder="Photo">

                                                    @if ($errors->has('photo'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('photo') }}</strong>
                                                        </span>
                                                    @endif

                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-sm-12 col-md-12 col-lg-12">
                                            <button class="btn btn-gradient full-width mb-20">Sign Up</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="authentication-divider">
                                <span>Or Sign Up With</span>
                            </div>
                            <div class="authentication-social-access">
                                <div class="authentication-social-item social-btn social-btn-fb">
                                    <a href="#" class="btn btn-pill default-box-shadow">Facebook</a>
                                </div>
                                <div class="authentication-social-item social-btn social-btn-tw">
                                    <a href="#" class="btn btn-pill default-box-shadow">Twitter</a>
                                </div>
                                <div class="authentication-social-item social-btn social-btn-ld">
                                    <a href="#" class="btn btn-pill default-box-shadow">Linkedin</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="authentication-bottom">
                        <div class="authentication-bottom-item authentication-bottom-border">
                            <div class="authentication-link">
                                <a href="#">Privacy Policy</a>
                            </div>
                        </div>
                        <div class="authentication-bottom-item">
                            <div class="authentication-link">
                                <a href="#">Terms & Conditions</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
