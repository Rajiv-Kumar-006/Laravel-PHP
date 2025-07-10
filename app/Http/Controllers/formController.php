<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    function formSubmit(Request $req)
    {
        // Step 1: Validate inputs
        $req->validate([
            'username' => 'required|string|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'skill' => 'required|array|min:1',
            'gender' => 'required|in:male,female',
            'country' => 'required|string',
            'age' => 'required|integer|min:1|max:100',
        ]);
        
        // return $req;
        // return $req->input();
        // return $req->all();
        echo "Form submitted successfully! <br> Name: "
            . $req->username
            . "<br> Email: "
            . $req->email
            . "<br> password: "
            . $req->password
            . "<br> Gender: "
            . $req->gender
            . "<br> Country: "
            . $req->country
            . "<br> Age: "
            . $req->age;

        echo "<br> Skills: ";
        foreach ($req->skill as $skill) {
            echo $skill . " ";
        }
    }
}
