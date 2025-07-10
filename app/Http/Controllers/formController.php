<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class formController extends Controller
{
    //
    function formSubmit(Request $req){
        // return $req;
        // return $req->input();
        // return $req->all();
        echo "Form submitted successfully! <br> Name: "
         . $req->username 
         . "<br> Email: " 
         . $req->email 
         . "<br> password: " 
         . $req->password;
    }
}
