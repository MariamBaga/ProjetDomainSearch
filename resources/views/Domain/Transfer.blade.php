@extends('layouts.Usermaster')

@section('title', 'Transférer un Domaine')

@section('beforecontente')
    <div class="position-relative iq-banner">
        <!-- Nav Header Component Start -->
        <div class="iq-navbar-header" style="height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Transférer un Domaine</h1>
                                <p>Veuillez entrer les informations nécessaires pour transférer un domaine.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-header-img" style="background: #1d1db0";>

                <!-- Add additional theme color images here as needed -->
            </div>
        </div> <!-- Nav Header Component End -->
    </div>
@endsection

@section('content')
    <div class="content-inner pb-0 container" id="page_layout">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Formulaire de Transfert</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('domain.Transfer') }}">
                            @csrf

                            <div class="mb-3">
                                <label for="domainName" class="form-label">Nom du domaine</label>
                                <input type="text" class="form-control @error('domainName') is-invalid @enderror" id="domainName" name="domainName" value="{{ $domain->name . '.' . $domain->extension }}" readonly>
                                @error('domainName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="authCode" class="form-label">Code d'autorisation</label>
                                <input type="text" class="form-control @error('authCode') is-invalid @enderror" id="authCode" name="authCode" value="{{ old('authCode') }}" required>
                                @error('authCode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="registrantEmail" class="form-label">Email du propriétaire du domaine</label>
                                <input type="email" class="form-control @error('registrantEmail') is-invalid @enderror" id="registrantEmail" name="registrantEmail" value="{{ old('registrantEmail') }}" required>
                                @error('registrantEmail')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Transférer le domaine</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
