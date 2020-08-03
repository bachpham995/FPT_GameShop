

@if (Session::has('Cart') != null)
@foreach(Session::get('Cart')->game as
    $game)
    <div class="product product-widget">
        <div class="product-thumb">
            <img src="{{ $game['img'] }}" alt="">
        </div>
        <div class="product-body">
            <div>
                <b href="#">
                    {{ $game['gameInfor']->NAME }}
                </b>
            </div>
            <div class="product-price">
                <b>{{ $game['gameInfor']->PRICE." $" }}</b>

                <span
                    class="qty"> x {{ $game['quanty'] }}
                </span>
            </div>
        </div>

        <input hidden id="total-quanty-cart" type="number"
            value="{{ Session::get('Cart')->totalQuanty }}">
        <input hidden id="total-price-cart" type="number"
            value="{{ Session::get('Cart')->totalPrice }}">
            <button class="cancel-btn"> {{--onclick="deleteCartItem({{ $game['gameInfor']->ID }})"> --}}
            <i class="fa fa-trash" data-id="{{ $game['gameInfor']->ID }}"></i>
        </button>

    </div>
    @endforeach
@endif
