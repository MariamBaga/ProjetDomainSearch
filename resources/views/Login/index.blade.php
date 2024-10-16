@extends('layouts.Authentification')

@section('title')
    Login
@endsection

@section('content')
    <div class="col-sm-12 col-lg-6 p-0">
        <div class="authentication-item bg-white">
            <div class="authentication-user-panel">
                <div class="authentication-user-header">
                    <a href="{{ route('home') }}"><img src="assets/images/Ibracilinklogo.png" class="logo1" alt="logo"
                            width="80"></a>
                    <a href="{{ route('home') }}"><img src="assets/images/Ibracilinklogo.png" class="logo2" alt="logo"
                            width="80"></a>
                </div>

                <div class="authentication-connection-header text-center">
                    <h2>Connexion</h2>
                </div>

                <div class="authentication-user-body">
                @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
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

                    <div class="authentication-form">
                        <form id="loginForm" action="{{ route('login.post') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-lg-12">
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
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                    fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                                    <path
                                                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1m3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z" />
                                                </svg>
                                            </div>
                                            <input type="password" class="form-control" id="password" name="password"
                                                placeholder="Mot de passe*" required />
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 col-md-12 col-lg-12">
                                    <button class="btn btn-gradient full-width mb-20" id="loginButton">Login</button>
                                </div>

                                <div class="authentication-account-access-item">
                                    <div class="authentication-link">
                                        <p>Vous n'avez pas de compte ? <a href="{{ route('register') }}">Créer un
                                                Compte!</a></p>
                                    </div>


                                     <div class="authentication-account-access-item">
                                    <div class="authentication-link text-center" >
                                        <a href="{{ route('password.forget') }}">mot_de_passe oubliée</a>
                                    </div>



                                </div>
                            </div>
                        </form>

                        @if (session('seconds'))
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    let seconds = {{ session('seconds') }};
                                    let loginButton = document.getElementById('loginButton');
                                    let emailInput = document.getElementById('email');
                                    let passwordInput = document.getElementById('password');
                                    loginButton.disabled = true;
                                    emailInput.disabled = true;
                                    passwordInput.disabled = true;

                                    let countdown = setInterval(function() {
                                        if (seconds <= 0) {
                                            clearInterval(countdown);
                                            loginButton.disabled = false;
                                            emailInput.disabled = false;
                                            passwordInput.disabled = false;
                                            loginButton.innerText = 'Login';
                                        } else {
                                            loginButton.innerText = 'Réessayez dans ' + seconds + ' secondes';
                                            seconds--;
                                        }
                                    }, 1000);
                                });
                            </script>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
