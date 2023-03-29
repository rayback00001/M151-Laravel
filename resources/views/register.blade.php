@extends('layouts.master')
@section('title', 'Register')
@section('content')

<div class="top">
    <h1>Registrieren</h1>
</div>

<div class="login">
    <form method="POST" action="{{route('register-user')}}">
        @csrf

        <div>
            <span class="text-danger">@error('name'){{$message}}@enderror</span>
            <input type="text" name="name" placeholder="Name" value="{{old('name')}}"><br>
        </div>

        <div>
            <span class="text-danger">@error('email'){{$message}}@enderror</span>
            <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
        </div>

        <div>
            <span class="text-danger">@error('password'){{$message}}@enderror</span>
            <input type="password" name="password" placeholder="Passwort"><br>
        </div>

        <div>
            <button type="submit">Registrieren</button>
        </div>

    </form>
</div>

@endsection
