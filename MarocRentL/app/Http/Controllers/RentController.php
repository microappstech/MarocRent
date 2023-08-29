<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class RentController extends Controller
{
    public function index(){
        return View("Rents.index");
    }
}
