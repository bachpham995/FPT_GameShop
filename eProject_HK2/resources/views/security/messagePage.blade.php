@extends('layout.layout')
@section('title', 'Get-email')
@section('content')
    <h1 class="text-center">Successful! Please check your email to verify your password.</h1>
    <p class="text-center">Please click this link to return the homepage: <a href="{{ url('/index') }}" style="text-decoration: underline; color:blue;">DevilShop</a></p>
@endsection
