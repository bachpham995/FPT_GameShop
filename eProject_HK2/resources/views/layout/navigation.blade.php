<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav show-on-click">
                <span class="category-header">Categories <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    @foreach (App\category::all()->take(5) as $cate)
                        <li><a href="#">{{$cate->NAME}}</a></li>
                    @endforeach
                    <li><a href="#">VIEW ALL</a></li>
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="{{ url('/index') }}">Home</a></li>
                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Shop <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="./img/banner08.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Accessories</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Recommend</h3></li>
                                        <li><a href="#">New realeses</a></li>
                                        <li><a href="#">Best seller</a></li>
                                        <li><a href="#">On sale now</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="./img/banner07.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Men’s</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Platform</h3>
                                        </li>
                                        @foreach (App\os::all()->take(5) as $os)
                                            <li><a href="#">{{$os->NAME}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="./img/banner09.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Bags</h3>
                                            </div>
                                        </a>
                                    </div>
                                    <hr>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Publisher</h3>
                                        </li>
                                        @foreach (App\publisher::all()->take(5) as $publisher)
                                            <li><a href="#">{{$publisher->NAME}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <div class="hidden-sm hidden-xs">
                                        <a class="banner banner-1" href="#">
                                            <img src="./img/banner06.jpg" alt="">
                                            <div class="banner-caption text-center">
                                                <h3 class="white-color text-uppercase">Women’s</h3>
                                            </div>
                                        </a>
                                        <hr>
                                    </div>
                                    <ul class="list-links">
                                        <li>
                                            <h3 class="list-links-title">Producer</h3>
                                        </li>
                                        @foreach (App\producer::all()->take(5) as $producer)
                                            <li><a href="#">{{$producer->NAME}}</a></li>
                                        @endforeach

                                        {{-- <li><a href="#">Adventure</a></li>
                                        <li><a href="#">Indie</a></li>
                                        <li><a href="#">RPG</a></li>
                                        <li><a href="#">Shooter</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <h3 class="white-color text-uppercase"><a href="{{ url('/products') }}">VIEW ALL</a></h3>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown default-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Support <i class="fa fa-caret-down"></i></a>
                        <ul class="custom-menu">
                            <li><a href="#">Game technical issues</a></li>
                            <li><a href="#">Order and payments</a></li>
                            <li><a href="#">Account and website</a></li>
                            <li><a href="#">Downloads</a></li>
                        </ul>
                    </li>
                    <li><a href="{{url('/About')}}">About</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
