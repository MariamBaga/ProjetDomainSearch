@extends('layouts.master')

@section('title')
    Pricing
@endsection

@section('beforecontent')


<div class="container">
<div class="row align-items-center">
<div class="col-sm-12 col-lg-6">
<div class="header-page-content text-center text-lg-start">
<h1>Pricing</h1>
<nav aria-label="breadcrumb">
<ol class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Pricing</li>
</ol>
</nav>
</div>
</div>
<div class="col-sm-12 offset-lg-3 col-lg-3">
<div class="header-page-image">
<img src="assets/images/dedicated-header-shape.png" alt="shape">
</div>
</div>
</div>
</div>

@endsection

@section('content')
    <section class="pricing-section-three p-tb-100">
        <div class="container">
            <div class="section-title section-title-two">
                <small>Pricing plan</small>
                <h2>Domain pricing</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim</p>
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
                                <td>{{ $price->transfer_price }} {{ $price->currency }}</td>
                                <td>{{ $price->register_price }} {{ $price->currency }}</td>
                                <td>{{ $price->renew_price }} {{ $price->currency }}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <td class="td-main td-bg"></td>
                            <td><a href="{{route('cart')}}" class="btn btn-gradient">Buy Now</a></td>
                            <td><a href="{{route('cart')}}" class="btn btn-gradient">Buy Now</a></td>
                            <td><a href="{{route('cart')}}" class="btn btn-gradient">Buy Now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>




@endsection
