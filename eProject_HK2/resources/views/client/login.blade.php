@extends('layout.layout')
@section('title', 'login')
@section('content')

<div class="main" style="margin-bottom: 50px;">

    <h3>Please Log In, or <a href="#">Sign Up</a></h3>
    <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">or</span>
    </div>

    <form role="form" action="{{ url('checkLog') }}" method="POST">
        @csrf
        <input hidden type="text" name="urlLastPage" value="{{$lastPage??""}}">
        <div class="form-group">
            @if ($errors->has('emailLogin'))
                <span class="pull-right" style="color: red">{{ $errors->first('emailLogin') }}</span>
            @endif
            <label for="inputUsernameEmail">Email</label>
            <input type="text" class="form-control" id="inputUsernameEmail" name="emailLogin">
        </div>
        <div class="form-group">
            @if ($errors->has('passwordLogin'))
                <span class="pull-right" style="color: red">{{ $errors->first('passwordLogin') }}</span>
            @endif
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" id="inputPassword" name="passwordLogin">
        </div>
        <a class="pull-right" href="#">Forgot password?</a>
        <button type="submit" class="btn btn btn-primary">
            Log In
        </button>
    </form>
</div>

@endsection
