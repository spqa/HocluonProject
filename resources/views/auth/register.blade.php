@extends('layouts.master')
@section('content')
<div class="section group">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" >
    <div class="grid_1_of_3 images_1_of_3 form-login">
        <div class="login">
            <h1>Register<span class="close-form">x</span></h1>
            <form method="post" action="{{ url('/register') }}">
                <p><input type="text" name="name" value="{{ old('name') }}" placeholder="Name"></p>
                <p><input type="email" name="email" value="{{ old('email') }}" placeholder="Email"></p>
                <p><input type="password" name="password" value="" placeholder="Password"></p>
                <p><input type="password" name="password_confirmation" value="" placeholder="Password Confirmation"></p>
                <p class="submit"><input type="submit" value="Register"></p>
                <p class="error-register">
                    {{ $errors->has('name')? $errors->first('name'):'' }}
                    {{ $errors->has('email')? $errors->first('name'):'' }}
                    {{ $errors->has('password')? $errors->first('password'):'' }}
                    {{ $errors->has('password_confirmation')? $errors->first('password_confirmation'):'' }}
                </p>
            </form>

            <div class="login-help">
                <a href="{{ url('/login') }}">Login</a>
                <span>-</span>
                <a href="#">Contact us</a>
            </div>
        </div>

    </div>
</div>
    @endsection