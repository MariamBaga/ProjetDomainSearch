@extends('layouts.master')

@section('title')
    Pricing
@endsection

@section('beforecontent')





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
                            <td><a href="cart.html" class="btn btn-gradient">Buy Now</a></td>
                            <td><a href="cart.html" class="btn btn-gradient">Buy Now</a></td>
                            <td><a href="cart.html" class="btn btn-gradient">Buy Now</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>




@endsection
