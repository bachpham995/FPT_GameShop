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
                <li class="active">About Us</li>
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
                    <div>
                        <div class="order-summary clearfix">
                            <div class="section-title">
                                <h3 class="title">About Us</h3>
                            </div>
                            <table class="shopping-cart-table table">
                                <tbody>

                                    <h2>Giới thiệu Divine Shop</h2>
                                    <p>Divine Shop là website phân phối sản phẩm về Game bản quyền, Phần mềm, tiện ích
                                        hàng đầu Việt Nam</p>
                                    <p>Divine Shop được sinh ra với mong muốn mang cung cấp cho game thủ Việt Nam những
                                        game bản quyền chất lượng nhất trên thế giới với một phương thức thanh toán đơn
                                        giản nhất, giá tốt nhất cùng với đó là dịch vụ chăm sóc khách hàng tuyệt vời.
                                        Chúng tôi mong muốn trở thành những người đồng hành và tư vấn cho bạn trong mọi
                                        vấn đề liên quan đến Game bản quyền, giúp cho trải nghiệm chơi game của bạn được
                                        tuyệt vời nhất.
                                        Chúng tôi tin rằng giải trí đúng cách sẽ mang lại những giá trị tốt đẹp cho cuộc
                                        sống.</p>
                                    <h2>Tại sao bạn nên lựa chọn Divine Shop.</h2>  
                                    <p>Hiện nay có rất nhiều đơn vị cung cấp Game và phần mềm trên mạng. Vậy đâu là lý do bạn nên lựa chọn Divine Shop. </p>
                                    <h2>Uy tín được đặt lên hàng đầu</h2>  
                                    <p>Divine Shop là một tên tuổi lâu đời trong cộng đồng game bản quyền Việt Nam. Từ những ngày đầu khi các nền tảng cung cấp game bản quyền quốc tế như Steam, Battle.net, Origin bắt đầu được biết tới tại Việt Nam.</p>
                                    <h4>5 Năm liền là Shop game bản quyền uy tín nhất Việt Nam</h4>  
                                    <p>Do chính cộng đồng bình chọn từ các group về game bản quyền.</p>
                                    <h4>Hơn 600.000 Khách hàng tin tưởng và mua hàng</h4>  
                                    <p>Chúng tôi tự hào mang game bản quyền đến cho hơn 600.000 game thủ Việt Nam trong suốt 5 năm hoạt động. </p>
                                    <p>Hàng tháng website Divineshop chào đón hơn 400.000 lượt truy cập mua hàng.</p>
                                    <h2>Sản phẩm đa dạng</h2>  
                                    <p>Với hàng chục nghìn sản phẩm trên Website Divineshop.vn chúng tôi tự tin mang đến cho bạn tất cả những gì bạn cần trong thế giới game bản quyền.</p>
                                    <h4>Các tựa game huyền thoại</h4>  
                                    <p>Grand Theft Auto V, Counter Strike - Global Offensive, ARK, Left 4 Dead, Diablo, Overwatch...</p>
                                    <h4>Các tựa game hot</h4>  
                                    <p>PUBG, Battlefield, Fifa, Doom, Red Dead Redemption...</p>
                                    <p>Các sản phẩm đa dạng từ tất cả các nền tảng như: Steam, Battle.Net, Origin, PS</p>
                                </tbody>
                                <tfoot>

                                </tfoot>
                            </table>
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


</body>

</html>
