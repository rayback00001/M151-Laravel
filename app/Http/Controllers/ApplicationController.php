<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
     public function create($id)
     {
         $request = request();
         
         $application = new Application();
         $application->answer = $request->get('answer');
         $application->firstname = $request->get('firstname');
         $application->lastname = $request->get('lastname');
         $application->email = $request->get('email');
         $application->session_id = session()->getId();
         $application->event_id = $id;
         $application->save();

         return redirect('/event/' . $id);
     }

    public function list($id){
        
        $applications = Application::where('event_id', $id)->where('answer', 'yes')->get();

        $declinedApplications = Application::where('event_id', $id)->where('answer', 'no')->count();

        return view('applications', [
            'eventId' => $id,
            'applications' => $applications,
            'declinedApplications' => $declinedApplications,
        
        ]);
    }
}


