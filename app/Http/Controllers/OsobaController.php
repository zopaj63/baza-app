<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Osoba;

class OsobaController extends Controller
{
    public function form()
    {
        return view("form");
    }

    public function store(Request $request)
    {
        $request->validate([
            "ime"=>"required|string|max:255",
            "prezime"=>"required|string|max:255"
        ]);

        Osoba::create($request->all());
        return redirect("/form")->with("sucess", "Osoba je uspješno spremljena");
    }

    public function show()
    {
        $osobe=Osoba::all();
        return view("show", ["osobe"=>$osobe]);
    }
}
