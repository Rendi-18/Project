<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funiture;

class FunitureController extends Controller
{

    public function home()
    {


        $funiture = Funiture::latest();

        if (request('search')) {
            $funiture->where('nama', 'like', '%' . request('search') . '%');
        }

        return view('Home', [
            "tittle" => "",
            "funitures" => $funiture->get()
        ]);
    }
}
