<?php

namespace App\Http\Controllers;

class DuumsController
{
    public function duums()
    {
        $array = [];
        $size = 6;
        for($i = 0; $i < $size; $i++)
        {
            $array[] = rand(1,100);
        }

        $data['array'] = $array;
        return view('html', $data);
    }
}