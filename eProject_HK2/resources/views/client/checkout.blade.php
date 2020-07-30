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
    <!-- /HEADER -->
    <!-- NAVIGATION -->
    @include('layout.navigation')
    <!-- /NAVIGATION -->
    <!-- BREADCRUMB -->
    <div id="breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
    <!-- /BREADCRUMB -->
    <!-- section -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <form id="checkout-form" class="clearfix">
                    <div class="col-md-6">
                        {{-- <p>Already a customer ? <a href="#">Login</a></p> --}}
                        <div class="billing-details">
                            <div class="section-title">
                                <h4 class="title">Billing Details</h4>
                            </div>
                            <div class="input-checkbox">
                                <label>NAME:</label>
                                <label for="name">{{ $user->LNAME }} {{ $user->FNAME }}</label><br>
                                <label>Email:</label>
                                <label for="email">{{ $user->EMAIL }}</label><br>
                                <label>Adress:</label>
                                <label for="address">{{ $user->ADDRESS }}</label><br>
                                <label>Phone:</label>
                                <label for="phone">{{ $user->PHONE }}</label><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Cart detail</h4>
							</div>
                            <div class="input-checkbox">
                                <label>Orders Code:</label>
                                <label for="ID">1</label><br>
                                <label>Order Day:</label>
                                <label for="ORDER_DATE">29/7/2019</label><br>
                                <label>Status:</label>
                                <label for="status">Processing</label><br>
                            </div>
						</div>
                    </div>
                    <div class="col-md-12">
                        <div>
                            <div class="order-summary clearfix">
                                <div class="section-title">
                                    <h3 class="title">Bill Review</h3>
                                </div>
                                <table class="shopping-cart-table table">
                                    <thead>
                                        <tr>
                                            <th>STT</th>
                                            <th class="text-center" >GAME ID</th>
                                            <th class="text-center">GAME NAME</th>
                                            <th class="text-center">QUANTITY(USD/1)</th>
                                            <th class="text-center">TOTAL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="thumb"><img src="./img/thumb-product01.jpg" alt=""></td>
                                            <td class="price text-center">1</td>
                                            <td class="price text-center"><strong>$32.50</strong></td>
                                            <td  class="qty text-center"><input readonly class="input" type="number" value="1">
                                            </td>
                                            <td class="total text-center"><strong class="primary-color">$32.50</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th class="empty" colspan="3"></th>
                                            <th>SUBTOTAL</th>
                                            <th colspan="2" class="sub-total">$97.50</th>
                                        </tr>
                                        <tr>
                                            <th class="empty" colspan="3"></th>
                                            <th>TOTAL</th>
                                            <th colspan="2" class="total">$97.50</th>
                                        </tr>
                                    </tfoot>
                                </table>
                                <div class="pull-right">
                                    <a class="primary-btn" href="{{url('/Goback')}}">Go Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->

    <!-- FOOTER -->
    @include('layout.footer')
    <!-- /FOOTER -->

    <!-- jQuery Plugins -->
    <script src="{{ asset('js/client/jquery.min.js') }}"></script>
    <script src="{{ asset('js/client/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/client/3slick.min.js') }}"></script>
    <script src="{{ asset('js/client/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/client/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/client/main.js') }}"></script>
</body>

</html>
