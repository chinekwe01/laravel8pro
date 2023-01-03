<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PaginationController extends Controller
{
    public function allUsers(){
        $users = User::paginate(10);
        return view('allusers', compact('users'));
    }
}
