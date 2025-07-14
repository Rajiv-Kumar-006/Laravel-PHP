<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    function show()
    {
        return view("admin.adminDashboard");
    }
    //
    function add()
    {
        return view("admin.adminSettings");
    }

    function user()
    {
        return view("admin.adminUser");
    }
};
