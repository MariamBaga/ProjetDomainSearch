@extends('layouts.Adminmaster')

@section('title', 'Détails de la Transaction')

@section('content')
<div class="container">
    <h1>Détails de la Transaction</h1>

    <p><strong>ID :</strong> {{ $transaction->id }}</p>
    <p><strong>Montant :</strong> {{ $transaction->amount }} FCFA</p>
    <p><strong>Utilisateur :</strong> {{ $transaction->user_email }}</p>
    <p><strong>Date :</strong> {{ $transaction->created_at }}</p>
    <p><strong>Status :</strong> {{ $transaction->status }}</p>

    <h3>Détails des Domaines Associés</h3>
    <table class="table">
        <thead>
            <tr>
                <th>Nom du Domaine</th>
                <th>Extension</th>
                <th>Prix</th>
                <th>Durée (années)</th>
            </tr>
        </thead>
        <tbody>
            @forelse($orderItems as $item)
            <tr>
                <td>{{ $item->domain_name }}</td>
                <td>{{ $item->domain_extension }}</td>
                <td>{{ $item->price }} FCFA</td>
                <td>{{ $item->duration }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="4">Aucun domaine associé trouvé.</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <form action="{{ route('admin.transaction.destroy', $transaction->id) }}" method="POST" onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette transaction ?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Supprimer la Transaction</button>
    </form>

    <a href="{{ route('admin.transaction.history') }}" class="btn btn-primary">Retour</a>
</div>
@endsection
