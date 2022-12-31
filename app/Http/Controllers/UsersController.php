<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    // Function to display all users
    public function index(){
        $name = 'Jennifer';
        $users = array(
            "name"=>"John Smith",
            "email"=>"js@test.test",
            "phone"=>"08123456789"
        );
        return view('users', compact("name", "users"));
    }
}
