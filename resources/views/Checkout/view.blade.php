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
<li class="breadcrumb-item"><a href="{{ route ('home')}}">Home</a></li>
<li class="breadcrumb-item active" aria-current="page">Checkout</li>
</ol>
</nav>
</div>
</div>
<div class="col-sm-12 offset-lg-3 col-lg-3">
<div class="header-page-image">
<img src="assets/images/about-us-shape.png" alt="shape">
</div>
</div>
</div>
</div>

@endsection

@section('content')

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
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
                                            <input type="email" name="email" class="form-control" required placeholder="Email Address*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                            </div>
                                            <input type="text" name="phone" class="form-control" required placeholder="Phone Number*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-check mb-20">
                                        <input type="checkbox" class="form-check-input" id="check1">
                                        <label class="form-check-label" for="check1">Get alert of product updates & offers</label>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-user"></i></span>
                                            </div>
                                            <input type="text" name="first_name" class="form-control" required placeholder="First Name*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-user"></i></span>
                                            </div>
                                            <input type="text" name="last_name" class="form-control" required placeholder="Last Name*" />
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
                                                <option value="1">Mali</option>
                                                <option value="2">USA</option>
                                                <option value="3">UK</option>
                                                <option value="4">Germany</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="company_name" class="form-control" placeholder="Company Name" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="address" class="form-control" required placeholder="Address*" />
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
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="state" class="form-control" required placeholder="State / Country*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-lg-6">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <input type="text" name="postcode" class="form-control" required placeholder="Postcode / Zip*" />
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-20">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="flaticon-envelope"></i></span>
                                            </div>
                                            <textarea name="order_notes" class="form-control" rows="5" placeholder="Order Notes*"></textarea>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        </form>
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
                            @foreach($cart as $domain)
                                <div class="cart-total-item">
                                    <h4>{{ $domain['name'] . '.' . $domain['extension'] }} <strong>Transfer</strong></h4>
                                    <p>{{ $domain['price'] }} €</p>
                                </div>
                            @endforeach
                            <div class="cart-total-item">
                                <h4 class="checkout-total-title">Total</h4>
                                <p class="checkout-total-title">{{ array_sum(array_column($cart, 'price')) }} €</p>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-payment-area default-box-shadow">
                        <div class="sub-section-title mb-20">
                            <h3>What's Payment Method</h3>
                        </div>
                        <div class="checkout-form">
                            <form>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-check mb-10">
                                            <input type="checkbox" class="form-check-input" id="check2">
                                            <label class="form-check-label" for="check2">Bank Transfer</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-check mb-10">
                                            <input type="checkbox" class="form-check-input" id="check3">
                                            <label class="form-check-label" for="check3">Paypal</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-check mb-20">
                                            <input type="checkbox" class="form-check-input" id="check4">
                                            <label class="form-check-label" for="check4">Orange Money</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <h3 class="cart-details-title mb-20">Card Details</h3>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="card_name" class="form-control" required placeholder="Name On The Card*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="card_number" class="form-control" required placeholder="Card Number*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="card_expiry_date" class="form-control" required placeholder="Expire Date*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-lg-6">
                                        <div class="form-group mb-20">
                                            <div class="input-group">
                                                <input type="text" name="card_cvn" class="form-control" required placeholder="CVN*" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <button class="btn btn-gradient full-width" type="submit">
                                            Make Payment
                                        </button>
                                    </div>
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
