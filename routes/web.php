<?php

use App\Models\Application;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('form');
});

Route::post('/', function () {
    $request = request();

    $application = new \App\Models\Application();
    $application->firstname = $request->get('firstname');
    $application->lastname = $request->get('lastname');
    $application->email = $request->get('email');
    $application->session_id = session()->getId();
    $application->save();

    return redirect('/');

});

Route::get('/applications', function(){
    $applications = \App\Models\Application::all();

    //$declinedApplications = \App\Models\Application::where('answer', 'no') ->count();

    return view('applications', [
        'applications' => $applications,
    ]);
});
