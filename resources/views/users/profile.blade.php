<?php?>
@extends('Shared._header')
@section('content')
    <h2>User Profile</h2>
    <hr />
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h4>My orders</h4>
            @foreach($orders as $order)
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        @foreach($order->cart->items as $item)
                            <li class="list-group-item">
                                <span class="badge">${{$item['price']}}</span>
                                {{$item['item']['name']}} | {{$item['qty']}} Units
                            </li>
                        @endforeach
                    </ul>
                </div>
            <div class="panel-footer">
                <strong>Total Price: ${{$order->cart->totalPrice}}</strong>
            </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection