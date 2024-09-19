@extends('layouts.master')

@section('title', 'Paiement Réussi')

@section('content')

<style>
    .shop-checkout {
        margin-top: 2rem;
    }

    .page-title {
        font-size: 2rem;
        margin-bottom: 1rem;
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
</style>

<section class="shop-checkout container">
    <h2 class="page-title">Paiement Réussi</h2>
    <div class="order-complete">
        <div class="order-complete__message">
            <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="40" fill="#B9A16B"></circle>
                <path d="M52.9743 35.7612C52.9743 35.3426 52.8069 34.9241 52.5056 34.6228L50.2288 32.346C49.9275 32.0446 49.5089 31.8772 49.0904 31.8772C48.6719 31.8772 48.2533 32.0446 47.952 32.346L36.9699 43.3449L32.048 38.4062C31.7467 38.1049 31.3281 37.9375 30.9096 37.9375C30.4911 37.9375 30.0725 38.1049 29.7712 38.4062L27.4944 40.683C27.1931 40.9844 27.0257 41.4029 27.0257 41.8214C27.0257 42.24 27.1931 42.6585 27.4944 42.9598L33.5547 49.0201L35.8315 51.2969C36.1328 51.5982 36.5513 51.7656 36.9699 51.7656C37.3884 51.7656 37.8069 51.5982 38.1083 51.2969L40.385 49.0201L52.5056 36.8996C52.8069 36.5982 52.9743 36.1797 52.9743 35.7612Z" fill="white"></path>
            </svg>
            <h3>Votre paiement a été traité avec succès !</h3>
            <p>Merci pour votre achat.</p>
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

        <!-- Bouton pour enregistrer le domaine -->
        <div class="order-complete__register">
            <button id="registerDomainButton" class="btn btn-success">Enregistrer le domaine</button>
            <div id="registrationStatus" style="margin-top: 1rem;"></div>
        </div>
    </div>
</section>


<script>
    document.getElementById('registerDomainButton').addEventListener('click', function() {
        fetch('{{ route("domain.register") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                domain_name: '{{ $item->domain_name }}.{{ $item->domain_extension }}',
                purchase_price: '{{ $item->price }}'
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status) {
                document.getElementById('registrationStatus').innerText = 'Domaine enregistré avec succès.';
            } else {
                document.getElementById('registrationStatus').innerText = 'Échec de l\'enregistrement : ' + data.message;
            }
        })
        .catch(error => {
            console.error('Erreur lors de la requête:', error);
            document.getElementById('registrationStatus').innerText = 'Une erreur est survenue.';
        });
    });
</script>

@endsection



