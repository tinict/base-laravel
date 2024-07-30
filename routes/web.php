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

// Route::get('/test-controller/123', [UserController::class, 'show']);

Route::get('/user/{id}/comment/{content}', [UserController::class, 'show']);

//Optional Route
Route::get('/use/${id?}/comment', function (?string $id = 'John') {
    return $id;
});

//Regular Exception Contrains
Route:get('use/"{name}', function (string $name) {
    return $name;
}).where('name', '[A-Za-z]+');
