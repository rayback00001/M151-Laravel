<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function show($id)
    {
        $event = Event::findOrFail($id);
        return view('event', [
            'event' => $event,
            'id' => $id
        ]);
    }
    
    public function list()
    {
        $events = Event::all();

        return view('events', [
            'events' => $events
        ]);
    }
}
