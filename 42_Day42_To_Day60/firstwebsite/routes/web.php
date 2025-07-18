<?php

use Illuminate\Support\Facades\Route;

// Get route example
Route::get('/', function () {
    return view('welcome');
});

// Parameters using routes
Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . " " . $lastname;
});

