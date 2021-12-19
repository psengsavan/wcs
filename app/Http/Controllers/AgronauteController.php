<?php

namespace App\Http\Controllers;

use App\Models\Agronaute;
use Illuminate\Http\Request;

class AgronauteController extends Controller
{
    // public function index() {
    //     $agronautes = Agronaute::orderBy("name", "asc")->get();
    //     return view("welcome", compact("agronautes"));
    // }

    public function create(Request $request) {
        $agronaute = new Agronaute;
        $agronaute->name = $request->name;
        $agronaute->save();

        return back()->with("message", "Nouvel agronaute ajouté !");
    }
}
