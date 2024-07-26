@extends('layouts.master')

@section('title')
Panier
@endsection

@section('content')

@if(session('success'))
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
                        <th>Quantité</th>
                        <th>Total</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($cart))
                        @foreach($cart as $domainId => $domain)
                            <tr>
                                <td>{{ $domain['name'] . '.' . $domain['extension'] }}</td>
                                <td>{{ $domain['price'] }} €</td>
                                <td>
                                    <div class="cart-quantity">
                                        <button>-</button>
                                        <input type="text" value="1">
                                        <button>+</button>
                                    </div>
                                </td>
                                <td>{{ $domain['price'] }} €</td>
                                <td>
                                    <div class="cart-action">
                                        <form action="{{ route('cart.remove', $domainId) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="cart-action-button cart-action-delete"><i class="flaticon-trash"></i></button>
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
        </div>

        <div class="row justify-content-between mt-4">
            <div class="col-sm-12 col-md-4 col-lg-3">
                <div class="cart-update cart-info-item">
                    <a href="{{ route('cart.update') }}" class="btn btn-blue">Mettre à jour le panier</a>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 col-lg-5">
                <div class="cart-coupon cart-info-item">
                    <form action="{{ route('cart.applyCoupon') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="coupon_code" class="form-control" placeholder="Entrez le code promo">
                            <button class="btn btn-gradient" type="submit">Appliquer le coupon</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-lg-6 pb-30">
                <div class="cart-details default-box-shadow">
                    <h3 class="cart-details-title">Total du Panier</h3>
                    <div class="cart-total-box">
                        @foreach($cart as $domain)
                            <div class="cart-total-item">
                                <h4>{{ $domain['name'] . '.' . $domain['extension'] }}</h4>
                                <p>{{ $domain['price'] }} €</p>
                            </div>
                        @endforeach
                        <div class="cart-total-item">
                            <h4>Total</h4>
                            <p>{{ array_sum(array_column($cart, 'price')) }} €</p>
                        </div>
                    </div>
                    <a href="{{ route('checkout') }}" class="btn btn-gradient">Passer à la caisse</a>
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


@endsection
