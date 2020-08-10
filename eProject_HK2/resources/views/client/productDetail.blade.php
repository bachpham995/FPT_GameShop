
@extends('layout.layout')
@section('content')
{{-- <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
// Add the new slick-theme.css if you want the default styling
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/> --}}


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
						<div  id="product-main-view">
                            @foreach (App\game_image::where('GAME_ID', $game->ID)->get() as $img)
                                <div class="product-view">
                                    <img src="{{$img->URL}}" alt="" ">
                                </div>
                            @endforeach
                            @if ($game->LINKDEMO != null)
                                <div class="product-view video">
                                    <iframe class="video"src="{{$game->LINKDEMO}}" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            @endif
						</div>
						<div id="product-view">
                            @foreach (App\game_image::where('GAME_ID', $game->ID)->get() as $img)
                                <div class="product-view">
                                    <img src="{{$img->URL}}" alt="">
                                </div>
                            @endforeach
                            @if ($game->LINKDEMO != null)
                                <div class="product-view">
                                    <iframe id="video-view" src="{{$game->LINKDEMO}}"
                                        allowfullscreen>
                                        </iframe>
                                </div>
                            @endif

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
                            <div id="product_rating">
                                <strong>Rating:</strong>
								<div class="product-rating">
                                    @for($i = 1;$i <= $game->Rating();$i++)
                                        <i class="fa fa-star"></i>
                                    @endfor
                                    @for($i = 1;$i <= 5-$game->Rating();$i++)
                                        <i class="fa fa-star-o empty"></i>
                                    @endfor
								</div>
								<a href="">{{$game->Comments()->count()}} Comments(s)</a>
							</div>
                            <p><strong>Status:</strong> {{$game->getStatus()}}</p>
                            <p><strong>Categories(s):</strong> {{$game->getCategories()}}</p>
                            <p><strong>Publisher(s):</strong> {{$game->getPublishers()}}</p>
                            <p><strong>Producer(s):</strong> {{$game->getProducers()}}</p>
                        <p><strong>Features:</strong>{{$game->FEATURE}}</p>
							<div class="product-options">

							</div>

							<div class="product-btns">
								<div class="qty-input">
									<span class="text-uppercase">QTY: </span>
									<input id="product_quantity" value="1" class="input" type="number">
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
                                <li><a data-toggle="tab" href="#tab1">Requirement</a></li>
                                <li><a data-toggle="tab" href="#tab2">Comments ({{$game->Comments()->count()}})</a></li>

							</ul>
							<div class="tab-content">
                                <div id="tab0" class="tab-pane fade in active">
                                    <p>{{$game->DESCRIPTION}}</p>
                                </div>
                                <div id="tab1" class="tab-pane fade in">
                                </div>
								<div id="tab2" class="tab-pane fade in">
									<div class="row">
										<div class="col-md-6">
											<div class="product-reviews">
                                                @if ($game->gridComments()->count()>0)
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
                                                        <li><a
                                                            @if($game->commentsPageNum() > 1)
                                                                href="javascript:"
                                                                onclick="goToPage({{$game->ID}},{{2}})"
                                                            @endif><i class="fa fa-caret-right"></i></a>
                                                        </li>
                                                    </ul>
                                                @else
                                                    <ul>
                                                        <li>
                                                            No comment for this product currently.
                                                        </li>
                                                    </ul>
                                                @endif
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
				{{-- <div class="col-md-12"> --}}
					<div class="section-title">
						<h2 class="title">Picked For You</h2>
					</div>
                {{-- </div> --}}
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div id="autoplay">
                        @foreach ($game->getRandomGames() as $rd)
                            <div class="col-md-3 col-sm-6 col-xs-6">
                                <div class="product product-single product-single-cust" style="min-height: 252px">
                                    <div>
                                        <div class="product-thumb product-thumb-cust">
                                            <div class="product-label">
                                                <span>New</span>
                                                <span class="sale">{{$rd->getSale()}}</span>
                                            </div>
                                            <a href="{{url('productDetail/'.$rd->ID)}}" class="main-btn quick-view"><i class="fa fa-search-plus"></i> View</a>
                                            <img height="160px" src="{{$rd->getIntroduceImageDirectory()}}" alt="">
                                        </div>

                                        <div class="product-body product-body-cust">
                                            <div class="product-rating">
                                                @for($i = 1;$i <= $rd->Rating();$i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                                @for($i = 1;$i <= 5-$rd->Rating();$i++)
                                                    <i class="fa fa-star-o empty"></i>
                                                @endfor
                                            </div>
                                            <div class="clearfix"></div>
                                            <h2 class="product-name"><a href="{{url('productDetail/'.$rd->ID)}}">{{$rd->NAME}}</a></h2>
                                            @if ($rd->SALE > 0)
                                                <p  class="product-price product-price-cust">{{$rd->getShortSalePrice()}}<del class="product-old-price"> {{$rd->getShortPrice()}}</del></p>
                                            @else
                                                <p  class="product-price product-price-cust">{{$rd->getShortSalePrice()}}</p>
                                            @endif
                                        {{-- <a onclick="AddCart({{$game->ID}})" href="javascript:" class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> Add to Cart</a> --}}
                                            <a onclick="AddCartFromSuggest({{$rd->ID}})" href="javascript:" class="btn btn-sm primary-btn add-to-cart float-right">
                                                <i class="fa fa-shopping-cart"></i> ADD TO CART</a>
                                            <div class="clearfix"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

                <!-- section title -->

                <!-- Product Single -->

			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
    <!-- /section -->
    <br>

</body>

<script>
    $(document).ready(function(){
        $('#autoplay').slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000
        });
    });


    document.getElementById("video-view").style.pointerEvents = "none";
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
        });
    }

    function AddCart(id){
        $productQty = document.getElementById("product_quantity").value
        if($productQty > 0){
            $.ajax({
                url:'/AddCart/'+id,
                type: 'GET',
                data:{ qty : $productQty }
            }).done(function(response){
                RenderCart(response)
                alertify.success('Success Add');
            });
        }else{
            alertify.error('Quantity must be higher than 0');
        }
    }

    function AddCartFromSuggest(id){
        $productQty = 1;
        $.ajax({
            url:'/AddCart/'+id,
            type: 'GET',
            data:{ qty : $productQty }
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
                $("#product_rating").load(" #product_rating");
                $('.tab-nav a[href="#tab2"]').tab('show');
                alertify.success('Your comment has been published successfully');
            });
        }
    }
</script>
@endsection
