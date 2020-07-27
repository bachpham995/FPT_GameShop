

@if ($newCart != null)
@foreach ($newCart->game as $game)
<div class="product product-widget">
    <div class="product-thumb">
        <img src="./img/thumb-product01.jpg" alt="">
    </div>
    <div class="product-body">
        <h3 class="product-price">{{$game['price']}}<span class="qty">{{$game['quanty']}}</span></h3>
        <h2 class="product-name"><a href="#">{{$game['gameInfor']->NAME}}</a></h2>
    </div>
    
    <button class="cancel-btn">
        <i class="fa fa-trash" data-id="{{$game['gameInfor']->ID}}"></i>
    </button>
</div>
@endforeach
@endif