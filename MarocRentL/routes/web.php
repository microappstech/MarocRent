<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RentController;

Route::get('/',[HomeController::class,"index"]);
Route::get("/about", [HomeController::class,"about"] )->name("home.about");
Route::get("/Contact", [HomeController::class,"contact"])->name("home.contact");
Route::get("/Rents", [RentController::class, "index"])->name("AllRents");
Route::get("/Rents/Create", [RentController::class, "Create"])->name("CreateRent");
Route::post("/Rents/Post", [RentController::class, "Store"])->name("StoreRent");
Route::get("/Posts",[PostController::class, "index"])->name("AllPosts");
Route::get('/', function () {
    return view('index');
});
