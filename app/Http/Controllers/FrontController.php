<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front-end.home.home');
    }
    public function category(){
        return view('front-end.category.category');
    }
}
