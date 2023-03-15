<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create()
    {
        $request = request();

        $application = new Application();
        $application->answer = $request->get('answer');
        $application->firstname = $request->get('firstname');
        $application->lastname = $request->get('lastname');
        $application->email = $request->get('email');
        $application->session_id = session()->getId();
        $application->save();
    
        return redirect('/event');
    }

    public function list(){
        $applications = Application::where('answer', 'yes')->get();

        $declinedApplications = Application::where('answer', 'no') ->count();

        return view('applications', [
        
            'applications' => $applications,
            'declinedApplications' => $declinedApplications
        
        ]);
    }
}


