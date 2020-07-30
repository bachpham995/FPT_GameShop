{{-- @extends('layout.layout') --}}
@section('title', 'Products')
@section('page-name', 'Products')
@section('content')
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
                    <li class="active">Cart View</li>
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
                        <div class="order-summary clearfix" id="list-cart">
                            <div class="section-title">
                                <h3 class="title">Order Review</h3>
                            </div>
                            <div>
                                <div>
                                    <table class="shopping-cart-table table">
                                        <thead>
                                            <tr>
                                                <th>IMG</th>
                                                <th class="text-center">GAME NAME</th>
                                                <th class="text-center">Price</th>
                                                <th class="text-center">Quantity</th>
                                                <th class="text-center">Total</th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <div>
                                                @if(Session::has('Cart') != null)
                                                    @foreach(Session::get('Cart')
                                                        ->game as $game)
                                                        <tr>
                                                            <td class="thumb"><img src="{{ $game['img'] }}" alt=""></td>
                                                            <td class="text-center">{{ $game['gameInfor']->NAME }}</td>
                                                            <td class="price text-center">
                                                                <strong>{{ $game['gameInfor']->PRICE }}</strong><br><del
                                                                    class="font-weak"><small>$40.00</small></del></td>
                                                            <td class="qty text-center">
                                                                <input class="input" type="number"
                                                                    {{-- name="csrf-token" --}}
                                                                    {{-- content="{{ csrf_token() }}" --}}
                                                                    oninput="someThing({{ $game['gameInfor']->ID }})"
                                                                    id="{{ $game['gameInfor']->ID }}" value="{{ $game['quanty'] }}">
                                                            </td>
                                                            <td class="total text-center">
                                                                <strong id="gamePrice"
                                                                    class="primary-color">{{ $game['price'] }}
                                                                </strong>
                                                            </td>
                                                            <td class="text-right">
                                                                <i class="fa fa-close"
                                                                    onclick="DeleteItemListCart({{ $game['gameInfor']->ID }})"></i>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @endif
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th class="empty" colspan="3"></th>
                                                <th>TOTAL</th>
                                                @if(Session::has('Cart') != null)
                                                    <th colspan="2" class="sub-total">{{ Session::get('Cart')->totalPrice }}
                                                    </th>
                                                @else
                                                    <th colspan="2" class="sub-total">0.0</th>
                                                @endif
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                            <div class="pull-right">
                                <a class="primary-btn" href="{{ url('/Payment') }}">Checkout<i
                                        class="fa fa-arrow-circle-right"></i></a>
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
        <script src="{{ asset('js/client/slick.min.js') }}"></script>
        <script src="{{ asset('js/client/nouislider.min.js') }}"></script>
        <script src="{{ asset('js/client/jquery.zoom.min.js') }}"></script>
        <script src="{{ asset('js/client/main.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
        <!-- Default theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" />
        <!-- Semantic UI theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css" />
        <!-- Bootstrap theme -->
        <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css" />
        {{-- <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script> --}}
        <script>
            function DeleteItemListCart(id) {
                $.ajax({
                    url: 'Delete-Item-List-Cart/' + id,
                    type: 'GET',
                }).done(function(response) {
                    RenderListCart(response)
                    alertify.success('Success Delede');
                });
            }

            function RenderListCart(response) {
                $("#checkout-form").empty();
                $("#checkout-form").html(response);
            }

            function someThing(id) {
                $.ajax({
                    url: '/Update-Quantity', // gửi ajax đến file result.php
                    type: "GET", // chọn phương thức gửi là post
                    // dataType: "json", // dữ liệu trả về dạng text
                    data:{
                            "id": id,
                            "quantity": $("#"+id).val()
                        },
                    success: function(response) {
                        $("#"+id).html(response);
                    }
                });
            }

        </script>
        @yield('script-section')
    </body>

    </html>