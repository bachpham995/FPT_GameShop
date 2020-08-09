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
  
    <link rel="stylesheet" href="{{ asset('css/client/font-awesome.min.css') }}"> 
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/client/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/client/login.css') }}" />
    {{-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> --}}

</head>
<style>
    .invoice-title h2,
    .invoice-title h3 {
        display: inline-block;
    }

    .table>tbody>tr>.no-line {
        border-top: none;
    }

    .table>thead>tr>.no-line {
        border-bottom: none;
    }

    .table>tbody>tr>.thick-line {
        border-top: 2px solid;
    }

    .logo-custom {
        width: 300px;
        height: 100px;
    }

</style>

<body>
    <!-- HEADER -->
    @include('layout.header')
    <!-- /HEADER -->
    <!-- NAVIGATION -->
    @include('layout.navigation')
    <!-- /NAVIGATION -->
    <!-- section -->
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="invoice-title">
                        <img class="logo-custom" src="/img/logo.png">
                        <h3 class="pull-right">Order #
                            @if ($cart != null)
                            {{ $cart->id }}
                            @endif
                        </h3>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="billing-details">
                                <div>
                                    <h4 class="title">Billing Details</h4>
                                </div>
                                <div class="input-checkbox">
                                    @if ($user != null)
                                        <label>NAME:</label>
                                        <label for="name">{{ $user->LNAME }} {{ $user->FNAME }}</label><br>
                                        <label>Email:</label>
                                        <label for="email">{{ $user->EMAIL }}</label><br>
                                        <label>Adress:</label>
                                        <label for="address">{{ $user->ADDRESS }}</label><br>
                                        <label>Phone:</label>
                                        <label for="phone">{{ $user->PHONE }}</label><br>
                                    @endif

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-6 text-right">
                            <div class="payments-methods">
                                <div>
                                    <h4 class="title">Cart detail</h4>
                                </div>
                                <div class="input-checkbox">
                                    <label>Orders Code:</label>
                                    <label for="ID">
                                        @if ($cart != null)
                                            {{ $cart->id }}
                                        @endif
                                    </label><br>
                                    <label>Order Day:</label>
                                    <label for="ORDER_DATE">
                                        @if ($cart != null)
                                            {{ $cart->ORDER_DATE }}
                                        @endif
                                    </label><br>
                                    <label>Status:</label>
                                    <label for="status">
                                        @if ($cart != null)
                                            @if ($cart->PAID != 0)
                                                Paid
                                            @else
                                                Waiting
                                            @endif
                                        @endif
                                    </label><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Order summary</strong></h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-condensed">
                                    <thead>
                                        <tr>
                                            <td><strong>Item</strong></td>
                                            <td class="text-center"><strong>Name</strong></td>
                                            <td class="text-center"><strong>Price</strong></td>
                                            <td class="text-center"><strong>Quantity</strong></td>
                                            <td class="text-right"><strong>Totals</strong></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if ($cart != null)
                                            @foreach ($cart->getGame($cart->id) as $game)
                                                <tr>
                                                    <td>{{ $game->ID }}</td>
                                                    <td class="text-center">{{ $game->NAME }}</td>
                                                    <td class="price text-center">
                                                        <strong>{{ $game->getShortSalePrice() }}</strong>
                                                    </td>
                                                    <td class="qty text-center">
                                                        <label
                                                            id="{{ $game->ID }}">{{ $game->getGameQuantity($cart->id) }}</label><br>
                                                    </td>
                                                    <td class="total text-right">
                                                        <strong id="gamePrice" class="primary-color">
                                                            {{ $game->getTotal($game->getGameQuantity($cart->id)) }}
                                                        </strong>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line text-right"><strong>Subtotal</strong></td>
                                        @if ($cart != null)
                                            <td colspan="2" class="thick-line text-right " >
                                                {{ $cart->getTotalPrice($cart->id) }}
                                            </td>
                                        @else
                                            <td colspan="2" class="thick-line text-right">0.0</td>
                                        @endif
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /section -->
    <!-- FOOTER -->
    @include('layout.footer')
    <!-- /FOOTER -->
    <!-- jQuery Plugins -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="{{ asset('js/client/jquery.min.js') }}"></script>
    <script src="{{ asset('js/client/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/client/3slick.min.js') }}"></script>
    <script src="{{ asset('js/client/nouislider.min.js') }}"></script>
    <script src="{{ asset('js/client/jquery.zoom.min.js') }}"></script>
    <script src="{{ asset('js/client/main.js') }}"></script>
    {{-- <script>
        $('#gamePrice').(function() {
                    $game - > getShortSalePrice() * ($game - > getGameQuantity($cart - > id)
                    });

    </script> --}}
</body>

</html>
