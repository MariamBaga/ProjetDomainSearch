@extends('layouts.master')

@section('title')
    Domain
@endsection

@section('content')
<div class="container">
    <section class="pricing-section p-tb-100">
        <div class="container">
            <div class="section-title section-title-two">
                <small>Résultats de recherche</small>
                <h2>Domaines pour {{ $domainName . '.' . $extension }}</h2>
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
