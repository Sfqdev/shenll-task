<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;

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
    return view('home');
});

Route::get('/login', [AuthController::class, 'index']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('roles:admin')->group( function() { 
    Route::get('/page1', [Controller::class, 'page1']);
    Route::get('/page2', [Controller::class, 'page2']);
    });

Route::middleware('roles:user')->group( function() { 
    Route::get('/page3', [Controller::class, 'page3']);
    Route::get('/page4', [Controller::class, 'page4']);
    });

Route::post('/logout', [AuthController::class, 'logout']);
