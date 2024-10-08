@extends('layouts.Usermaster')

@section('title', 'Renouveler un Domaine')

@section('beforecontente')
    <div class="position-relative iq-banner">
        <div class="iq-navbar-header" style="height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Renouveler un Domaine</h1>
                                <p>Prolongez la validité de votre domaine en quelques étapes simples.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-header-img" style="background: #1d1db0";>
                <!-- Ajoutez des images ou styles supplémentaires si nécessaire -->
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="content-inner pb-0 container" id="page_layout">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-8">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Formulaire de Renouvellement</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <!-- Formulaire de renouvellement -->
                        <form method="POST" action="{{ route('domain.Renew') }}">
                            @csrf
                            <input type="hidden" name="domain_id" value="{{ $domain->id }}">

                            <div class="mb-3">
                                <label for="domainName" class="form-label">Nom du domaine</label>
                                <input type="text" class="form-control" id="domainName" name="domainName" value="{{ $domain->name . '.' . $domain->extension }}" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="years" class="form-label">Durée de renouvellement (en années)</label>
                                <select class="form-select @error('years') is-invalid @enderror" id="years" name="years" required>
                                    <option value="1" {{ old('years') == 1 ? 'selected' : '' }}>1 an</option>
                                    <option value="2" {{ old('years') == 2 ? 'selected' : '' }}>2 ans</option>
                                    <option value="3" {{ old('years') == 3 ? 'selected' : '' }}>3 ans</option>
                                    <option value="4" {{ old('years') == 4 ? 'selected' : '' }}>4 ans</option>
                                    <option value="5" {{ old('years') == 5 ? 'selected' : '' }}>5 ans</option>
                                </select>
                                @error('years')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="currentExpiration" class="form-label">Date d'expiration actuelle</label>
                                <input type="text" class="form-control" id="currentExpiration" name="currentExpiration" value="{{ $domain->expiration_date }}" readonly>
                            </div>

                            <div class="mb-3">
                                <label for="price" class="form-label">Prix de renouvellement</label>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" step="0.01" value="{{ old('price') ?? 0 }}" required>
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Renouveler le domaine</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
