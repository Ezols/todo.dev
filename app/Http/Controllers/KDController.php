<?php

namespace App\Http\Controllers;

class KDController
{
    public function KD()
    {
        $size = request()->get("size");
        $num = request()->get("number");

        $min = $size / 2;
        $max = $size * 2;

        $array = [];

        for($i = 0; $i < $size * 2; $i++)
        {
            $array[] = rand($min,$max);
        }


        $data['array'] = $array;

        $array2 = [];
        $count = 0;

        //  atlasīt un izvadīt viewā, visus elemntus kuri ir vienādi vai mazāki par citu get paramtery(turpmāk minēts kā y)

        for($i = 0; $i < $size * 2; $i++)
        {
            if ($array[$i] <= $num )
            {
                    $array2[] = $array[$i];
                    $count++;
            }
        }


        $data['array2'] = $array2;
        $data['count'] = $count;



        return view('KD', $data);
    }
}

