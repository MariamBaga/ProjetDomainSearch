@extends('layouts.Usermaster')

@section('title', 'Tableau de Bord')

@section('content')
    <div class="content-inner pb-0 container" id="page_layout">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2 align-items-center">
                            <div class="d-flex align-items-center">
                                <!-- Icone pour le total des domaines -->
                                <svg class="me-2" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <!-- SVG path ici -->
                                </svg>
                                <h6 class="mb-0">Total des Domaines</h6>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray " id="dropdownMenuButton36" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <!-- SVG pour le dropdown -->
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton36">
                                    <li><a class="dropdown-item" href="#">Cette semaine</a></li>
                                    <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                                    <li><a class="dropdown-item" href="#">Cette année</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3>{{ $totalDomains }}</h3> <!-- Utilise la variable $totalDomains -->
                                <small class="text-success">+ 0.8%</small><small class="ms-2">(BTC/USDT)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2 align-items-center">
                            <div class="d-flex align-items-center">
                                <!-- Icone pour les transactions -->
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <!-- SVG path ici -->
                                </svg>
                                <h6 class="mb-0">Transactions</h6>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray " id="dropdownMenuButton35" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <!-- SVG pour le dropdown -->
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton35">
                                    <li><a class="dropdown-item" href="#">Cette semaine</a></li>
                                    <li><a class="dropdown-item" href="#">Ce mois-ci</a></li>
                                    <li><a class="dropdown-item" href="#">Cette année</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div>
                                <h3>{{ $totalDomains }}</h3> <!-- Utilise la variable $totalTransactions -->
                                <small class="text-danger">-0.8%</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Ajoutez d'autres sections ici, selon vos besoins -->
        </div>
    </div>
@endsection
