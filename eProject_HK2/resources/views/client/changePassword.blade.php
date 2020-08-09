<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
                        <h3 class="card-title">Change Password </h3>
                        @if (session('wrongPass'))
            <strong>{{session('wrongPass') ?? ''}}</strong>
        @endif
        @if (session('wrongConfirm'))
            <strong>{{session('wrongConfirm') ?? ''}}</strong>
        @endif
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" action="{{ url('postChangePassword') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="card-body">
                            {{-- <div class="form-group">
                                <label for="txt-id">Id</label>
                                <input type="text" class="form-control" id="txt-id" name="ID" placeholder="1"  readonly>
                            </div> --}}
                            <div class="form-group" style="display: none;">
                                <label for="txt-name">Current Password</label>
                                <input type="text" class="form-control" id="txt-id" name="txtId" placeholder="First Name" value="{{ $user->ID }}" required>
                            </div>
                            <div class="form-group">
                                <label for="txt-name">Current Password</label>
                                <input type="text" class="form-control"  name="txtPassword" placeholder="CURRENT PASSWORD" required>
                            </div>
                            <div class="form-group">
                                <label for="txt-price">New Password</label>
                                <input type="text" class="form-control" name="txtNewPassword" placeholder="NEW PASSWORD"  required>
                            </div>
                            <div class="form-group">
                                <label>Confirm New Password</label>
                                <input class="form-control" rows="3" name="txtConPassword" placeholder="CONFIRM PASSWORD" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
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