<div class="order-summary clearfix">
    <div class="section-title">
        <h3 class="title">Order Review</h3>
    </div>
    <div>
        <div >
            <table class="shopping-cart-table table">
                <thead>
                    <tr>
                        <th>IMG</th>
                        <th class="text-center">GAME NAME</th>
                        <th class="text-center">Price   </th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Total</th>
                        <th class="text-right"></th>
                    </tr>
                </thead>
                <tbody>
                    <div>
                        @if (Session::has('Cart') != null)
                        @foreach (Session::get('Cart')->game as $game)
                        <tr>
                            <td class="thumb"><img src="{{$game['img']}}" alt=""></td>
                            <td class="text-center">{{$game['gameInfor']->NAME}}</td>
                            <td class="price text-center"><strong>${{$game['gameInfor']->getShortSalePrice()}}</strong><br><del class="font-weak"><small>${{$game['gameInfor']->getShortPrice()}}</small></del></td>

                            <td class="qty text-center">
                                <button><a class="cart_quantity_up" href=''> + </a>
                                    <input class="input" type="text" value="{{$game['quanty']}}">
                                <button><a class="cart_quantity_down" href=''> - </a></button>
                            </td>
                            <td class="total text-center"><strong class="primary-color">{{$game['price']}}</strong></td>
                            <td class="text-right">
                               <i class="fa fa-close" onclick="DeleteItemListCart({{$game['gameInfor']->ID}})" ></i>
                            </td>
                        </tr>
                    @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <th class="empty" colspan="3"></th>
                        <th>TOTAL</th>
                        @if(Session::has('Cart') != null)
                        <th colspan="2" class="sub-total">{{ Session::get('Cart')->totalPrice }}</th>
                        @else
                        <th colspan="2" class="sub-total">0.0</th>
                        @endif
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <div class="pull-right">
        <a href="{{ url('/Checkout') }}" class="primary-btn">Checkout<i
                class="fa fa-arrow-circle-right"></i></a>
    </div>
</div>
