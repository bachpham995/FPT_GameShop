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
                <li class="active">Payments</li>
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
                    <div class="col-md-6">
                        <div class="payments-methods">
							<div class="section-title">
								<h4 class="title">Payments Methods</h4>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-1" checked>
								<label for="payments-1">Buy with another way</label>
								<div class="caption">
                                  <p>If you want to purchase another way, please contact email bachpham995@gmail.com or contact phone number 0123456789<p>
								</div>
							</div>
							<div class="input-checkbox">
								<input type="radio" name="payments" id="payments-2">
								<label for="payments-2">Pay with Visa cart/Credit card</label>
								<div class="caption">
                                    <div class="creditCardForm">
                                        <div class="payment">
                                            <form>
                                                <div class="form-group owner">
                                                    <label for="owner">Card Number</label>
                                                    <input type="text" class="form-control" id="owner">
                                                </div>
                                                <div class="form-group" id="card-number-field">
                                                    <label for="cardNumber">CVC/CVV</label>
                                                    <input type="text" class="form-control" id="cardNumber">
                                                </div>
                                                <div class="form-group" id="expiration-date">
                                                    <label>Expiry date</label>
                                                    <select>
                                                        <option value="01">January</option>
                                                        <option value="02">February </option>
                                                        <option value="03">March</option>
                                                        <option value="04">April</option>
                                                        <option value="05">May</option>
                                                        <option value="06">June</option>
                                                        <option value="07">July</option>
                                                        <option value="08">August</option>
                                                        <option value="09">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                    <select>
                                                        <option value="16"> 2016</option>
                                                        <option value="17"> 2017</option>
                                                        <option value="18"> 2018</option>
                                                        <option value="19"> 2019</option>
                                                        <option value="20"> 2020</option>
                                                        <option value="21"> 2021</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
								</div>
							</div>
						</div>
                    </div>
                    <div class="pull-right">
                        <a class="primary-btn" href="{{url('GotoBill/'.$user->ID)}}">GO BILL</a>
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
