<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class AdminRentController extends Controller
{
    public function Index(){
        return View("Admin.Rents.List");
    }
}
