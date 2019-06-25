<?php?>
@extends('Shared._layout')
@section('title', 'Products Index')
@section('content')
    <h2>Products</h2>
    <div class="col-md-9 col-lg-9 pull-right">
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="#charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$product->imagePath}}" alt="..." class = "img-responsive">
                        <div class="caption">
                            <h3>{{$product->name}}</h3>
                            <p class="description">{{$product->description}}</p>
                            <div class="clearfix">
                                <div class="pull-left price">${{$product->price}}</div>
                                <a href="{{route('product.addToCart', ['id'=>$product->id])
                                }}" class="btn btn-primary pull-right" role="button">Add to Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
        {{$products->links()}}
    </div>
    <form class="form-inline my-2 my-lg-0" action="/search" method="get">
        <input class="form-control" type="search" name="search" placeholder="Search">
        <span class="input-group-prepend">
                <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
            </span>
    </form>
    <br>
    <ul class="list-group pull-left" id="categories" style="width: 20%">
        <li class="list-group-item"><a href="{{url('/products')}}">All Categories</a></li>
        <li class="list-group-item"><a href="{{url('/procat/maori gifts')}}">Maori Gifts</a></li>
        <li class="list-group-item"><a href="{{url('/procat/t-shirts')}}">T-shirts</a></li>
        <li class="list-group-item"><a href="{{url('/procat/mugs')}}">Mugs</a></li>
    </ul>
@endsection

