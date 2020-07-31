@extends('layout.layout')
@section('title', 'Register')
@section('content')

<div class="main">

    <h3>Register</h3>
    <div class="login-or">
        <hr class="hr-or">
        <span class="span-or">Sign up</span>
    </div>

    <form role="form" action="{{ url('checkLog') }}" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col-sm-6">
                {{-- <span class="pull-right" style="color: red">aaaaaaa</span> --}}
                <label for="inputUsernameEmail">First Name:</label>
                <input type="text" class="form-control" id="inputUsernameEmail" name="emailLogin">
            </div>
            <div class="form-group col-sm-6">
                {{-- <span class="pull-right" style="color: red">aaaaaaa</span> --}}
                <label for="inputUsernameEmail">Last Name:</label>
                <input type="text" class="form-control" id="inputUsernameEmail" name="emailLogin">
            </div>
        </div>
        <div class="form-group">
            {{-- <span class="pull-right" style="color: red">aaaaaaa</span> --}}
            <label for="inputUsernameEmail">Email:</label>
            <input type="text" class="form-control" id="inputUsernameEmail" name="emailLogin">
        </div>
        <div class="form-group">
            {{-- <span class="pull-right" style="color: red">aaaaaaa</span> --}}
            <label for="inputPassword">Password:</label>
            <input type="password" class="form-control" id="inputPassword" name="passwordLogin">
        </div>
        <div class="form-group">
            {{-- <span class="pull-right" style="color: red">aaaaaaa</span> --}}
            <label for="inputPassword">Confirm Password:</label>
            <input type="password" class="form-control" id="inputPassword" name="passwordLogin">
        </div>
        <a class="pull-right" href="#">Or login >>></a>
        <button type="submit" class="btn btn btn-primary">
            Register
        </button>
    </form>
  </div>

@endsection