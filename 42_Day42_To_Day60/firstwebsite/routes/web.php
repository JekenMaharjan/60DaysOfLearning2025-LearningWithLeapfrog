<?php

// Import the Route facade to define web routes
use Illuminate\Support\Facades\Route;

// Import the Request class to handle HTTP request data
use Illuminate\Http\Request;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;


// -----------------------------------------------------------------------------------------------


// GET route for the homepage ('/')
// When someone visits the root URL, it returns the 'welcome' view
Route::get('/', function () {
    return view('welcome');
});

// Route with parameters: accepts firstname and lastname from the URL
// Example: /portfolio/John/Doe will return "John Doe"


/*
Route::get('/portfolio/{firstname}/{lastname}', function ($firstname, $lastname) {
    return $firstname . " " . $lastname;
    });
    
    // Named route example
    // This route can be referred to as 'testpage' in the code (like in redirects or links)
    Route::get('/test', function () {
        return "This is the Test!";
    })->name("testpage");

// Simple GET route that returns the 'portfolio' view when someone visits '/portfolio'
Route::get('/portfolio', function () {
    return view('portfolio');
})->name("portfolio");;

// Grouping routes under a common prefix 'portfolio'
Route::prefix("portfolio")->group(function () {

    // This route returns the 'about' view when someone visits '/portfolio/about'
    Route::get('/about', function () {
        return view('about');
    })->name("about");;

    // This route returns the 'contact' view when someone visits '/portfolio/contact'
    Route::get('/contact', function () {
        return view('contact');
    })->name("contact");;
});
*/

// -----------------------------------------------------------------------------------------------


// Define a POST route for the URL "/formsubmitted"
Route::post("/formsubmitted", function (Request $request) {

    // Validate the incoming request data
    // 'fullname' is required and must be between 3 to 30 characters
    // 'email' is required, must be a valid email, and between 3 to 30 characters
    $request->validate([
        'fullname' => 'required|min:3|max:30',
        'email' => 'required|min:3|max:30|email',
    ]);

    // Get the 'fullname' value from the submitted form
    $fullname = $request->input("fullname");

    // Get the 'email' value from the submitted form
    $email = $request->input("email");

    // Return a response message with the entered fullname and email
    return "Your fullname is $fullname and E-mail is $email!";
    
// Give a name "formsubmitted" to this route for easy reference
})->name("formsubmitted");


// -----------------------------------------------------------------------------------------------


// Route for the 'posts' controller
Route::resource('posts', PostController::class);


// -----------------------------------------------------------------------------------------------


// Route for the 'todolist' controller
Route::get('/tasks', [TaskController::class, 'index'])->name('tasks.index');
Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');
Route::delete('/tasks/{task}', [TaskController::class, 'destroy'])->name('tasks.destroy');


// -----------------------------------------------------------------------------------------------


// Route for the 'Portfolio' controller
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');
Route::get('/portfolio/about', [PortfolioController::class, 'about'])->name('portfolio.about');
Route::get('/portfolio/projects', [PortfolioController::class, 'projects'])->name('portfolio.projects');
Route::get('/portfolio/contact', [PortfolioController::class, 'contact'])->name('portfolio.contact');


// -----------------------------------------------------------------------------------------------


// Route for the 'Contact' controller
Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::resource('contacts', ContactController::class);