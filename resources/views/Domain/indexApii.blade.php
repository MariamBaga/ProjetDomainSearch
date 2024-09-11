@extends('layouts.master')

@section('title')
    Domain
@endsection

@section('beforecontent')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-6">
                <div class="header-page-content text-center text-lg-start">
                    <h1>Resultats</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Résultats de recherche {{ $domainName . '.' . $extension }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-sm-12 offset-lg-3 col-lg-3">
                <div class="header-page-image">
                    <img src="{{ asset('assets/images/about-us-shape.png') }}" alt="shape">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="container">
    <section class="pricing-section p-tb-100">
        <div class="container">
            <div class="section-title section-title-two">

                <p>Trouvez le domaine parfait parmi les résultats ci-dessous.</p>
            </div>
            <div class="pricing-table-default">
                @if(isset($domains) && count($domains) > 0)
                    <table>
                        <thead>
                            <tr>
                                <th class="th-bg text-center th-lg">Domaine</th>
                                <th>
                                    <span class="d-flex flex-column align-items-center">
                                        <i class="flaticon-forward"></i>
                                        Statut
                                    </span>
                                </th>
                                <th>
                                    <span class="d-flex flex-column align-items-center">
                                        <i class="flaticon-login"></i>
                                        Prix
                                    </span>
                                </th>
                                <th>
                                    <span class="d-flex flex-column align-items-center">
                                        <i class="flaticon-renewable-energy"></i>
                                        Années
                                    </span>
                                </th>
                                <th>
                                    <span class="d-flex flex-column align-items-center">
                                        <i class="flaticon-renewable-energy"></i>
                                        Action
                                    </span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($domains as $domain)
                                <tr>
                                    <td class="td-main td-bg">
                                        <div class="td-domain-name">
                                            <span class="bullet bullet-orange"></span>
                                            <p>{{ $domain['name'] . '.' . $domain['extension'] }}</p>
                                        </div>
                                    </td>
                                    <td>
                                        @switch($domain['status'])
                                            @case('available')
                                                Disponible
                                                @break
                                            @case('unavailable')
                                                Non disponible
                                                @break
                                            @case('reserved')
                                                Réservé
                                                @break
                                            @default
                                                Statut inconnu
                                        @endswitch
                                    </td>
                                    <td>{{ $domain['price'] }} FCFA</td>
                                    <td>{{ $domain['duration'] }} ans</td>
                                    <td>
                                        @if($domain['status'] === 'available')
                                            @php
                                                $cart = session('cart', []);
                                                if (is_string($cart)) {
                                                    $cart = json_decode($cart, true);
                                                }
                                                $isInCart = is_array($cart) && array_key_exists($domain['id'], $cart);
                                            @endphp

                                            @if($isInCart)
                                                <form action="{{ route('cart.remove', $domain['id']) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Retirer du panier</button>
                                                </form>
                                            @else
                                                <form action="{{ route('cart.add') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="domain_id" value="{{ $domain['id'] }}">
                                                    <button type="submit" class="btn btn-gradient">Ajouter au panier</button>
                                                </form>
                                            @endif
                                        @else
                                            <button class="btn btn-secondary" disabled>Non disponible</button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <p>Aucun résultat trouvé.</p>
                @endif
            </div>
        </div>
    </section>
</div>
@endsection
