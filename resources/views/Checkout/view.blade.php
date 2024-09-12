@extends('layouts.master')

@section('title')
    Checkout
@endsection

@section('beforecontent')
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-lg-6">
                <div class="header-page-content text-center text-lg-start">
                    <h1>Checkout</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-sm-12 offset-lg-3 col-lg-3">
                <div class="header-page-image">
                    <img src="{{ asset('assets/images/about-us-shape.png') }}" alt="shape">
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="checkout-section pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-6 pb-30">
                    <div class="checkout-item">
                        <div class="sub-section-title">
                            <h3>Billing Details</h3>
                        </div>
                        <div class="checkout-form">
                            <form action="{{ route('checkout.process') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                                </div>
                                                <input type="email" name="email" class="form-control" required
                                                    placeholder="Email Address*" value="bagayokom2003@gmail.com"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                                </div>
                                                <input type="text" name="phone" class="form-control" required
                                                    placeholder="Phone Number*" value="78777800" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                </div>
                                                <input type="text" name="first_name" class="form-control" required
                                                    placeholder="First Name*" value="Mariam" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                </div>
                                                <input type="text" name="last_name" class="form-control" required
                                                    placeholder="Last Name*" value="Bagayoko"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                </div>
                                                <select name="country" class="form-control">
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="company_name" class="form-control"
                                                    placeholder="Company Name" value="Ibraci" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="address" class="form-control" required
                                                    placeholder="Address*" value="senon" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="flaticon-user"></i></span>
                                                </div>
                                                <select name="city" class="form-control">
                                                    <option value="1">Bamako</option>
                                                    <option value="2">New York</option>
                                                    <option value="3">Florida</option>
                                                    <option value="4">Miami</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-lg-6 pb-30">
                    <div class="checkout-item">
                        <div class="sub-section-title">
                            <h3>Your Orders</h3>
                        </div>
                        <div class="checkout-details mb-30">
                            <div class="cart-total-box">
                                @foreach ($cart as $domain)
                                    <div class="cart-total-item">
                                        <h4>{{ $domain['name'] . '.' . $domain['extension'] }} <strong>Transfer</strong>
                                        </h4>
                                        <p>{{ $domain['price'] * $domain['duration'] }} FCFA</p>
                                    </div>
                                @endforeach
                                <div class="cart-total-item">
                                    <h4 class="checkout-total-title">Total</h4>
                                    <p class="checkout-total-title">
                                        {{ array_sum(array_map(fn($item) => $item['price'] * $item['duration'], $cart)) }}
                                        FCFA
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Le reste de votre code pour la section de paiement -->
                    </div>


                    <div class="checkout-payment-area default-box-shadow">
                        <div class="sub-section-title mb-20">
                            <h3>What's Payment Method</h3>
                        </div>
                        <div class="checkout-form">

                            <div class="col-sm-12">
                                <div class="form-check mb-20">
                                    <input type="radio" class="form-check-input" id="payment-method-orange"
                                        name="payment_method" value="orange_money" required>
                                    <label class="form-check-label" for="payment-method-orange">Orange Money</label>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <button class="btn btn-gradient full-width" type="submit">
                                    Make Payment
                                </button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
