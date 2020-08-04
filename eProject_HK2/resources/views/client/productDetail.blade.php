
@extends('layout.layout')
@section('content')

<body>
    <!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!--  Product Details -->
				<div class="product product-details clearfix">
					<div class="col-md-6">
						<div id="product-main-view">
							<div class="product-view">
								<img  src="{{$game->getIntroduceImageDirectory()}}" style="" alt="">
							</div>
						</div>
						<div id="product-view">
							<div class="product-view">
								<img  src="{{$game->getIntroduceImageDirectory()}}" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="product-body">
							<div class="product-label">
								<span>New</span>
								<span class="sale">- {{$game->SALE}}%</span>
							</div>
                            <h1 class="product-name">{{$game->NAME}}</h1>
                            <h2 class="product-price">{{$game->getShortSalePrice()}}<del class="product-old-price"> {{$game->getShortPrice()}}</del></h2>
                            <div>
                                <strong>Rating:</strong>
								<div class="product-rating">
                                    @for($i = 1;$i <= $game->Rating();$i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    @for($i = 1;$i <= 5-$game->Rating();$i++)
                                        <i class="fa fa-star-o empty"></i>
                                    @endfor

									{{-- <i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-o empty"></i> --}}
								</div>
								<a href="#">3 Review(s) / Add Review</a>
							</div>
                            <p><strong>Status:</strong> {{$game->getStatus()}}</p>
                            <p><strong>Categories(s):</strong> {{$game->getCategories()}}</p>
                            <p><strong>Publisher(s):</strong> {{$game->getPublishers()}}</p>
                            <p><strong>Producer(s):</strong> {{$game->getProducers()}}</p>
                        <p><strong>Features:</strong>{{$game->FEATURE}}</p>
							<div class="product-options">
								{{-- <ul class="size-option">
									<li><span class="text-uppercase">Size:</span></li>
									<li class="active"><a href="#">S</a></li>
									<li><a href="#">XL</a></li>
									<li><a href="#">SL</a></li>
								</ul> --}}
								{{-- <ul class="color-option">
									<li><span class="text-uppercase">Color:</span></li>
									<li class="active"><a href="#" style="background-color:#475984;"></a></li>
									<li><a href="#" style="background-color:#8A2454;"></a></li>
									<li><a href="#" style="background-color:#BF6989;"></a></li>
									<li><a href="#" style="background-color:#9A54D8;"></a></li>
								</ul> --}}
							</div>

							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">QTY: </span>
									<input class="input" type="number">
								</div>
							<a onclick="AddCart({{$game->ID}})" href="javascript:" class="primary-btn add-to-cart" ><i class="fa fa-shopping-cart"></i> ADD TO CART</a>
								<div class="pull-right">
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
									<button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12" id="informations">
						<div class="product-tab">
							<ul class="tab-nav">
								<li class="active"><a data-toggle="tab" href="#tab0">Description</a></li>
								<li><a data-toggle="tab" href="#tab1">Details</a></li>
                                <li><a data-toggle="tab" href="#tab2">Comments ({{$game->Comments()->count()}})</a></li>
                                <li><a data-toggle="tab" href="#tab3">Requirement</a></li>
							</ul>
							<div class="tab-content">
                                <div id="tab0" class="tab-pane fade in active">
                                    <p>{{$game->DESCRIPTION}}</p>
								</div>
								<div id="tab1" class="tab-pane fade in">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
										irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">
                                                @foreach ($game->gridComments()[0] as $cmt)
                                                    <div class="single-review">
                                                        <div class="review-heading">
                                                            <b><a ><i class="fa fa-user-o"></i> {{$cmt->User()}}</a></b>
                                                            <div><a ><i class="fa fa-clock-o"></i> {{$cmt->created_at}}</a></div>
                                                            <div class="review-rating pull-right">
                                                                @for($i = 1;$i <= $cmt->RATING;$i++)
                                                                    <i class="fa fa-star"></i>
                                                                @endfor
                                                                @for($i = 1;$i <= 5-$cmt->RATING;$i++)
                                                                    <i class="fa fa-star-o empty"></i>
                                                                @endfor
                                                            </div>
                                                        </div>
                                                        <div class="review-body">
                                                            <p>{{$cmt->DESCRIPTION}}</p>
                                                        </div>
                                                    </div>
                                                @endforeach

												<ul class="reviews-pages">
                                                    @for ($i = 1; $i <= $game->commentsPageNum();$i++)
                                                        @if ($i == 1)
                                                            <li class="active"><u>{{$i}}</u></li>
                                                        @else
                                                            <li><u><a href="javascript:" onclick="goToPage({{$game->ID}},{{$i}})">{{$i}}</a></u></li>
                                                        @endif
                                                    @endfor
													{{-- <li class="active">1</li>
													<li><a href="#">2</a></li>
													<li><a href="#">3</a></li> --}}
													<li><a href="#"><i class="fa fa-caret-right"></i></a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6">
											<h4 class="text-uppercase">Write Your Comment</h4>
											<div class="review-form">
												<div class="form-group">
													<textarea rows="10" class="input" id="comment" placeholder="Your comment"></textarea>
												</div>
												<div class="form-group">
													<div class="input-rating">
														<strong class="text-uppercase">Your Rating: </strong>
														<div class="stars">
															<input type="radio" id="star5" name="rating" value="5" /><label for="star5"></label>
															<input type="radio" id="star4" name="rating" value="4" /><label for="star4"></label>
															<input type="radio" id="star3" name="rating" value="3" /><label for="star3"></label>
															<input type="radio" id="star2" name="rating" value="2" /><label for="star2"></label>
															<input type="radio" id="star1" name="rating" value="1" /><label for="star1"></label>
														</div>
													</div>
												</div>
												<button class="primary-btn"  onclick="sendComment({{$game->ID}}, {{Session::get('user')?Session::get('user')->ID:'null'}})"><font color="white">Submit</font></button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Details -->
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
				<!-- section title -->
				<div class="col-md-12">
					<div class="section-title">
						<h2 class="title">Picked For You</h2>
					</div>
				</div>
				<!-- section title -->

				<!-- Product Single -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="product product-single">
						<div class="product-thumb">
							<button class="main-btn quick-view"><i class="fa fa-search-plus"></i> Quick view</button>
							<img src="" alt="">
						</div>
						<div class="product-body">
							<h3 class="product-price">$32.50</h3>
							<div class="product-rating">
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star"></i>
								<i class="fa fa-star-o empty"></i>
							</div>
							<h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
							<div class="product-btns">
								<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								<button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
								<button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /Product Single -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->

</body>

<script>
    function goToPage(id,pageID){
        $data = {page : pageID};
        $.ajax({
            url:'/ToCommentPage/'+id,
            type: 'GET',
            contentType: "application/json; charset=utf-8",
            data: $data
        }).done(function(response){
            $("#informations").empty();
            $("#informations").html(response);
            $('.tab-nav a[href="#tab2"]').tab('show');
            alertify.success('Success Add');
        });
    }

    function AddCart(id){
        $.ajax({
            url:'/AddCart/'+id,
            type: 'GET'
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


    function sendComment(gameId, userID){
        if(userID == null){
            alertify.error ('Please sign in to make a comment!');
        }else{
            $commentData = {
                 user_id : userID,
                 rating : $("input[name='rating']:checked").val(),
                 description : $("#comment").val()
            }

            $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
            });
            $.ajax({
                url:'/Comment/'+gameId,
                type: 'GET',
                contentType: "application/json; charset=utf-8",
                data : $commentData
            }).done(function(response){
                $("#informations").empty();
                $("#informations").html(response);
                $('.tab-nav a[href="#tab2"]').tab('show');
                alertify.success('Your comment has been published successfully');
            });
        }
    }
</script>
@endsection
