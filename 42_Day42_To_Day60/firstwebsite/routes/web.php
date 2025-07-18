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

// Named routes
Route::get('/test',function () {
    return "This is the Test!";
})->name("testpage");

// Grouped routes | Portfolio related routes
Route::get('/portfolio', function (){
    return view('portfolio');
});

Route::prefix("portfolio")->group(function(){
    Route::get('/about', function (){
    return view('about');
    });

    Route::get('/contact', function (){
        return view('contact');
    });
});
