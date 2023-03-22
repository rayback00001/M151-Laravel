@extends('layouts.master')
@section('title', 'Applications')
@section('content')

<div class="application">
    <h1>Anmeldungen</h1>
</div>
<div class="application">
    <ul>
        @foreach($applications as $application)
        <li>{{$application->firstname}} {{$application->lastname}}</li>
        @endforeach
    </ul>
    <small>{{$declinedApplications}} Abmeldungen</small>
    <a href="{{url()->previous()}}">Zurück</a>
</div>

@endsection
