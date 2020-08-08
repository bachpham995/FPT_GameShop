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
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
	<!-- Default theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
	<!-- Semantic UI theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
	<!-- Bootstrap theme -->
	<link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
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

	<!-- section banner1-->
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

	<!-- section New & sale product-->
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
							@foreach ($newProduct as $item)
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span>New</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{$item->getIntroduceImageDirectory()}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">
												@if (Str::length($item->NAME) >= 25)
													{{Str::substr($item->NAME,0,25)."..."}}
												@else
													{{$item->NAME}}
												@endif
											</a></h2>
											<p  class="product-price product-price-cust">{{$item->getShortSalePrice()}}
												@if ($item->SALE != 0)
													<del class="product-old-price ml-1">{{$item->PRICE}}$</del>
												@endif
											</p>
											<a onclick="AddCart({{$item->ID}})" href="javascript:" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
							@endforeach
						</div>
					</div>
				</div>
				<!-- /Product Slick -->
			</div>
			<!-- /row -->
			<!-- row -->
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title"><span class="primary-color">SALE</span> Games</h2>
						<div class="pull-right">
							<div class="product-slick-dots-2 custom-dots"></div>
						</div>
					</div>
				</div>
				<!-- /section-title -->

				<!-- banner -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="banner banner-2">
						<img src="{{ asset('img/banner-saleproduct.png') }}" class="img-banner-cust" width="auto" alt="">
						<div class="banner-caption">
							<h2 class="white-color">SALE<br>GAMES</h2>
							<button class="primary-btn">Show all</button>
						</div>
					</div>
				</div>
				<!-- /banner -->

				<!-- Product Slick -->
				<div class="col-md-9 col-sm-6 col-xs-6">
					<div class="row">
						<div id="product-slick-2" class="product-slick">
							@foreach ($saleProduct as $item)
								<!-- Product Single -->
								<div class="product product-single product-single-cust" style="min-height: 252px">
									<div>
										<div class="product-thumb product-thumb-cust">
											<div class="product-label">
												<span class="sale">{{ "SALE ".$item->SALE."%" }}</span>
											</div>
											<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
											<img src="{{$item->getIntroduceImageDirectory()}}" alt="">
										</div>
										<div class="product-body product-body-cust">
											<h2 class="product-name"><a href="#">
												@if (Str::length($item->NAME) >= 25)
													{{Str::substr($item->NAME,0,25)."..."}}
												@else
													{{$item->NAME}}
												@endif
											</a></h2>
											<p  class="product-price product-price-cust">{{$item->getShortSalePrice()}}
												@if ($item->SALE != 0)
													<del class="product-old-price ml-1">{{$item->PRICE}}$</del>
												@endif
											</p>
											<a onclick="AddCart({{$item->ID}})" href="javascript:" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								<!-- /Product Single -->
							@endforeach
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
	<!-- section banner2-->
	<div class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-8">
					<div class="banner banner-1">
						<img src="./img/banner-under1.png" alt="">
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
						<img src="./img/banner-under2.png" alt="">
						<div class="banner-caption text-center">
							<h2 class="white-color">NEW COLLECTION</h2>
						</div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="#">
						<img src="./img/banner-under3.png" alt="">
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
	<!-- /section top product-->
	<div class="section" style="margin-bottom: 30px;">
		<div class="container">
			<div class="row">
				<!-- section-title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">TOP Games</h2>
					</div>
				</div>
				<!-- /section-title -->
				<!-- banner -->
				<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="banner banner-2">
						<img src="./img/banner-hotproduct.png" alt="">
						<div class="banner-caption">
							<h2 class="white-color">TOP<br>GAMES</h2>
							<button class="primary-btn">Show all</button>
						</div>
					</div>
				</div>
				<!-- /banner -->
				<!-- Product Single -->
				<div class="col-md-8 col-sm-6 col-xs-12">
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#1</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/cyberpunk2077.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">Cyberpunk2077</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50</p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#2</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/exanima.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">Exanima</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50 <del class="product-old-price">$45.00</del></p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#3</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/hellblade.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">Hellblade</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50 <del class="product-old-price">$45.00</del></p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#4</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/crysis.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">Crysis</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50</p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#5</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/freespace2.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">Freespace2</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50 <del class="product-old-price">$45.00</del></p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#6</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/mafia.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">Mafia</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50 <del class="product-old-price">$45.00</del></p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#7</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/metroexodus.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">Metroexodus</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50 <del class="product-old-price">$45.00</del></p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#8</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/legendofgrimrock2.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">Legendofgrimrock2</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50 <del class="product-old-price">$45.00</del></p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#9</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/MotoRacer.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">MotoRacer</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50 <del class="product-old-price">$45.00</del></p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>
					<div>
						<!-- Product Single -->
						<div class="product product-single product-single-cust">
							<div>
								<span class="float-left" style="padding: 5px; margin-top:15px;">#10</span>
								<div class="product-thumb mb-0 float-left">
									<div class="product-label">
									</div>
									{{-- <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button> --}}
									<img src="{{asset('img/product/greedfall.jpg')}}" style="max-width: 100px" alt="">
								</div>
								<h2 class="product-name float-left ml-2 mt-3"><a href="#">Greedfall</a></h2>
								<div class="product-body product-body-cust float-right" style="width: 200px">
									<p  class="product-price product-price-cust mt-2">$32.50 <del class="product-old-price">$45.00</del></p>
									<a href="#" class="btn btn-sm primary-btn add-to-cart float-right"><i class="fa fa-shopping-cart"></i> Buy</a>
									<div class="clearfix"></div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
						<!-- /Product Single -->
						<div class="clearfix"></div>
					</div>

				</div>
				<!-- /Product Single -->
			</div>
		</div>
	</div>

    <!-- FOOTER -->
    @include('layout.footer')
    <!-- /FOOTER-->
    <!-- -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="{{ asset('js/client/jquery.min.js') }}"></script>
	<script src="{{ asset('js/client/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/client/slick.min.js') }}"></script>
	<script src="{{ asset('js/client/nouislider.min.js') }}"></script>
	<script src="{{ asset('js/client/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/client/main.js') }}"></script>

    <!-- page script -->
    <script>
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
</body>
</html>
