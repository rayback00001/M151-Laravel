@extends('layouts.master')
@section('title', 'Event erstellen')
@section('content')


<div class="top">
    <h1>Event erstellen</h1>
</div>


<form method="POST" action="?">
    @csrf

    <div>
        <span class="text-danger">@error('title'){{$message}}@enderror</span>
        <label for="title">Titel</label>
        <input type="text" name="title" placeholder="Titel" value="{{old('title')}}"><br>
    </div>

    <div>
        <span class="text-danger">@error('description'){{$message}}@enderror</span>
        <label for="description">Beschreibung</label>
        <textarea name="description"></textarea>
    </div>

    <div>
        <span class="text-danger">@error('date'){{$message}}@enderror</span>
        <label for="date">Datum</label>
        <input type="date" name="date" placeholder="Datum" value="{{old('date')}}"><br>
    </div>

    <div>
        <button type="submit">Event erstellen</button>
    </div>


</form>
@endsection