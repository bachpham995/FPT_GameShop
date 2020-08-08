{{-- Notification  --}}
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
<!-- Default theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
<!-- Semantic UI theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
<!-- Bootstrap theme -->
<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
<!-- header -->
<div id="header">
    <div class="container">
        <div class="pull-left">
            <!-- Logo -->
            <div class="header-logo">
                <a class="logo" href="{{ url('/index') }}">
                    <img src="{{ asset('/img/logo.png') }}" alt="">
                </a>
            </div>
            <!-- /Logo -->

            <!-- Search -->
            <div class="header-search">
                <form>
                    <input class="input search-input" type="text" placeholder="Enter your keyword">
                    <select class="input search-categories">
                        <option value="0">All Categories</option>
                        <option value="1">Action</option>
                        <option value="2">Adventure</option>
                        <option value="3">Indie</option>
                        <option value="4">RPG</option>
                        <option value="5">Shooter</option>
                        <option value="6">Simulation</option>
                        <option value="7">Sport & Racing</option>
                        <option value="8">Strategy</option>
                    </select>
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                </form>
            </div>
            <!-- /Search -->
        </div>
        <div class="pull-right">
            <ul class="header-btns">
                <!-- Account -->
                <li class="header-account dropdown default-dropdown">
                    <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa fa-user-o"></i>
                        </div>
                        @if((Session::get('user')) != null)
                            <strong class="custom-name text-uppercase">{{ Session::get('user')->LNAME." ".Session::get('user')->FNAME }} <i class="fa fa-caret-down"></i></strong>
                        @else
                            <strong class="custom-name text-uppercase">Login/Join <i class="fa fa-caret-down"></i></strong>
                        @endif
                    </div>
                        @if((Session::get('user')) != null)
                            <ul class="custom-menu">
                                <li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                                <li><a href="#"><i class="fa fa-exchange"></i></a></li>
                                <li><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
                            </ul>
                        @else
                            <ul class="custom-menu">
                                <li><a href="{{ url('/login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
                                <li><a href="{{ url('/register') }}"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                            </ul>
                        @endif
                </li>
                <!-- /Account -->

                <!-- Cart -->
                <li class="header-cart dropdown default-dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <div hidden>{{ $ss = Session::get('Cart') }}</div>
                        <div class="header-btns-icon">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="clearfix" id="total-quanty"><span class="qty"
                                    id="total-quanty-show">{{ $ss ? $ss->totalQuanty : '0' }}</span></div>
                        </div>
                        <strong class="text-uppercase">My Cart:</strong>
                        <br>
                        <span id="total-price-show">{{ $ss ? $ss->totalPrice."$" : '0.0$' }}</span>

                    </a>
                    <div class="custom-menu cust-dropdown">
                        <div id="shopping-cart">
                            <div class="shopping-cart-list">
                                <div id="change-item-cart">
                                    @if(Session::has('Cart') != null and Session::get('Cart')->game != null)
                                        @foreach(Session::get('Cart')->game as $game)
                                            <div class="product product-widget">
                                                <div class="product-thumb">
                                                    <img src="{{ $game['img'] }}" alt="">
                                                </div>
                                                <a href=""  >
                                                    <div class="product-body cust-hover">
                                                        <div>
                                                            <b class="product-name">
                                                                {{ $game['gameInfor']->NAME }}
                                                            </b>
                                                        </div>
                                                        <div class="product-price">
                                                            <b>{{ $game['gameInfor']->PRICE . ' $' }}</b>

                                                            <span class="qty"> x {{ $game['quanty'] }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <input hidden id="total-quanty-cart" type="number"
                                                    value="{{ Session::get('Cart')->totalQuanty }}">
                                                <input hidden id="total-price-cart" type="number"
                                                    value="{{ Session::get('Cart')->totalPrice }}">
                                                <button class="cancel-btn">
                                                    {{--onclick="deleteCartItem({{ $game['gameInfor']->ID }})"> --}}
                                                    <i class="fa fa-trash" data-id="{{ $game['gameInfor']->ID }}"></i>
                                                </button>

                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                            <div class="shopping-cart-btns text-center">
                                <button class="main-btn"><a href="{{ url('/ListCart') }}">View Cart</a></button>
                                <a class="primary-btn" href="{{ url('/Checkout') }}">Checkout<i
                                        class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- /Cart -->

                <!-- Mobile nav toggle-->
                <li class="nav-toggle">
                    <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                </li>
                <!-- / Mobile nav toggle -->
            </ul>
        </div>
    </div>
    <!-- header -->
</div>
<!-- container -->
<script>
    $("#change-item-cart").on('click', '.cancel-btn i', function() {
        $.ajax({
            url: '/DeleteItemCart/' + $(this).data("id"),
            type: 'GET',
        }).done(function(response) {
            RenderCart(response)
            alertify.success('Success Delete');
        });
    });

    function RenderCart(response) {
        $("#change-item-cart").empty();
        $("#change-item-cart").html(response);
        $("#cart-view").load(" #cart-view");
        $("#checkout-button").load(" #checkout-button");
        if ((($("#total-quanty-cart").val()) && ($("#total-price-cart").val())) != null) {
            $("#total-quanty-show").text($("#total-quanty-cart").val());
            $("#total-price-show").text($("#total-price-cart").val());
        } else {
            $("#total-quanty-show").text("0");
            $("#total-price-show").text("0.0$");
        }
    }

</script>
</header>
