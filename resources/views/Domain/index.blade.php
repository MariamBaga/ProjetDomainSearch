@extends('layouts.master')

@section('title')
    Domain
@endsection

@section('content')
<div class="container">
    <h2>Résultats de la recherche pour {{ $domainName . '.' . $extension }}</h2>

    @if(isset($domains) && $domains->count() > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Domaine</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($domains as $domain)
                    <tr>
                        <td>{{ $domain->name . '.' . $domain->extension }}</td>
                        <td>{{ $domain->status == 'disponible' ? 'Disponible' : 'Non disponible' }}</td>
                        <td>{{ $domain->price }} €</td>
                        <td>
                            @if($domain->status == 'disponible')
                                @php
                                    $cart = session('cart', []);
                                    $isInCart = in_array($domain->id, $cart);
                                @endphp

                                @if($isInCart)
                                    <form action="{{ route('cart.remove') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain_id" value="{{ $domain->id }}">
                                        <button type="submit" class="btn btn-danger">Retirer du panier</button>
                                    </form>
                                @else
                                    <form action="{{ route('cart.add') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="domain_id" value="{{ $domain->id }}">
                                        <button type="submit" class="btn btn-primary">Ajouter au panier</button>
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
@endsection
