@extends('layout.layout')
@section('title', 'Products')
@section('page-name','Products')
@section('content')

<!-- MAIN -->
<div id="aside" class="col-md-3">
    <!-- aside widget -->
    <div class="aside">
        <h3 class="aside-title">Filter by Price</h3>
        <div id="price-slider"></div>
    </div>
    <!-- aside widget -->
</div>

<div id="main" class="col-md-9">
    @foreach ($products as $product)
    <div class="col-md-4 col-sm-6 col-xs-6">
        <div class="product product-single product-single-cust" style="min-height: 252px">
            <div>
                <div class="product-thumb product-thumb-cust">
                    <div class="product-label">
                        <span>New</span>
                        <span class="sale">{{$product->getSale()}}</span>
                    </div>
                    <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> View</button>
                    <img height="320px" width="150px" src={{$product->getIntroduceImageDirectory()}} alt="">
                </div>

                <div class="product-body product-body-cust">
                    <div class="product-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o empty"></i>
                    </div>
                    <div class="clearfix"></div>
                    <h2 class="product-name"><a href="#">{{$product->NAME}}</a></h2>
                    @if ($product->SALE > 0)
                        <p  class="product-price product-price-cust">{{$product->getShortSalePrice()}}<del class="product-old-price"> {{$product->getShortPrice()}}</del></p>
                    @else
                        <p  class="product-price product-price-cust">{{$product->getShortSalePrice()}}</p>
                    @endif
                   {{-- <a onclick="AddCart({{$game->ID}})" href="javascript:" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a> --}}
                    <a onclick="AddCart({{$product->ID}})" href="javascript:" class="btn btn-sm primary-btn add-to-cart float-right">
                        <i class="fa fa-shopping-cart"></i> ADD TO CART</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    @endforeach

</div>
<!-- /MAIN -->
<!-- CSS -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<script>
    function AddCart(id){
        $.ajax({
            url:'AddCart/'+id,
            type: 'GET',
        }).done(function(response){
            RenderCart(response)
           alertify.success('Success Add');
        });
    }
    $("#change-item-cart").on('click', '.cancel-btn i', function (){
       $.ajax({
            url:'DeleteItemCart/'+$(this).data("id"),
            type: 'GET',
        }).done(function(response){
            RenderCart(response)
           alertify.success('Success Delete');
        });
    });
    function RenderCart(response){
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        if((($("#total-quanty-cart").val()) && ($("#total-price-cart").val())) != null){
            $("#total-quanty-show").text($("#total-quanty-cart").val());
            $("#total-price-show").text($("#total-price-cart").val());
        }else{
            $("#total-quanty-show").text("0");
            $("#total-price-show").text("0.0$");
        }
    }
</script>
@endsection
