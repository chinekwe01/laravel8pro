<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FluentController extends Controller
{
    public function index()
    {
        echo '<h1>Fluent String</h>' . '<br>';

        $slice = Str::of('Welcome to the Youtube Channel')->after('Welcome to');
        echo $slice . '<br>';

        $slice2 = Str::of('App\Http\Controllers\Controller')->after('\\');
        echo $slice2 . '<br>';

        $string = Str::of('Hello ')->append('World!');
        echo $string . '<br>';

        $result = Str::of('LARAVEL 8')->lower();
        echo $result . '<br>';

        $replaced = Str::of('Laravel 7.0 ')->replace('7.0', '8.0');
        echo $replaced . '<br>';

        $converted = Str::of('This is a title')->title();
        echo $converted . '<br>';

        $slug = Str::of('Laravel 8 Framework')->slug();
        echo $slug . '<br>';
    }
}