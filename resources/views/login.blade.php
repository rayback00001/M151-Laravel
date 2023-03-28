@extends('layouts.master')
@section('title', 'Login')
@section('content')

<div class="top">
    <h1>Einloggen</h1>
</div>

<div class="login">
    <div class="alert-danger">{{Session::get('fail')}}</div>
    <form method="POST" action="{{route('login-user')}}">
        @csrf

        <div>
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
            <input type="email" name="email" placeholder="Name" value="{{old('email')}}"><br>
        </div>

        <div>
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
            <input type="password" name="password" placeholder="Passwort"><br>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>

    </form>
</div>

@endsection