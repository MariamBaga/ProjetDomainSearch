@extends('layouts.Authentification')

@section('title')
    Réinitialisation du mot de passe
@endsection

@section('content')
    <div class="col-sm-12 col-lg-6 p-0">
        <div class="authentication-item bg-white authentication-grid-lost">
            <div class="authentication-user-panel">
                <div class="authentication-user-header">
                <a href="{{ route('home') }}"><img src="assets/images/Ibracilinklogo.png" class="logo1" alt="logo" width="120"></a>
                    <a href="{{ route('home') }}"><img src="assets/images/Ibracilinklogo.png" class="logo2" alt="logo" width="120"></a>


                </div>
                <div class="authentication-user-body">
                    <p class="mt-40">Vous avez oublié votre mot de passe ? Veuillez entrer votre nom d'utilisateur ou votre
                        adresse e-mail. Vous recevrez un lien pour créer un nouveau mot de passe par e-mail.</p>
                    <div class="authentication-form">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('password.email') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-user"></i></span>
                                            </div>
                                            <input type="text" class="form-control" name="email"
                                                placeholder="Nom d'utilisateur ou adresse e-mail *" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button type="submit" class="btn btn-gradient full-width mb-20">Réinitialiser le mot de
                                        passe</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="authentication-account-access-item">
                                    <div class="authentication-link">
                                        <a href="{{ route('login') }}">Connectez-vous!</a>
                                    </div>
                                </div>
    </div>


@endsection
