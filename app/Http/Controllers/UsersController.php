<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Function to display all users
    public function index(Request $request)
    {
        // return $request->method();
        // return $request->path();
        // return $request->url();
        return $request->fullUrl();
    }
}