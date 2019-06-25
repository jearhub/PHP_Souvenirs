<?php?>
@extends('Shared._layout')
@section('title', 'Orders Index')
@section('content')
    <h2>Orders</h2>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">${{$item['price']}}</span>
                                    {{$order['user_id']}} | {{$item['item']['name']}} | {{$item['qty']}} Units
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
