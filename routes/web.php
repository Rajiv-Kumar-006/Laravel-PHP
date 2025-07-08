<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get("/home", function () {
    return view("home");
});

Route::get("/about/{name}", function ($name) {
    // $name = "Laravel 12";
    return view("about", compact("name"));
});

Route::get("/contact/{contactInfo}", function ($contactInfo) {
    // $name = "Laravel 12";
    return view("contact", compact("contactInfo"));
});