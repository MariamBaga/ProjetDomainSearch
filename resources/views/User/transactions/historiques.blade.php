@extends('layouts.Usermaster')

@section('title', 'Historiques')

@section('beforecontente')
<div class="position-relative iq-banner">
    <!-- Nav Start -->
    <div class="iq-navbar-header" style="height: 215px;">
        <div class="container-fluid iq-container">
            <div class="row">
                <div class="col-md-12">
                    <div class="flex-wrap d-flex justify-content-between align-items-center">
                        <div>
                            <h1>Salut !</h1>
                            <p>Voici la liste de vos transactions.</p>
                        </div>
                        <div>
                            <a href="#" class="btn btn-link bg-light-subtle text-gray">
                                <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <!-- SVG content here -->
                                </svg>
                            </a>
                            @if (session('error'))
                                <div class="alert alert-error">
                                    {{ session('error') }}
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="iq-header-img" style="background: #1d1db0;">
            <img src="{{ asset('assets1/images/header/top-header1.png') }}" alt="header"
                 class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
            <!-- More theme images -->
        </div>
    </div>
    <!-- Nav End -->
</div>
@endsection

@section('content')
<div class="content-inner pb-0 container" id="page_layout">
    <div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header d-flex justify-content-between">
                        <div class="header-title">
                            <h4 class="card-title">Historiques des transactions</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive border rounded">
                            <table id="domain-list-table" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Montant</th>
                                        <th>Utilisateur</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td>{{ $transaction->id }}</td>
                                            <td>{{ $transaction->amount }} FCFA</td>
                                            <td>{{ $transaction->user_email }}</td>
                                            <td>{{ $transaction->created_at }}</td>
                                            <td>{{ $transaction->status }}</td>
                                            <td>
                                                <a href="{{ route('user.transaction.details', $transaction->id) }}" class="btn btn-info">Détails</a>
                                                <form action="{{ route('user.transaction.destroy', $transaction->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette transaction ?');">Supprimer</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
