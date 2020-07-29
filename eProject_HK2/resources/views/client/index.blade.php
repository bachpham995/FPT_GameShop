<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/client/bootstrap.min.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/client/slick.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/client/slick-theme.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('css/client/nouislider.min.css') }}" />
    {{-- <link rel="stylesheet" href="{{ asset('css/client/font-awesome.min.css') }}"> --}}
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/client/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/client/login.css') }}" />
</head>
<body>
    <!-- HEADER -->
    @include('layout.header')
    <!-- /HEADER-->

    <!-- NAVIGATION -->
    @include('layout.navigation')
    <!-- /NAVIGATION-->

	<!-- HOME -->
	<div id="home">
		<!-- container -->
		<div class="container">
			<!-- home wrap -->
			<div class="home-wrap">
				<!-- home slick -->
				<div id="home-slick">
					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{asset('img/banner-home1.png')}}" alt="">
						<div class="banner-caption text-center banner-cust">
							<h1 class="white-color">The Last Of Us II</h1>
							<h3 class="white-color font-weak">Up to 50% Discount</h3>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1 ">
						<img src="{{asset('img/banner-home3.png')}}" alt="">
						<div class="banner-caption banner-cust">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->

					<!-- banner -->
					<div class="banner banner-1">
						<img src="{{asset('img/banner-home2.png')}}" alt="">
						<div class="banner-caption banner-cust">
							<h1 class="white-color">New Product <br><span>Collection</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
					<!-- /banner -->
				</div>
				<!-- /home slick -->
			</div>
			<!-- /home wrap -->
		</div>
		<!-- /container -->
	</div>
	<!-- /HOME -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="./img/banner-sesion1.png" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="./img/banner-sesion2.png" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<a class="banner banner-1" href="#">
						<img src="./img/banner-sesion3.png" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">New Games</h2>
						<div class="pull-right">
							<div class="product-slick-dots-1 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="{{ asset('img/banner-newproduct.png') }}" class="img-banner-cust" width="auto" alt="">
						<div class="banner-caption">
							<h2 class="dark-color">NEW<br>GAMES</h2>
							<button class="primary-btn">Buy Now</button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-1" class="product-slick">
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here aaaaaaaaaaaaaaaaaaaaaaaaaaaaa</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{asset('img/product-1.jpg')}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
											<p  class="product-price product-price-cust">$32.50 <del class="product-old-price">$45.00</del></p>
											<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
	<!-- section -->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-8">
					<div class="banner banner-1">
						<img src="./img/banner13.jpg" alt="">
						<div class="banner-caption text-center">
							<h1 class="primary-color">HOT DEAL<br><span class="white-color font-weak">Up to 50% OFF</span></h1>
							<button class="primary-btn">Shop Now</button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="./img/banner11.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="./img/banner12.jpg" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

    <!-- FOOTER -->
    @include('layout.footer')
    <!-- /FOOTER-->
    <!-- -->

    <script src="{{ asset('js/client/jquery.min.js') }}"></script>
	<script src="{{ asset('js/client/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/client/slick.min.js') }}"></script>
	<script src="{{ asset('js/client/nouislider.min.js') }}"></script>
	<script src="{{ asset('js/client/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/client/main.js') }}"></script>

    <!-- page script -->
    @yield('script-section')
</body>
</html>
