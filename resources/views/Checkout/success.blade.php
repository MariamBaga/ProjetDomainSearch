@extends('layouts.master')

@section('title', 'Paiement Réussi')

@section('content')
<div class="container mt-5">
    <h2>Paiement Réussi</h2>
    <p>Votre paiement a été traité avec succès. Merci pour votre achat !</p>

    <h4>Détails de la commande</h4>
    <ul>
        <li><strong>Nom :</strong> {{ $order->first_name }} {{ $order->last_name }}</li>
        <li><strong>Email :</strong> {{ $order->email }}</li>
        <li><strong>Téléphone :</strong> {{ $order->phone }}</li>

        <li><strong>Adresse :</strong> {{ $order->address }}, {{ $order->city }}</li>
        <li><strong>Montant Total :</strong> {{ $order->total_amount }} €</li>
        <li><strong>Méthode de paiement :</strong> {{ ucfirst($order->payment_method) }}</li>
        <li><strong>Statut de la commande :</strong> {{ ucfirst($order->status) }}</li>
    </ul>

    <h4>Éléments de la commande</h4>
    <ul>
        @foreach($order->items as $item)
            <li>{{ $item->domain_name }}.{{ $item->domain_extension }} - {{ $item->duration }} an(s) - {{ $item->price }} €</li>
        @endforeach
    </ul>
</div>
@endsection
