@extends('layout.layout')
@section('title', 'Register')
@section('page-name', 'Register')
@section('content')

<div class="main-register">
    <h1>Register</h1>
    <hr>
    <form role="form" action="{{ url('postRegister') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-sm-6">
                @if ($errors->has('firstName'))
                    <span class="pull-right" style="color: red">{{ $errors->first('firstName') }}</span>
                @endif
                <label for="inputUsernameEmail">First Name:</label>
                <input type="text" class="form-control" id="inputUsernameEmail" name="firstName">
            </div>
            <div class="form-group col-sm-6">
                @if ($errors->has('lastName'))
                    <span class="pull-right" style="color: red">{{ $errors->first('lastName') }}</span>
                @endif
                <label for="inputUsernameEmail">Last Name:</label>
                <input type="text" class="form-control" id="inputUsernameEmail" name="lastName">
            </div>
        </div>
        <div class="form-group">
            @if ($errors->has('email'))
                <span class="pull-right" style="color: red">{{ $errors->first('email') }}</span>
            @endif
            <label for="inputUsernameEmail">Email:</label>
            <input type="text" class="form-control" id="inputUsernameEmail" name="email">
        </div>
        <div class="form-group">
            @if ($errors->has('password'))
                <span class="pull-right" style="color: red">{{ $errors->first('password') }}</span>
            @endif
            <label for="inputPassword">Password:</label>
            <input type="password" class="form-control" id="inputPassword" name="password">
        </div>
        <div class="form-group">
            @if ($errors->has('confirmPassword'))
                <span class="pull-right" style="color: red">{{ $errors->first('confirmPassword') }}</span>
            @endif
            <label for="inputPassword">Confirm Password:</label>
            <input type="password" class="form-control" id="inputPassword" name="confirmPassword">
        </div>
        <a class="pull-right" href="#">Or login >>></a>
        <button type="submit" class="btn btn btn-primary">
            Register
        </button>
    </form>
    @if(Session::has('message'))
        <div class="alert alert-danger mt-2" role="alert">
            <p><i class="fa fa-exclamation-triangle mr-2"></i>{{Session::get('message')}} </p>
        </div>
    @endif
</div>

@endsection