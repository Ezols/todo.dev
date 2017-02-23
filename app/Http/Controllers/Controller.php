<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return "Tava mamma";
    }

    public function allusers()
    {

       // $flipghts = \App\ECHNorth::all()->take(1);
       // dd($flipghts);




        return view('allusers');
    }

    public function roberts()
    {
        return "Mammucs";
    }
    public function nikita()
    {
        return "Pro";
    }
}


