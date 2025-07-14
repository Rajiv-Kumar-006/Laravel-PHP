<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider within a group
| which contains the "web" middleware group. Now create something great!
|
*/

//  Admin routes
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'show'])->name('dashboard');
    Route::get('/profile', [AdminController::class, 'profile'])->name('profile');
    Route::get('/settings', [AdminController::class, 'add'])->name('settings');
    Route::get('/user', [AdminController::class, 'user'])->name('user');
});

//  Home route
Route::get('/', function () {
    return view('welcome');
});

//  User home page
Route::get('/home', [UserController::class, 'userHome'])->name('home');

// About page with dynamic name
Route::get('/about/{name}', function ($name) {
    return view('about', compact('name'));
})->name('about');

//  Contact page with dynamic contact info
Route::get('/contact/{contactInfo}', function ($contactInfo) {
    return view('contact', ['contactInfo' => $contactInfo]);
})->name('contact');

//  UserController additional routes
// Route::get('/user', [UserController::class, 'getUser'])->name('user.index');
// Route::get('/about1', [UserController::class, 'getAbout'])->name('about1');
// Route::get('/username/{name}', [UserController::class, 'getUserName'])->name('username');
// Route::get('/display/username/{name}', [UserController::class, 'displayUserName'])->name('display.username');

//  route grouping with controllers
Route::controller(UserController::class)->group(function () {
    Route::get('/user', 'getUser')->name('user.index');
    Route::get('/about1', 'getAbout')->name('about1');
    Route::get('/username/{name}', 'getUserName')->name('username');
    Route::get('/display/username/{name}', 'displayUserName')->name('display.username');
});

// 🔷 Form routes
Route::get('/form', function () {
    return view('form.formhandle');
})->name('form');

Route::post('/form', [FormController::class, 'formSubmit'])->name('form.submit');
