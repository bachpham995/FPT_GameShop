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
    {{--
    <link rel="stylesheet" href="{{ asset('css/client/font-awesome.min.css') }}"> --}}
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
        <div class="container-fluid">
            <div class="row" style=" margin-left: 400px">
                <div class="offset-md-3 col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Update </h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form role="form" action="{{ url('postAccountUpdate') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body">
                                <input hidden type="text" class="form-control" id="txt-id" name="ID" placeholder="1"
                                    readonly>
                                <div class="form-group">
                                    <label for="txt-name">First Name</label>
                                    <input type="text" class="form-control" id="txt-name" name="FNAME"
                                        placeholder="First Name" value="{{ $user->FNAME }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="txt-price">Last Name</label>
                                    <input type="text" class="form-control" id="txt-price" name="LNAME" placeholder="1"
                                        value="{{ $user->LNAME }}" required>
                                </div>
                                <div class="form-group">
                                    <label>ADDRESS</label>
                                    <input class="form-control" rows="3" name="ADDRESS" placeholder="ADDRESS"
                                        value="{{ $user->ADDRESS }}" required>
                                </div>
                                <div class="form-group">
                                    <label>PHONE</label>
                                    <input class="form-control" rows="3" name="PHONE" placeholder="PHONE"
                                        value="{{ $user->PHONE }}" required>
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
