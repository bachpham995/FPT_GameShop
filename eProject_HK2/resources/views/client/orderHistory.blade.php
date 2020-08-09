<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order History</title>
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
    <!-- /HEADER-->

    <!-- NAVIGATION -->
    @include('layout.navigation')
    <!-- /NAVIGATION-->


<section class="content">
    <div class="container-fluid"  >
        <div class="row" style=" margin-left: 400px">
            <div class="offset-md-3 col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Order History </h3>
                    </div>
                    <?php $count = 0; ?>
                <table class="table table-bordered table-hover"> 
                    <div>
                        <tr>
                            <th>Order Code</th>
                            <th>Order Date</th>
                            <th>Total Amount</th>
                            <th>Action</th>
                        </tr>
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $order->ID }}</td>
                                <td>{{ $order->ORDER_DATE }}</td>
                                <td>{{ $order->PAID }}</td>
                                <th><a href="{{url("/orderDetail/{$order->ID}")}}"><i class="fa fa-list"></i> Details</a></th>
                            </tr>
                            <?php $count++ ?>
                        @endforeach
                        
                        @if($count == 0)
                            <div>You have not made any order yet!</div>
                        @endif
                    </div>
                </table>
            </div>
            
                <!-- /.card -->
                <a href="{{ url('/myAccount') }}"><i class="fa fa-chevron-left"></i> Back to my account</a>
            </div>
        </div>
    </div>
</section>



    <!-- FOOTER -->
    @include('layout.footer')
    <!-- /FOOTER-->
    
</body>
</html>