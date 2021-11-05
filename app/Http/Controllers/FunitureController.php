<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funiture;

class FunitureController extends Controller
{

    public function home()
    {
        return view('Home', [
            "tittle" => "",
            "funitures" => Funiture::all()
        ]);
    }
}
