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
                            @foreach ($game->gridComments()[$page?($page-1):0] as $cmt)
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
                                    @if ($i == $page)
                                        <li class="active" ><u>{{$i}}</u></li>
                                    @else
                                        <li><u><a href="javascript:" onclick="goToPage({{$game->ID}},{{$i}})">{{$i}}</a></u></li>
                                    @endif
                                @endfor
                                <li><a
                                    @if($page < $game->commentsPageNum())
                                        href="javascript:"
                                        onclick="goToPage({{$game->ID}},{{$page + 1}})"
                                    @endif><i class="fa fa-caret-right"></i></a></li>
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
            <div id="tab3" class="tab-pane fade in">
            </div>
        </div>
    </div>
</div>
</div>
