@extends('layouts.master')
@section('title', 'Events')
@section('content')

<div class="events">
    <h1>Alle Events</h1>

    @auth
            <div class="main">
                <a href="/create"><button class="eventbutton">Event erstellen</button></a>
            </div>
    @endauth
    <ul>
        @foreach($events as $event)
        <li><a href="/event/{{$event -> id}}">{{$event -> title}}</a>({{$event->applications->count()}})</li>
        @endforeach
    </ul>
</div>

@endsection
