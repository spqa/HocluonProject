@extends('layouts.master')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}" >
<div class="section group">
    <div class="grid_1_of_3 images_1_of_3 form-login">
        <div class="login">
            <h1>Login to Web App<span class="close-form">x</span></h1>
            <form method="post" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                <p><input type="text" name="email" value="" placeholder="Username"></p>
                <p><input type="password" name="password" value="" placeholder="Password"></p>
                <p class="remember_me">
                    <label>
                        <input type="checkbox" name="remember" id="remember_me">
                        Remember me on this computer
                    </label>
                </p>
                <p class="submit"><input type="submit" name="commit" value="Login"></p>
                <p class="error-login">
                    {{$errors->has('email')? $errors->first('email'):''}}
                    {{$errors->has('password')? $errors->first('password'):''}}
                </p>
            </form>

            <div class="login-help">
                <a href="{{ url('/register') }}">Register</a>
                <span>-</span>
                <a href="{{ url('/password/reset') }}">Forgot Password</a>
            </div>
        </div>

    </div>
</div>
    @endsection