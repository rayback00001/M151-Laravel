@extends('layouts.master')
@section('title', 'Events')
@section('content')

<div class="events">
    <h1>Alle Events</h1>
    <ul>
        @foreach($events as $event)
        <li><a href="/event/{{$event -> id}}">{{$event -> title}}</a></li>
        @endforeach
    </ul>
</div>

@endsection
