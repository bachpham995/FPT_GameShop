@extends('layout.layout')
@section('title', 'login')
@section('page-name', 'Login')
@section('content')

<div class="main-login">
    <h3 class="text-center login-banner">Reset Your Password</h3>
    <p class="text-center">Please enter your email to reset password</p>
    <form action="getForgotPassword" class="form-login" method="POST">
        @csrf
        <input type="text" class="form-control" name="emailForget" placeholder="Email">
        <input type="submit" class="btn btn-primary" style="margin-top: 10px" value="Reset password">
    </form>
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            <p><i class="fa fa-exclamation-triangle mr-2"></i>{{Session::get('message')}} </p>
        </div>
    @endif
</div>

@endsection
