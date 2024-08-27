@extends('layouts.Authentification')

@section('title')
    Login
@endsection

@section('content')
    <div class="col-sm-12 col-lg-6 p-0">
        <div class="authentication-item bg-white">
            <div class="authentication-user-panel">
                <div class="authentication-user-header">
                    {{-- Logo with a link to the home page --}}
                    <a href="{{ route('home') }}"><img src="assets/images/Ibracilinklogo.png" class="logo1" alt="logo" width="80"></a>
                    <a href="{{ route('home') }}"><img src="assets/images/Ibracilinklogo.png" class="logo2" alt="logo" width="80"></a>
                </div>

                {{-- Connexion heading --}}
                <div class="authentication-connection-header text-center">
                    <h2>Connexion</h2>
                </div>

                <div class="authentication-user-body">
                    {{-- Display success message if available --}}
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- Display error message if available --}}
                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif

                    {{-- Link to the registration page --}}
                    <div class="authentication-account-access-item">
                        <div class="authentication-link">
                            <a href="{{ route('register') }}">Creer un compte</a>
                        </div>
                    </div>

                    {{-- Login form --}}
                    <div class="authentication-form">
                        {{-- Display validation errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    {{-- Email input field --}}
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" id="email" name="email"
                                                placeholder="Addresse Email*" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    {{-- Password input field --}}
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-password"></i></span>
                                            </div>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Mot de passe*" required />
                                        </div>
                                        {{-- Display specific error message for the password field --}}
                                        @error('password')
                                            <div class="text-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    {{-- Login button --}}
                                    <button class="btn btn-gradient full-width mb-20">Login</button>
                                </div>
                            </div>
                            <div class="authentication-account-access mb-20">
                                <div class="authentication-account-access-item">
                                    {{-- Remember me checkbox --}}
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="check1">
                                        <label class="form-check-label" for="check1">Remember me!</label>
                                    </div>
                                </div>
                                <div class="authentication-account-access-item">
                                    {{-- Link to the password recovery page --}}
                                    <div class="authentication-link">
                                        <a href="{{ route('password.forget') }}">Forget password?</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
