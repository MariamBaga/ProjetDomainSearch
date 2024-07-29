@extends('layouts.master1')

@section('title')
    Réinitialisation du mot de passe
@endsection

@section('content')
<div class="col-sm-12 col-lg-6 p-0">
    <div class="authentication-item bg-white authentication-grid-lost">
        <div class="authentication-user-panel">
            <div class="authentication-user-header">
                <a href="{{ route('home') }}"><img src="assets/images/logo-blue.png" class="logo1" alt="logo"></a>
                <a href="{{ route('home') }}"><img src="assets/images/logo.png" class="logo2" alt="logo"></a>
                <h1>Bienvenue sur Blim</h1>
            </div>
            <div class="authentication-user-body">
                <p class="mt-40">Veuillez entrer votre nouvelle mot de passe.</p>
                <div class="authentication-form">
                    <form action="{{ route('password.update') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="flaticon-user"></i></span>
                                        </div>
                                        <input type="email" class="form-control" name="email" value="{{ $email ?? old('email') }}" placeholder="Adresse e-mail" required autofocus>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="flaticon-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" name="password" placeholder="Nouveau mot de passe" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <div class="form-group mb-20">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="flaticon-lock"></i></span>
                                        </div>
                                        <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmer le mot de passe" required>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <button type="submit" class="btn btn-gradient full-width mb-20">Réinitialiser le mot de passe</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
