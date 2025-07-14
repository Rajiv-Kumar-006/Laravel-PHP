<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\formController;
use App\Http\Controllers\adminController;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/home", [UserController::class, "userHome"]);

Route::get("/about/{name}", function ($name) {
    // $name = "Laravel 12";
    return view("about", compact("name"));
});

Route::get("/contact/{contactInfo}", function ($contactInfo) {
   
    return view("contact", [ "contactInfo" => $contactInfo ]);
});

// controller routes call 
Route::get("user", [UserController::class, "getUser"]);
Route::get("about1", [UserController::class, "getAbout"]);
Route::get("username/{name}", [UserController::class, "getUserName"]);

Route::get("display/username/{name}",[ UserController::class, "displayUserName"]);


// ✅ Show form page
Route::get("form", function () {
    return view("form.formhandle");
});

// ✅ Handle form POST submission
Route::post("form", [formController::class, "formSubmit"]);



// Admin routes
Route::prefix("admin")->group(function(){
    Route::get("/dashboard",[adminController::class, "show"])->name("admin.dashboard");
    Route::get("/settings",[adminController::class, "add"])->name("admin.setting");
    Route::get("/user",[adminController::class, "user"])->name("admin.user");
});