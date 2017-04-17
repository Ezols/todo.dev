<?php

namespace App\Http\Controllers;

class CollorController
{

    public function Collor()
    {
        $x = request()->get('x');
        $y = request()->get('y');

        $asd = 1;
        $data['data'] = $asd;

        return view('Collor', $data);
    }
}
