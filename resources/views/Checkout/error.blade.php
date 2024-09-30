@extends('layouts.master')

@section('title', 'Paiement Échoué')

@section('content')

<style>
    .shop-checkout {
        margin-top: 2rem;
    }

    .page-title {
        font-size: 2rem;
        margin-bottom: 1rem;
        color: #d9534f; /* Couleur rouge pour indiquer un échec */
    }

    .order-complete {
        background-color: #f9f9f9;
        padding: 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .order-complete__message {
        text-align: center;
        margin-bottom: 2rem;
    }

    .order-info {
        margin-bottom: 2rem;
    }

    .order-info__item {
        margin-bottom: 1rem;
    }

    .order-info__item label {
        font-weight: bold;
    }

    .checkout__totals-wrapper {
        margin-top: 2rem;
    }

    .checkout__totals {
        background-color: #fff;
        padding: 1.5rem;
        border-radius: 0.5rem;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .checkout-cart-items,
    .checkout-totals {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 1rem;
    }

    .checkout-cart-items th,
    .checkout-cart-items td,
    .checkout-totals th,
    .checkout-totals td {
        padding: 0.5rem;
        border: 1px solid #ddd;
        text-align: left;
    }

    .checkout-cart-items th,
    .checkout-totals th {
        background-color: #f4f4f4;
    }

    /* Bouton de réessai */
    .retry-payment-btn {
        background-color: #d9534f;
        color: white;
        border: none;
        padding: 0.75rem 1.5rem;
        border-radius: 0.5rem;
        cursor: pointer;
        display: inline-block;
        text-align: center;
        margin-top: 2rem;
    }

    .retry-payment-btn:hover {
        background-color: #c9302c;
    }
</style>

<section class="shop-checkout container">
    <h2 class="page-title">Paiement Échoué</h2>
    <div class="order-complete">
        <div class="order-complete__message">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="40" fill="#d9534f"></circle>
                <path d="M40 28C39.3431 28 38.75 28.3431 38.3431 28.75L28.75 38.3431C28.3431 38.75 28 39.3431 28 40C28 40.6569 28.3431 41.25 28.75 41.6569L38.3431 51.25C38.75 51.6569 39.3431 52 40 52C40.6569 52 41.25 51.6569 41.6569 51.25L51.25 41.6569C51.6569 41.25 52 40.6569 52 40C52 39.3431 51.6569 38.75 51.25 38.3431L41.6569 28.75C41.25 28.3431 40.6569 28 40 28Z" fill="white"></path>
            </svg>
            <h3>Votre paiement a échoué</h3>
            <p>Nous sommes désolés, votre transaction n'a pas pu être complétée.</p>
        </div>
        <div class="order-info">
            <div class="order-info__item">
                <label>Nom</label>
                <span>{{ $order->first_name }} {{ $order->last_name }}</span>
            </div>
            <div class="order-info__item">
                <label>Email</label>
                <span>{{ $order->email }}</span>
            </div>
            <div class="order-info__item">
                <label>Téléphone</label>
                <span>{{ $order->phone }}</span>
            </div>
            <div class="order-info__item">
                <label>Adresse</label>
                <span>{{ $order->address }}, {{ $order->city }}</span>
            </div>
            <div class="order-info__item">
                <label>Montant Total</label>
                <span>{{ $order->total_amount }} FCFA</span>
            </div>
            <div class="order-info__item">
                <label>Méthode de paiement</label>
                <span>{{ ucfirst($order->payment_method) }}</span>
            </div>
            <div class="order-info__item">
                <label>Statut de la commande</label>
                <span>{{ ucfirst($order->status) }}</span>
            </div>
        </div>

        <div class="checkout__totals-wrapper">
            <div class="checkout__totals">
                <h3>Éléments de la commande</h3>
                <table class="checkout-cart-items">
                    <thead>
                        <tr>
                            <th>DOMAINE</th>
                            <th>DURÉE</th>
                            <th>PRIX</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($order->items as $item)
                            <tr>
                                <td>{{ $item->domain_name }}.{{ $item->domain_extension }}</td>
                                <td>{{ $item->duration }} an(s)</td>
                                <td>{{ $item->price }} FCFA</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <table class="checkout-totals">
                    <tbody>
                        <tr>
                            <th>TOTAL</th>
                            <td>{{ $order->total_amount }} FCFA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bouton pour réessayer le paiement -->
        <div class="order-complete__retry">
            <button class="retry-payment-btn" onclick="window.location.href="#">Réessayer le paiement</button>
        </div>
    </div>
</section>

@endsection
