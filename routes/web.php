<?php

use Illuminate\Support\Facades\Route;

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
