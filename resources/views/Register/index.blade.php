@extends('layouts.Authentification')

@section('title')
    Register
@endsection

@section('content')
    <div class="col-sm-12 col-lg-6 p-0">
        <div class="authentication-item bg-white">
            <div class="authentication-user-panel">
                <div class="authentication-user-header">
                <a href="{{ route('home') }}"><img src="assets/images/Ibracilinklogo.png" class="logo1" alt="logo" width="80"></a>
                    <a href="{{ route('home') }}"><img src="assets/images/Ibracilinklogo.png" class="logo2" alt="logo" width="80"></a>
                </div>
                <div class="authentication-user-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

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
                                            <input type="password" class="form-control"
                                                id="password_confirmation" name="password_confirmation"
                                                placeholder="Confirm Password *" required />

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
                                            <select name="country" class="form-control">
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                        </div>
                                    </div>
                                </div>

                               

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button class="btn btn-gradient full-width mb-20">Sign Up</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="authentication-account-access-item">
                                    <div class="authentication-link">
                                        <a href="{{ route('login') }}">Connectez-vous!</a>
                                    </div>
                                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
