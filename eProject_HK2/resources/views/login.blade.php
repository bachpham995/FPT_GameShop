@extends('layout.layout')
@section('title', 'login')
@section('content')

<div class="main">

    <h3>Please Log In, or <a href="#">Sign Up</a></h3>
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="#" class="btn btn-lg btn-primary btn-block">Facebook</a>
        </div>
        <div class="col-xs-6 col-sm-6 col-md-6">
            <a href="#" class="btn btn-lg btn-info btn-block">Google</a>
        </div>
    </div>
    <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
    </div>

    <form role="form" action="{{ url('checkLog') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="inputUsernameEmail">Username or email</label>
            <input type="text" class="form-control" id="inputUsernameEmail" name="emailLogin">
        </div>
        <div class="form-group">
            <a class="pull-right" href="#">Forgot password?</a>
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="passwordLogin">
        </div>
        <div class="checkbox pull-right">
        <label><input type="checkbox"> Remember me </label>
        </div>
        <button type="submit" class="btn btn btn-primary">
            Log In
        </button>
    </form>
  </div>

@endsection