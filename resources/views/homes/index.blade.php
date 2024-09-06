@extends('layouts.master')

@section('title')
    Accueil
@endsection

@section('beforecontent')
<div class="container">
    <div class="row align-items-center">
        <div class="col-sm-12 col-lg-6">
            <div class="header-page-content text-center text-lg-start">
                {{-- Titre principal de la page --}}
                <h1>Nom de Domaine</h1>
                {{-- Description du service de noms de domaine --}}
                <p>Découvrez notre service d'achat de noms de domaine. Protégez votre marque en ligne avec un domaine
                    personnalisé, adapté à vos besoins professionnels ou personnels.</p>
                <ul class="section-button">
                    {{-- Bouton pour démarrer l'achat d'un domaine --}}
                    <li><a href="#domain-search-section" class="btn btn-pill">Commencer</a></li>
                </ul>
            </div>
        </div>
        <div class="col-sm-12 offset-lg-3 col-lg-3">
            <div class="header-page-image">
                {{-- Image illustrative pour la section d'en-tête --}}
                <img src="{{ asset('assets/images/vps-header-shape.png') }}" alt="forme">
            </div>
        </div>
    </div>
</div>

@endsection


@section('content')
<section id="domain-search-section" class="domain-search-section-two default-box-shadow max-1000 bg-white margin-minus-box pt-100 pb-80 border-radius-3">
    <div class="container">
        <div class="section-title section-title-two text-center">
            <h2>Trouvez le domaine parfait</h2>
        </div>
        <div class="domain-search domain-search-two">
            <form id="domain-search-form" method="GET" action="{{ route('search.domain') }}">
                @csrf
                <div class="form-group">
                    <input type="text" name="domain_name" class="form-control search-text-field" placeholder="Recherchez votre nom de domaine..." required>
                    <div class="input-group-append">
                        <select name="domain_extension" id="domain-extension" class="form-control" required>
                            <option value="com">COM</option>
                            <option value="net">NET</option>
                            <option value="org">ORG</option>
                            <option value="co">CO</option>
                            <option value="info">INFO</option>
                            <option value="video">VIDEO</option>
                            <option value="tech">TECH</option>
                            <option value="design">DESIGN</option>
                            <option value="xyz">XYZ</option>
                            <option value="io">IO</option>
                        </select>
                    </div>
                    <button class="btn btn-gradient">Search Now</button>
                </div>
            </form>

            <div class="domain-search-category">
                <ul>
                    <li>
                        <a href="#" data-extension="com" class="select-extension active">.com only 5000 CFA</a>
                    </li>
                    <li>
                        <a href="#" data-extension="co" class="select-extension">.co only 5000 CFA</a>
                    </li>
                    <li>
                        <a href="#" data-extension="info" class="select-extension">.info only 5000 CFA</a>
                    </li>
                    <li>
                        <a href="#" data-extension="net" class="select-extension">.net only 5000 CFA</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<script>
    document.querySelectorAll('.select-extension').forEach(function(element) {
        element.addEventListener('click', function(event) {
            event.preventDefault();
            var extension = this.getAttribute('data-extension');
            document.getElementById('domain-extension').value = extension;
        });
    });
</script>


    <section class="pricing-section p-tb-100">
        <div class="container">
            <div class="section-title section-title-two">
                <small>Plan tarifaire</small>
                {{-- Titre de la section --}}
                <h2>Tarification des domaines</h2>
                {{-- Paragraphe d'introduction sur les tarifs des domaines --}}
                <p>Découvrez nos tarifs compétitifs pour l'achat de noms de domaine. Nous offrons des options flexibles pour
                    répondre à tous vos besoins, que vous soyez un particulier ou une entreprise. Choisissez la durée qui
                    vous convient et profitez de prix avantageux tout en assurant la sécurité et la gestion optimale de
                    votre domaine.</p>

            </div>
            <div class="pricing-table-default">
    <table>
        <thead>
            <tr>
                <th class="th-bg text-center th-lg">Name</th>
                <th>
                    <span class="d-flex flex-column align-items-center">
                        <i class="flaticon-forward"></i>
                        Transfer
                    </span>
                </th>
                <th>
                    <span class="d-flex flex-column align-items-center">
                        <i class="flaticon-login"></i>
                        Register
                    </span>
                </th>
                <th>
                    <span class="d-flex flex-column align-items-center">
                        <i class="flaticon-renewable-energy"></i>
                        Renew
                    </span>
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($domainPrices as $price)
                <tr>
                    <td class="td-main td-bg">
                        <div class="td-domain-name">
                            <span class="bullet bullet-orange"></span>
                            <p>{{ $price->name }}</p>
                        </div>
                    </td>
                    <td>{{ number_format($price->transfer_price, 2, ',', '.') }} {{ $price->currency }}</td>
                    <td>{{ number_format($price->register_price, 2, ',', '.') }} {{ $price->currency }}</td>
                    <td>{{ number_format($price->renew_price, 2, ',', '.') }} {{ $price->currency }}</td>
                </tr>
            @endforeach
            <tr>
                <td class="td-main td-bg"></td>
                <td><a href="{{ route('cart') }}" class="btn btn-gradient">Buy Now</a></td>
                <td><a href="{{ route('cart') }}" class="btn btn-gradient">Buy Now</a></td>
                <td><a href="{{ route('cart') }}" class="btn btn-gradient">Buy Now</a></td>
            </tr>
        </tbody>
    </table>
</div>

        </div>
    </section>









@endsection
