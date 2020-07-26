
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <h1>Welcome to shop</h1>
    <a href="{{url("login")}}">Login</a>
</body>
</html>
@extends('layout.layout')
@section('title', 'Homepage')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section-title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">Deals Of The Day</h2>
                    <div class="pull-right">
                        <div class="product-slick-dots-1 custom-dots"></div>
                    </div>
                </div>
            </div>
            <!-- /section-title -->

            <!-- banner -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="banner banner-2">
                    <img src="/img/banner14.jpg" alt="">
                    <div class="banner-caption">
                        <h2 class="white-color">NEW<br>COLLECTION</h2>
                        <button class="primary-btn">Shop Now</button>
                    </div>
                </div>
            </div>
            <!-- /banner -->

            <!-- Product Slick -->

            <div class="col-md-9 col-sm-6 col-xs-6">
                <div class="row">
                    
                
                    <div id="product-slick-1" class="product-slick">
                        @foreach ($game as $game)
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span class="sale">{{$game->SALE}}%</>
                                </div>
                                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
                                <img src="/img/product0{{ $loop->index }}.jpg" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">{{$game->PRICE}}$</h3>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                                <h2 class="product-name"><a href="#">{{$game->NAME}}</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                <a class="primary-btn add-to-cart" href="{{url('Addcart/'.$game->ID)}}"><i class="fa fa-shopping-cart"></i>Add to Cart</a> 
                                </div>
                            </div>
                        </div>
                        @endforeach 
                        <!-- /Product Single -->
                    </div>
                   
                </div>
            </div>
            <!-- /Product Slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
@endsection

