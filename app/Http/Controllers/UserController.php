<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //control logics
    function userHome()
    {
        $name = "Rajiv";
        $users = ["Rajiv", "Rohit", "Sanjay", "Amit"];
        return view("home", [
            "name" => $name,
            "user" => $users
        ]);
    }
    
    function getUser()
    {
        return "<h2> Hello, This is the get user routes + controller </h2>";
    }
    function getAbout()
    {
        return "<h2> Hello, This is the get <span> about </span> routes + controller </h2> ";
    }
    function getUserName($name)
    {
        return "<h2> Hello, This is the get user routes + controller </h2>" . "<h3> $name</h3>";
    }
    function displayUserName($name)
    {
        return view("user", ["name" => $name]);
    }
}
