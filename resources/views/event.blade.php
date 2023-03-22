@extends('layouts.master')
@section('title', 'Event')
@section('content')

<div class="event-details">
    <h1>{{$event->title}}</h1><br>
    <p>{{$event->description}}</p>
    <p>Datum: {{$event->date}}</p>
</div>

<div class="top">
    <h1>Anmeldung Event</h1>
    <p>Melden Sie sich für diesen Event an</p>
</div>




<form method="POST" action="?">
    @csrf

    <div class="radio-btn">
        <div class="choice">
            <input type="radio" value="yes" id="yes" name="answer" checked />
            <label for="yes" class="radio">Ja, ich bin dabei</label>
        </div>
        <div class="choice">
            <input type="radio" value="no" id="no" name="answer" />
            <label for="no" class="radio">Nein, ich kann leider nicht</label>
        </div>
    </div>

    <div>
        <span class="text-danger">@error('firstname'){{$message}}@enderror</span>
        <input type="text" name="firstname" placeholder="Vorname" value="{{old('firstname')}}"><br>
    </div>

    <div>
        <span class="text-danger">@error('lastname'){{$message}}@enderror</span>
        <input type="text" name="lastname" placeholder="Name" value="{{old('lastname')}}"><br>
    </div>

    <div>
        <span class="text-danger">@error('email'){{$message}}@enderror</span>
        <input type="email" name="email" placeholder="Email" value="{{old('email')}}"><br>
    </div>

    <div>
        <button type="submit">Absenden</button>
    </div>


</form>

<a href="{{$id}}/applications">Anmeldungen ansehen</a>

    @if(session()->get('success'))
    <div class="success-msg">
        <p>{{session('success')}}</p>
    </div>
    @endif

@endsection

