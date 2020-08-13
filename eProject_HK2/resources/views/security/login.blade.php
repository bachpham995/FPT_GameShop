@extends('layout.layout')
@section('title', 'login')
@section('page-name', 'Login')
@section('content')

<div class="main-login">
    <h1 class="text-center login-banner">Login</h1>
    @if(Session::has('message'))
        <div class="alert alert-danger" role="alert">
            <p><i class="fa fa-exclamation-triangle mr-2"></i>{{Session::get('message')}} </p>
        </div>
    @endif
    <input type="text" id="success" value="{{ (Session::has('success_message'))?(Session::get('success_message')):'false' }}" hidden>
    <form action="{{ url('checkLog') }}" method="POST" class="form-login">
        @csrf
        <div id='email' class="input-group custom-input">
            <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
            <input id="email" type="text" class="form-control" name="emailLogin" placeholder="Email">
        </div>
        @if ($errors->has('emailLogin'))
            <p class="text-right" style="color: red;">{{ $errors->first('emailLogin') }}</p>
        @endif
        <div class="input-group custom-input">
            <span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
            <input id="password" type="password" class="form-control" name="passwordLogin" placeholder="Password">
        </div>
        @if ($errors->has('passwordLogin'))
            <p class="text-right" style="color: red;">{{ $errors->first('passwordLogin') }}</p>
        @endif
        <div class="checkbox">
            <label><input type="checkbox" value="">Remember me</label>
        </div>
        
        <button type="submit" class="btn btn-block btn-primary">Login <i class="fa fa-sign-in"></i></button>
    </form>
    <div class="clearfix"></div>
    <div class="text-center">
        <p >Don't you have an account? <a href="{{ url('/register') }}" class="text-primary">Sign up</a></p>
        <p><a href="{{ url('/forget') }}" class="text-primary">Forgot your password?</a></p>
    </div>
</div>

@endsection

@section('script-section')
    <script>
        window.onload = function (){
            var message = document.getElementById('success').value;
            if (message != 'false'){ 
                alertify.success(message);
            }
        }
    </script>
@endsection
