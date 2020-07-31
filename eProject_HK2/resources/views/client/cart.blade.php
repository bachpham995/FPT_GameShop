@if(Session::has('Cart') != null)
@foreach(Session::get('Cart')->game as
    $game)
    <div class="product product-widget">
        <div class="product-thumb">
            <img src="{{ $game['img'] }}" alt="">
        </div>
        <div class="product-body">
            <h3 class="product-price">{{ $game['price'] }}<span
                    class="qty">{{ $game['quanty'] }}</span></h3>
            <h2 class="product-name"><a href="#">{{ $game['gameInfor']->NAME }}</a>
            </h2>
        </div>
        <input hidden id="total-quanty-cart" type="number"
            value="{{ Session::get('Cart')->totalQuanty }}">
        <input hidden id="total-price-cart" type="number"
            value="{{ Session::get('Cart')->totalPrice }}">
        <button class="cancel-btn">
            <i class="fa fa-trash" data-id="{{ $game['gameInfor']->ID }}"></i>
        </button>
    </div>
@endforeach
@endif
