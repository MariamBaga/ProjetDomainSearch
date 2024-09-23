@extends('layouts.Adminmaster')

@section('title', 'Administration')

@section('beforecontente')

@endsection
@section('content')
<div class="container">
    <h1>Historique des Transactions</h1>
    <table class="table">
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
                    <a href="{{ route('admin.transaction.details', $transaction->id) }}" class="btn btn-info">Détails</a>
                    <form action="{{ route('admin.transaction.destroy', $transaction->id) }}" method="POST" style="display:inline;">
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
@endsection
