<div class="store-filter clearfix">
    <div class="pull-left">
        <div class="sort-filter">

        </div>
    </div>
    <div class="pull-right">
        <div class="page-filter">
            <span class="text-uppercase">Show:</span>
            <select name="page-select" class="input" onchange="page({{$products}},0)">
                @for ($i = 0; $i < $pageAmount; $i++)
                    <option @if($i == $page) selected @endif  value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
    </div>
</div>
<hr>
<div>
    <div id="pageAmount"hidden>{{$pageAmount}}</div>
    @if($products->count()>0)
        @foreach($products[$page] as $product)
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
            <select name="page-select" class="input" onchange="page({{$products}},1)">
                @for ($i = 0; $i < $pageAmount; $i++)
                    <option @if($i == $page) selected @endif  value="{{$i}}">{{$i}}</option>
                @endfor
            </select>
        </div>
    </div>
</div>
