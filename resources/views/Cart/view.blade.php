@extends('layouts.master')

@section('title')
    Panier
@endsection

@section('beforecontent')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-6">
                <div class="header-page-content text-center text-lg-start">
                    <h1>Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-sm-12 offset-lg-3 col-lg-3">
                <div class="header-page-image">
                    <img src="{{ asset('assets/images/vps-header-shape.png') }}" alt="shape">

                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="cart-section pt-100 pb-70">
        <div class="container">
            <div class="cart-table">
                <table>
                    <thead>
                        <tr>
                            <th>Produit</th>
                            <th>Prix Unitaire</th>
                            <th>Durée (années)</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (!empty($cart) && is_array($cart))
                            @foreach ($cart as $domainId => $domain)
                                <tr>
                                    <td>{{ $domain['name'] . '' . $domain['extension'] }}</td>
                                    <td>{{ $domain['price'] }} FCFA</td>

                                    <td>
                                        <div class="cart-update cart-info-item">
                                            <form action="{{ route('cart.update') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="domains[{{ $domainId }}][duration]"
                                                    value="{{ $domain['duration'] }}">
                                                <input type="number" name="domains[{{ $domainId }}][duration]"
                                                    value="{{ $domain['duration'] }}" min="1" max="10"
                                                    required>

                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </form>
                                        </div>


                                    </td>




                                    <td>{{ $domain['price'] * $domain['duration'] }} FCFA</td>

                                    <!-- <td>{{ $domain['duration'] }} €</td> -->

                                    <td>
                                        <div class="cart-action">
                                            <form action="{{ route('cart.remove', $domainId) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="cart-action-button cart-action-delete"><i
                                                        class="flaticon-trash"></i></button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5">Votre panier est vide.</td>
                            </tr>
                        @endif
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-sm-12 col-lg-6 pb-30">
                        <div class="cart-details default-box-shadow">
                            <h3 class="cart-details-title">Total du Panier</h3>
                            <div class="cart-total-box">
                                @if (!empty($cart) && is_array($cart))
                                    @foreach ($cart as $domain)
                                        <div class="cart-total-item">
                                            <h4>{{ $domain['name'] . '' . $domain['extension'] }}</h4>
                                            <p>{{ $domain['price'] * $domain['duration'] }} FCFA</p>
                                        </div>
                                    @endforeach
                                    <div class="cart-total-item">
                                        <h4>Total</h4>
                                        <p>{{ array_sum(array_map(fn($domain) => $domain['price'] * $domain['duration'], $cart)) }}
                                            FCFA</p>
                                    </div>
                                    <!-- Bouton "Passer à la caisse" seulement si le panier n'est pas vide -->
                                    <a href="{{ route('checkout') }}" class="btn btn-gradient">Passer à la caisse</a>

                                    <!--<a href="{{ route('domain.register') }}" class="btn btn-gradient">Passer à la caisse</a>-->
                                @else
                                    <!-- Message si le panier est vide -->
                                    <p>Ajoutez des domaines pour continuer.</p>
                                    <!-- Bouton pour ajouter des domaines -->
                                    <a href="{{ route('home') }}" class="btn btn-gradient">Ajouter des domaines</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-lg-6 pb-30">
                        <div class="faq-accordion">
                            <!-- FAQ Section -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
