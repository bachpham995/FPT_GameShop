@extends('layout.layout')
@section('title', 'Reset Password')
@section('page-name', 'New Password')
@section('content')

<div class="main-login">
    <h1 class="text-center login-banner">Reset Password</h1>
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            <p><i class="fa fa-exclamation-triangle mr-2"></i>{{Session::get('message')}} </p>
        </div>
    @endif

    <form action="{{ url('/newPass') }}" method="POST" class="form-login">
        @csrf
        <input type="text" name="token" value="{{ $results->RESET_TOKEN }}" hidden>
        <input type="text" name="userId" value="{{ $results->ID }}" hidden>
        @if ($errors->has('password'))
            <span class="pull-right" style="color: red">{{ $errors->first('password') }}</span>
        @endif
        <div class="clearfix"></div>
        <div class="input-group custom-input">
            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input id="password" type="password" class="form-control" name="password" placeholder="New Password">
        </div>
        @if ($errors->has('confirmPassword'))
            <span class="pull-right" style="color: red">{{ $errors->first('confirmPassword') }}</span>
        @endif
        <div class="clearfix"></div>
        <div class="input-group custom-input">
            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input id="passwordConfirm" type="password" class="form-control" name="confirmPassword" placeholder="Confirm Password">
        </div>
        
        <button type="submit" class="btn btn-block btn-primary">Reset Password <i class="fa fa-sign-in"></i></button>
    </form>
    <div class="clearfix"></div>
</div>

@endsection
