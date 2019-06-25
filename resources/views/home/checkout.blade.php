<?php?>
@extends('Shared._layout')
@section('title', 'Shopping Cart Index')
@section('content')
<h2>Checkout</h2>
<div class="row">
    <div class="col-sm-6 col-md-4 col-md-offset-3 col-sm-offset-3">
        <h4><strong>Your Total: ${{$total}}</strong></h4>
        <hr />
        <div id="charge-error" class="alert alert-danger {{ !Session::has('error') ? 'hidden' : ''}}">
            {{Session::get('error')}}
        </div>
        <form action="{{route('checkout')}}" method="post" id="checkout-form">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-name">Card Holder Name</label>
                        <input type="text" id="card-name" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-number">Credit Card Number</label>
                        <input type="text" id="card-number" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-expiry-month">Expiration Month</label>
                        <input type="text" id="card-expiry-month" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-expiry-year">Expiration Year</label>
                        <input type="text" id="card-expiry-year" class="form-control" required>
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label for="card-cvc">CVC</label>
                        <input type="text" id="card-cvc" class="form-control" required>
                    </div>
                </div>
            </div>
            {{csrf_field()}}
            <button type="submit" class="btn btn-primary">Buy now</button>
        </form>
    </div>
</div>
@endsection

@section('scripts')
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{URL::To('js/checkout.js')}}"></script>
@endsection