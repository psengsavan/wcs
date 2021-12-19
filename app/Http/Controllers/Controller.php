<?php

namespace App\Http\Controllers;

use App\Models\Agronaute;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index() {
        $agronautes = Agronaute::all()->sortBy("name");
        return view("welcome", ["agronautes" => $agronautes]);
    }
}