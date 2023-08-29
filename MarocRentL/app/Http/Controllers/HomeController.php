<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return "<h1>index</h1>";
    }
    public function about(){
        return view("about");
    }
    public function contact(){
        return view("contact");
    }
}
