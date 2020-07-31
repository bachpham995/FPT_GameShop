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
                        <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                    </div>
                    <a href="#" class="text-uppercase">Login</a> / <a href="#" class="text-uppercase">Join</a>
                    <ul class="custom-menu">
                        <li hidden><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
                        <li hidden><a href="#"><i class="fa fa-heart-o"></i> My Wishlist</a></li>
                        <li hidden><a href="#"><i class="fa fa-exchange"></i> Compare</a></li>
                        <li hidden><a href="#"><i class="fa fa-check"></i> Checkout</a></li>
                        <li><a href="{{ url('/login') }}"><i class="fa fa-unlock-alt"></i> Login</a></li>
                        <li><a href="#"><i class="fa fa-user-plus"></i> Create An Account</a></li>
                    </ul>
                </li>
                <!-- /Account -->

                <!-- Cart -->
                <li class="header-cart dropdown default-dropdown" >
                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <div class="header-btns-icon">
                            <i class="fa fa-shopping-cart"></i>
                            <div id="id-number-cart">
                                @if(Session::has('Cart') != null)
                                <span class="qty" id="total-quanty-show">{{ Session::get('Cart')->totalQuanty }}</span>
                            @else
                                <span class="qty" id="total-quanty-show">0</span>
                            @endif
                            </div>
                        </div>
                        <strong class="text-uppercase">My Cart:</strong>
                        <br>
                        <div id="id-number-totalprice">
                            @if(Session::has('Cart') != null)
                            <span id="total-price-show">{{ Session::get('Cart')->totalPrice }}$</span>
                        @else
                            <span id="total-price-show">0.0$</span>
                        @endif
                        </div>
                    </a>
                    <div class="custom-menu">
                        <div id="shopping-cart">
                            <div class="shopping-cart-list">
                                <div id="change-item-cart">
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
                                </div>
                            </div>
                            <div class="shopping-cart-btns">
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
</header>
