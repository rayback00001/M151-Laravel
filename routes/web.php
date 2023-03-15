<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\EventController;
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

Route::get('/', [EventController::class, 'list']);

Route::get('/event/{id}', [EventController::class, 'show']);

Route::post('/event', [ApplicationController::class, 'create']);
Route::get('/applications', [ApplicationController::class, 'list']);
