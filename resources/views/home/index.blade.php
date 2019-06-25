<?php?>
@extends('Shared._layout')
@section('title', 'Home Page')
@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="images/banner1.jpg" alt="Our maori gifts" class="img-responsive" />
                <div class="carousel-caption" role="option">
                    <p>
                    <h2>Get ideal souvenirs for that special someone from </h2><h1><strong> our Maori gifts</strong></h1>
                    <a class="btn btn-default" href="{{url('/procat/maori gifts')}}">
                        Shop Now
                    </a>
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="images/banner12.jpg" alt="T-shirts for everyone" class="img-responsive" />
                <div class="carousel-caption" role="option">
                    <p>
                    <h2>Great for layering under your sweater are amazing </h2><h1><strong>T-shirts for everyone</strong></h1>
                    <a class="btn btn-default" href="{{url('/procat/t-shirts')}}">
                        Shop Now
                    </a>
                    </p>
                </div>
            </div>
            <div class="item">
                <img src="images/banner13.jpg" alt="Affordable Mugs" class="img-responsive" />
                <div class="carousel-caption" role="option">
                    <p>
                    <h2>Enjoy your favourite cuppa with </h2><h1><strong>affordable Mugs</strong></h1>
                    <a class="btn btn-default" href="{{url('/procat/mugs')}}">
                        Shop Now
                    </a>
                    </p>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <a href="{{url('/procat/maori gifts')}}"><img class="img-responsive" src="images/home_images/maori11.jpg" alt=""></a>
            <div>
                <h3 style="text-align:center; font-weight: bold;">
                    <a href="{{url('/procat/maori gifts')}}">Maori Gifts</a>
                </h3>
            </div>
        </div>
        <div class="col-md-4">
            <a href="{{url('/procat/t-shirts')}}"><img class="img-responsive" src="images/home_images/t-shirt2.jpg" alt=""></a>
            <div>
                <h3 style="text-align:center; font-weight: bold;">
                    <a href="{{url('/procat/t-shirts')}}">T-shirts</a>
                </h3>
            </div>
        </div>
        <div class="col-md-4">
            <a href="{{url('/procat/mugs')}}"><img class="img-responsive" src="images/home_images/mug5.jpg" alt=""></a>
            <div>
                <h3 style="text-align:center; font-weight: bold;">
                    <a href="{{url('/procat/mugs')}}">Mugs</a>
                </h3>
            </div>
        </div>
        <div>
            <div class="container">
                <a href="{{url('/products')}}"><img class="img-responsive" src="images/banner10.jpg" alt=""></a>
            </div>
            <div>
                <h3 style="text-align:center; font-weight: bold;">
                    <a href="{{url('/products')}}">All Categories</a>
                </h3>
                <br>
            </div>
        </div>
    </div>

@endsection
