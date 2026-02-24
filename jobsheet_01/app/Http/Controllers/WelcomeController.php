<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function hello() {
        return "Hello World";
    }

    public function greeting() {
        //return view("blog.hello", ["name" => "hanzel"]);
        return view('blog.hello')
            ->with('name', 'Hanzel')
            ->with('occupation', 'engineer');
    }
}
