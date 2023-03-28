@extends('layouts.master')
@section('title', 'Login')
@section('content')

<div class="top">
    <h1>Einloggen</h1>
</div>

<div class="login">
    <form method="POST" action="?">
        @csrf

        <div>
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
            <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
        </div>

        <div>
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
            <input type="password" name="password" placeholder="Passwort" value="{{old('password')}}"><br>
        </div>

        <div>
            <button type="submit">Login</button>
        </div>

    </form>
</div>

@endsection