<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/landing', function () {
    return view('landing-page');
});

Route::get('/login', function () {
    return view('login');
});

Route::post('/dashboard', function() {
    return view('dashboard');
});

Route::get('/registration', function () {
    return view('registration');
});


// Route::get('/login', [LoginController::class, 'showLogin']);
// Route::post('/dashboard', [LoginController::class, 'processLogin'])->middleware('web');
// Route::get('/registration', [RegistrationController::class, 'showRegistration']);