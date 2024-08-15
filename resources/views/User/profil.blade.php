@extends('User.layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid mt-4">
    <div class="row">
        <!-- User Information -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    Profile Information
                </div>
                <div class="card-body text-center">
                    <img src="{{ asset('assets/images/user-avatar.png') }}" class="rounded-circle mb-3" width="100" alt="User Avatar">
                    <h5 class="card-title">JOHN</h5>
                    <p class="card-text">Email: aaa@gmail.com </p>
                    <p class="card-text">Joined: aa aaa aaa</p>
                    <a href="#" class="btn btn-primary mt-3">Edit Profile</a>
                </div>
            </div>
        </div>

        <!-- Recent Activity -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    Recent Activity
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">Purchased <strong>example.com</strong>aaa</li>
                        <li class="list-group-item">Renewed <strong>sample.net</strong> aaaa</li>
                        <li class="list-group-item">Updated account information on aaa</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <!-- Account Management -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    Account Management
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <h5>Change Password</h5>
                            <p>Ensure your account is secure by updating your password regularly.</p>
                            <a href="#" class="btn btn-warning">Change Password</a>
                        </div>
                        <div class="col-md-4">
                            <h5>Payment Methods</h5>
                            <p>Manage your saved payment methods for quick checkout.</p>
                            <a href="#" class="btn btn-success">Manage Payments</a>
                        </div>
                        <div class="col-md-4">
                            <h5>Account Settings</h5>
                            <p>Update your personal information, contact details, and more.</p>
                            <a href="#" class="btn btn-info">Edit Settings</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
