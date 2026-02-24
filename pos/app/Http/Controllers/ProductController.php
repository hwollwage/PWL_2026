<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function food() {
        return view('category.food');
    }

    public function beauty() {
        return view('category.beauty');
    }

    public function homecare() {
        return view('category.homecare');
    }

    public function baby() {
        return view('category.baby');
    }
}
