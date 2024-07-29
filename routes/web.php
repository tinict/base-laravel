<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


// Routing
// Create route basic
Route::get('/test', function () {
    return 'Hello world!';
});

// Route::view
Route::view('/test-view', 'welcome', ['name' =>  'Tinmy Nguyen']);

Route::get('/test-controller', [UserController::class, 'show']);
