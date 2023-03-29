<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Event;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create($id)
    {

        $attributes = request()->validate(
            [
                'firstname' => 'required|max:100',
                'lastname' => 'required|max:100',
                'email' => 'required|email|',
                'answer' => 'required'
            ],

            [
                'firstname.required' => 'Vorname eingeben!',
                'lastname.required' => 'Nachname eingeben!',
                'email.required' => 'Email eingeben!',
            ]
        );


        $application = new Application();
        $application->fill($attributes);
        $application->session_id = session()->getId();
        $application->event_id = $id;
        $application->save();

        session()->flash('success', 'Ihre Anmeldung wurde erfolgreich betätigt');

        return redirect('/event/' . $id);
    }

    public function list($id)
    {

        $event = Event::findOrFail($id);
        $applications = $event->applications->where('answer', 'yes');
        $declinedApplications = $event->applications->where('answer', 'no')->count();

        //$applications = Application::where('event_id', $id)->where('answer', 'yes')->get();
        //$declinedApplications = Application::where('event_id', $id)->where('answer', 'no')->count();

        return view('applications', [
            'event' => $event,
            'eventId' => $id,
            'applications' => $applications,
            'declinedApplications' => $declinedApplications,

        ]);
    }
}
