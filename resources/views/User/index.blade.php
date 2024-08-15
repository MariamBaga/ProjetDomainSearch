@extends('User.layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <!-- Card: Number of Domains Purchased -->
        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Domains Purchased</div>
                <div class="card-body">
                    <h5 class="card-title">Total Domains</h5>
                    <p class="card-text">4</p>
                </div>
            </div>
        </div>

        <!-- Card: Total Invoice Amount -->
        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Total Invoices</div>
                <div class="card-body">
                    <h5 class="card-title">Total Amount</h5>
                    <p class="card-text">$12345</p>
                </div>
            </div>
        </div>

        <!-- Card: Total Users -->
        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Total Users</div>
                <div class="card-body">
                    <h5 class="card-title">Registered Users</h5>
                    <p class="card-text">12</p>
                </div>
            </div>
        </div>

        <!-- Card: System Settings -->
        <div class="col-lg-3 col-md-6">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Settings</div>
                <div class="card-body">
                    <h5 class="card-title">System Status</h5>
                    <p class="card-text">All systems operational.</p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
