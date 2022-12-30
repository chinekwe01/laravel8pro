<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FluentController extends Controller
{
    public function index(){
        echo "<h1>Fluent String</h>".'<br>';

        $slice = Str::of("Welcome to the Youtube Channel")->after("Welcome to");
        echo $slice .'<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->after('\\');
        echo $slice2 .'<br>';

        $string = Str::of('Hello ')->append('World!');
        echo $string . '<br>';

    }
}
