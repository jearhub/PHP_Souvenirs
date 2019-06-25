<?php?>
        <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')- Quality Souvenirs</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('css/site.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('css/myStyle.css')}}" type="text/css"/>
    <link rel="stylesheet" href="{{url('css/app.css')}}" type="text/css"/>
</head>
<body>
<div style="font-size:15px; background-color:#333; color: white;" class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <a href="{{url('/index')}}" class="navbar-brand"><img style="max-height:28px" src="../images/home_images/kiwi_maori_logo_top2.png" alt="Quality Souvenirs"/></a>
            <ul class="nav navbar-nav">
                <li><a href="{{url('/index')}}">Home</a></li>
                <li><a href="{{url('/products')}}">Products</a></li>
                <li><a href="{{url('/about')}}">About</a></li>
                <li><a href="{{url('/contact')}}">Contact</a></li>
                @if(Auth::check() && Auth::user()->isAdmin())
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Admin<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('/souvenirs')}}">Souvenirs Management</a></li>
                            <li><a href="{{url('/suppliers')}}">Suppliers Management</a></li>
                            <li><a href="{{url('/categories')}}">Categories Management</a></li>
                            <li><a href="{{url('/users')}}">Accounts Management</a></li>
                            <li><a href="{{url('/orders')}}">Orders Management</a></li>
                        </ul>
                    </li>
                @else
                @endif
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('product.shoppingCart')}}">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> Shopping Cart
                        <span class="badge">{{Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> User Management<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        @if(Auth::check())
                            <li><a href="{{route('users.profile')}}">User Profile</a> </li>
                            <li role="seperator" class="divider"></li>
                            <li><a href="{{route('users.logout')}}">Logout</a></li>
                        @else
                            <li><a href="{{route('users.signup')}}">Sign up</a></li>
                            <li><a href="{{route('users.signin')}}">Sign in</a></li>
                        @endif

                </li>
            </ul>
    </div>
</div>
<div class="container body-content">
    @yield('content')
    <hr />
    <!-- footer start -->
    <div class="container_wide">
        <footer class="footer">
                <div class="footer-left">
                    <img src="../images/home_images/quality_souvenirs_logo2.png" width="180" alt="Quality Bags" />
                    <br><br><br>
                    <p class="footer-copyright">&copy; 2019 - Quality Souvenirs</p>
                </div>

                <div class="footer-center">

                    <div>
                        <i class="fa fa-map-marker"></i>
                        <p style="color:#8f9296"><span>Building 183, 139 Carrington Road </span>Mt Albert, Auckland, New Zealand</p>
                    </div>

                    <div>
                        <i class="fa fa-phone"></i>
                        <p style="color:#8f9296">+64 0800 10 95 10</p>
                    </div>

                    <div>
                        <i class="fa fa-envelope"></i>
                        <p><a href="mailto:jearhub@gmail.com">support@qualitysouvenirs.co.nz</a></p>
                    </div>

                </div>

                <div class="footer-right">
                    <div class="footer-icons">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-tumblr"></i></a>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                    </div>
                    <br>
                    <h5 style="color:#8f9296"><b>Designed by:</b></h5>
                    <h2 style="font-family:Mistral; color:#8f9296">Patrick Fred | 1472802</h2>
                </div>
        </footer>  <!-- footer end-->
    </div>
</div>
<script src="{{url('lib/jquery/dist/jquery.js')}}"></script>
<script src="{{url('lib/bootstrap/dist/js/bootstrap.js')}}"></script>
<script src="{{url('js/site.js')}}"></script>
@yield('scripts')
</body>
</html>
