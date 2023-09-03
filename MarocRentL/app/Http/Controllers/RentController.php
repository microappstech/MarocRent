<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\Rents;

class RentController extends Controller
{
    public function index(){
        $rents = Rents::all(["*"]);
        return View("Rents.index",["rents"=>$rents]);
    }
    public function Create()
    {
        return View("Rents.Create");
    }

    Public function Store(Request $request){
        $Rent  = new Rents();
        $Rent->title = $request->input("title");
        $Rent->adresse = $request->input("adresse");
        $Rent->description = $request->input("description");
        $Rent->city = $request->input("city");
        $Rent->price = $request->input("price");
        $Rent->daily = 0;
        $Rent->monthly = 0;
        $Rent->TypeRent = $request->input("TypeRent");
        $Rent->save();
        return redirect()->route("AllRents");

    }
    public function ShowDetail(int $id){
        $rent = Rents::find($id);
        return View("Rents.Details",["rent"=>$rent]);
    }


}
