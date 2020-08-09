@extends('layout.layout')
@section('title', 'Products')
@section('page-name','Products')
@section('content')

<!-- MAIN -->
<div id="aside" class="col-md-3">
    <div class="aside">
        <h3 class="aside-title">FILTER</h3>
        <ul class="size-option">
            <div class="text-center">
                <button class="primary-btn" onclick="filter()"><i class="fa fa-filter"></i></button>
            <a class="primary-btn secondary-btn" href="{{url('products')}}"><i class="fa fa-refresh"></i></a>
            </div>

            <hr>
            <li>NAME</li>
            <br>
            <input id="name-search"  class="input name-filter text-left" type="text">
            <hr>
            <li>PRICE</li>
            <br>
            MIN:<input onchange="validatePrice('min');" id="min-filter"  class="input price-filter text-right" type="number" value="0">
            MAX:<input onchange="validatePrice('max')"id="max-filter"  class="input price-filter text-right" type="number" value="999">
            <hr>
            <li>CATEGORY</li>
            <select  id="category-filter" class="input dropdown-filter" size="4" multiple>
                @foreach (App\category::all() as $ctgr)
                    <option value="{{$ctgr->ID}}">{{$ctgr->NAME}}</option>
                @endforeach
            </select>
            <hr>
            <li>PUBLISHER</li>
            <select  id="publisher-filter" class="input dropdown-filter" size="4" multiple>
                @foreach (App\publisher::all() as $pbl)
                    <option value="{{$pbl->ID}}">{{$pbl->NAME}}</option>
                @endforeach
            </select>
            <hr>
            <li>PRODUCER</li>
            <select  id="producer-filter" class="input dropdown-filter" size="4" multiple>
                @foreach (App\producer::all() as $prdc)
                    <option value="{{$prdc->ID}}">{{$prdc->NAME}}</option>
                @endforeach
            </select>
        </ul>
    </div>

    <!-- aside widget -->
</div>
<div id="main" class="col-md-9">
    <div class="store-filter clearfix">
        <div class="pull-right">
            <div class="page-filter">
                <span class="text-uppercase">Show:</span>
                <select name="page-select" class="input" onchange="page({{$products}}, 0)">
                    @for ($i = 0; $i < $products->count(); $i++)
                        <option  value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>
    <hr>
    <div id="product-grid">
        @if ($products->count()>0)
            @foreach($products[0] as $product)
                <div class="col-md-4 col-sm-6 col-xs-6">
                    <div class="product product-single product-single-cust" >
                        <div class="product-thumb product-thumb-cust">
                            <div class="product-label">
                                @if (\Carbon\Carbon::parse(time())->diffInDays(\Carbon\Carbon::parse($product->created_at), false) < 30  )
                                    <span>New</span>
                                @endif
                                @if ($product->SALE > 0)
                                    <span class="sale">{{$product->getSale()}}</span>
                                @endif

                            </div>
                            <a href="{{url('productDetail/'.$product->ID)}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> View</a>
                            <img src="{{$product->getIntroduceImageDirectory()}}" alt="">
                        </div>

                        <div class="product-body product-body-cust">
                            <div class="product-rating">
                                @for($i = 1;$i <= $product->Rating();$i++)
                                    <i class="fa fa-star"></i>
                                @endfor
                                @for($i = 1;$i <= 5-$product->Rating();$i++)
                                    <i class="fa fa-star-o empty"></i>
                                @endfor
                            </div>
                            <div class="clearfix"></div>
                            <h2 class="product-name" title="{{$product->NAME}}">
                                <a href="#">
                                    @if (Str::length($product->NAME) >= 25)
                                        {{Str::substr($product->NAME, 0, 25).".." }}
                                    @else
                                        {{$product->NAME}}
                                    @endif
                                </a></h2>
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
            @endforeach
        @else
            <div><li>No result found.</li></div>
        @endif

    </div>
    <div class="clearfix"></div>
    <hr>
    <div class="store-filter clearfix">
        <div class="pull-right">
            <div class="page-filter">
                <span class="text-uppercase">Show:</span>
                <select name="page-select" class="input" onchange="page({{$products}}, 1)">
                    @for ($i = 0; $i < $products->count(); $i++)
                        <option  value="{{$i}}">{{$i}}</option>
                    @endfor
                </select>
            </div>
        </div>
    </div>
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

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>



<script>

    function validatePrice(type){
        $minValue = parseInt(document.getElementById("min-filter").value);
        $maxValue = parseInt(document.getElementById("max-filter").value);
        if(type=="min"){
            if($minValue > $maxValue){
                document.getElementById("min-filter").value = $maxValue-1;
            }
            if($minValue < 0){
                document.getElementById("min-filter").value = 0;
            }
        }else if(type=="max"){
            if($maxValue < $minValue){
                document.getElementById("max-filter").value = $minValue+1;
            }
            if($maxValue < 0){
                document.getElementById("max-filter").value = 999;
            }
        }
    }

    function page(products, type){
        var indexs = document.getElementsByName("page-select");
        if(type != null && (type == 1 || type == 0)){
            var index = indexs[type].value;
            $productsID = new Array();
            for (i = 0; i < products.length; i++) {
                for (j = 0; j < products[i].length; j++) {
                    $productsID.push(products[i][j]['ID']);
                }
            }

            $selectPageProduct = {
                isFilter : "false",
                page : index,
                ids : $productsID
            }
            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                url : '/filterProduct',
                type : 'GET',
                data : $selectPageProduct
            }).done(function(response){
                $("#main").empty();
                $("#main").html(response);
                alertify.success('Page ' + index);
            });
        }
    }

    function getFilterValues(id){
        var select = document.getElementById(id),
        options = select.getElementsByTagName('option'),
        values  = [];

        for (var i=options.length; i--;) {
            if (options[i].selected){
                values.push(options[i].value);
            }
        }
        return values
    }

    function resetFilterValues(id){
        var select = document.getElementById(id),
        options = select.getElementsByTagName('option'),
        values  = [];

        for (var i=options.length; i--;) {
            options[i].selected = false;
        }
        return values
    }

    function filter(){
        var nameValue = document.getElementById("name-search").value
        var minValue = parseInt(document.getElementById("min-filter").value);
        var maxValue = parseInt(document.getElementById("max-filter").value);

        categoryValues = getFilterValues('category-filter');
        publisherValues = getFilterValues('publisher-filter');
        producerValues = getFilterValues('producer-filter');



        console.log(categoryValues);

        var filter = {isFilter : "true",
                    min : minValue,
                    max : maxValue,
                    name : nameValue,
                    category : categoryValues,
                    publisher : publisherValues,
                    producer : producerValues
                }
        $.ajax({
            url : '/filterProduct',
            type : 'GET',

            data : filter
        }).done(function(response){
            $("#main").empty();
            $("#main").html(response);
            alertify.success('Success filter');
        });
    }

    function resetFilter(){
        // document.getElementById("name-search").value = null;
        // document.getElementById("min-filter").value = 0;
        // document.getElementById("max-filter").value = 999;
        // resetFilterValues("category-filter");
        // resetFilterValues('publisher-filter');
        // resetFilterValues('producer-filter');
        // filter()
    }

    function AddCart(id){
        $.ajax({
            url:'AddCart/'+id,
            type: 'GET',
            data:{ qty : 1}
        }).done(function(response){
            RenderCart(response)
            alertify.success('Success Add');
        });
    }
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
