@extends('layouts.master')

@section('title', 'Erreur de Paiement')

@section('content')
    <div class="container mt-5">
        <h1 class="text-danger">Erreurs de paiement</h1>



        
        <p>Il y a eu un problème lors du traitement de votre paiement. Veuillez réessayer.</p>
        <pre>{{ $errorDetails ?? 'Aucun détail supplémentaire disponible.' }}</pre>

        <a href="{{ route('cart') }}" class="btn btn-primary">Retourner au panier</a>
    </div>
@endsection
