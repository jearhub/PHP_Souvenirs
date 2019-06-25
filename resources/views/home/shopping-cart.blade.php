<?php?>
@extends('Shared._layout')
@section('title', 'Shopping Cart Index')
@section('content')
    <h2>Shopping Cart</h2>
    @if(Session::has('cart'))
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <ul class="list-group">
                @foreach($products as $product)
                    <li class="list-group-item">
                        <span class="badge">{{$product['qty']}}</span>
                        <strong>{{$product['item']['name']}}</strong>
                        <span class="label label-success">{{$product['price']}}</span>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">
                                Action <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                                <li><a href="{{route('product.removeOne', ['id'=>$product['item']['id']])}}">Remove 1</a></li>
                                <li><a href="{{route('product.removeAll', ['id'=>$product['item']['id']])}}">Remove all</a> </li>
                            </ul>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong>Total: {{$totalPrice}}</strong>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
        <!--   <a href="{{route('checkout')}}" type="button" class="btn btn-primary">Checkout</a>-->
         <a href="{{url('/cartcheckout')}}" type="button" class="btn btn-primary">Checkout</a>
        </div>
    </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h3 style="text-align: center">No items in Cart!</h3>
            </div>
        </div>
    @endif
@endsection