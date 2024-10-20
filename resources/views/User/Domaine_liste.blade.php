@extends('layouts.Usermaster')

@section('title', 'Domain List')

@section('beforecontente')
    <div class="position-relative iq-banner">
        <!--Nav Start-->
        <div class="iq-navbar-header" style="height: 215px;">
            <div class="container-fluid iq-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="flex-wrap d-flex justify-content-between align-items-center">
                            <div>
                                <h1>Salut !</h1>
                                <p>Liste de vos domaines.</p>
                            </div>
                            <div>
                                <a href="#" class="btn btn-link bg-light-subtle text-gray">
                                    <svg class="icon-20" width="20" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <!-- SVG content here -->
                                    </svg>
                                    Announcements
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="iq-header-img" style="background: #1d1db0";>

                <img src="{{ asset('assets1/images/header/top-header1.png') }}" alt="header"
                    class="theme-color-purple-img img-fluid w-100 h-100 animated-scaleX" loading="lazy">
                <!-- More theme images -->
            </div>
        </div>
        <!--Nav End-->
    </div>
@endsection

@section('content')
    <div class="content-inner pb-0 container" id="page_layout">
        <div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <div class="header-title">
                                <h4 class="card-title">Domain List</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive border rounded">
                                <div class="table-responsive my-3">
                                    <table id="domain-list-table" class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Domain Name</th>
                                                <th>Registration Date</th>
                                                <th>Expiration Date</th>
                                                <th>Status</th>
                                                <th style="min-width: 100px">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($domains as $domain)
                                                <tr>
                                                    <td>{{ $domain->name }}.{{ $domain->extension }}</td>
                                                    <td>{{ $domain->registration_date }}</td>
                                                    <td>{{ $domain->expiration_date }}</td>
                                                    <td>
                                                        @if (strtotime($domain->expiration_date) > time())
                                                            <span class="badge bg-primary">Active</span>
                                                        @else
                                                            <span class="badge bg-secondary">Expired</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <button class="btn btn-sm btn-secondary dropdown-toggle"
                                                                type="button" id="dropdownMenuButton" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                ...
                                                            </button>
                                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                                <li><a class="dropdown-item"
                                                                        href="{{ route('domain.Transfer.view', $domain->id) }}">Transferer</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="{{ route('domain.Renew.view', $domain->id) }}">Renouveller</a></li>
                                                                <li><a class="dropdown-item text-danger"
                                                                        href="#">Supprimer</a></li>
                                                            </ul>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5">domains non trouvé.</td>
                                                </tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
