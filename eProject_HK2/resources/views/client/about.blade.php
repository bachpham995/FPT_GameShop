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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/client/style.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/client/login.css') }}" />
</head>
<style>
    p {
        color: #d2dff5;
    }

    h1 {
        color: #546bd6;
    }

    h2 {
        color: #546bd6;
    }

    h4 {
        color: #546bd6;
    }

    h3 {
        color: #546bd6;
    }

    .displayTableCell {
        color: #d2dff5;
    }

    .image-user {
        vertical-align: middle;
        border-radius: 50%;
        width: 200px;
        height: 200px;

    }

    .displayTable {
        margin-top: 30px;
    }

    .displayTableCell {
        font-size: 18px;
    }

    .backgound {
        background-image: url('./img/1065466.png');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
        width: 100%;
        /* margin-left: 200px; */
    }

</style>

<body>
    <!-- HEADER -->
    @include('layout.header')
    <!-- /HEADER-->
    <!-- NAVIGATION -->
    @include('layout.navigation')
    <!-- /NAVIGATION -->
    <div class="backgound">
        <div class="container text-center">
            <img src="./img/logo.png" style="margin-right:70px" alt="">
            <h3>Fun is the main</h3>
            <div class="col-md-8 col-md-offset-2">
                <div class="red-border"></div>
                <p>DeVil Shop is the leading website distributing
                    products about copyrighted games, software and utilities in Vietnam.</p>
                <!-- <a class="ct-u-marginTop60 btn btn-solodev-red btn-fullWidth-sm ct-u-size19" href="#">Learn More</a> -->
            </div>
        </div>
        <div class="container" style="margin-top:100px;width:100%">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2>Goal towards</h2>
                    <h3>Why should you choose DeVil Shop ?</h3>
                </div>
            </div>
            <div class="row ct-u-paddingBoth20 col-md-offset-1 ">
                <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                        <h4>Prestige is on top</h4>
                        <p class="company-icons-subtext hidden-xs">DeVil Shop is a long-standing name in the Vietnamese
                            copyright game community. From the early days when platforms providing international
                            copyrighted games such as Steam, Battle.net, Origin began to be known in Vietnam.
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                        {{-- <i class="fa fa-money" style="" aria-hidden="true"></i>
                        --}}
                        <h4>Product variety</h4>
                        <p class="company-icons-subtext hidden-xs">With tens of thousands of products on Website
                            Devilshop.vn we confidently bring you all that you need in the world of copyrighted games.
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                        <h4>Convenient payment method</h4>
                        <p class="company-icons-subtext hidden-xs">We network to a most convenient payment experience
                            for our customers.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row ct-u-paddingBoth20 col-md-offset-1">
                <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                        <h4>Prices and offers</h4>
                        <p class="company-icons-subtext hidden-xs">We bring to customers products with the best prices
                            along with very attractive offers.
                        </p>
                    </div>
                </div>
                <div class="col-xs-6 col-md-4">
                    <div class="company-icons-white">
                        <h4>Warranty and support</h4>
                        <p class="company-icons-subtext hidden-xs">Divine commits to warranties for all products.
                            Warranty information for each product is detailed for each product.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:100px ;">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h1>Member of Group 1</h1>
                </div>
                <div class="clearfix">
                </div>
            </div>
        </div>
        <div class="container ct-u-paddingTop40 ct-u-paddingBottom100" style="width:100% margin-botom:100px">
            <div class="row">
                <div class="col-md-12 ct-content">
                    {{-- <section class="clients-home"> --}}
                        <div class="container" style="margin-botom:100px">
                            <div class="clients-logos text-center">
                                <div class="row">
                                    <div class="col-md-6 client-logos-repeater">
                                        <img src="./img/3.jpg" class="image-user">
                                        <div class="logo-title">
                                            <div class="displayTable">
                                                <div class="displayTableCell">Phạm Xuân Bách</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 client-logos-repeater">
                                        <img class="image-user" src="./img/2.jpg">
                                        <div class="logo-title">
                                            <div class="displayTable">
                                                <div class="displayTableCell">Lưu trọng Phát</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6 client-logos-repeater">
                                        <img class="image-user" src="./img/4.jpg">
                                        <div class="logo-title">
                                            <div class="displayTable">
                                                <div class="displayTableCell">Nguyễn Vũ Hoàng Hoá</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 client-logos-repeater">
                                        <img class="image-user" src="./img/1.jpg">
                                        <div class="logo-title">
                                            <div class="displayTable">
                                                <div class="displayTableCell">Đỗ trí Thịnh</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- </section> --}}
                </div>
            </div>
        </div>
        <img src="./img/banner-2020.png" style="width: 100%;height:500px" alt="">
    </div>


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
</body>

</html>
