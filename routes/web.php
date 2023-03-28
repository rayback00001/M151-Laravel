<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Event\EventCollectionIterator;

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

Route::get('/', [EventController::class, 'list']);
Route::get('/event/{id}', [EventController::class, 'show']);
Route::post('/event/{id}', [ApplicationController::class, 'create']);
Route::get('/event/{id}/applications', [ApplicationController::class, 'list']);



Route::get('/create', function () {
    return view('eventcreate');
});

Route::post('/create', [EventController::class, 'create']);

Route::get('/login', function () {
    return view('login');
});


