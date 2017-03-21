<?php

namespace App\Http\Controllers;

class LoopsController
{

    public function random()
    {
        $size = request()->get("size");
        $minn = request()->get("minn");
        //$min = request()->get("min");
       // $max = request()->get("max");
        $between = explode(",", request()->get("between"));
        $min = $between[0];
        $max = $between[1];

        $array = [];


        // Generate random array

        for($i = 0; $i < $size; $i++)
        {
            $array[] = rand($min, $max);
        }

        $data['array'] = $array;
        $data['size'] = $size;

        // Task Nr1. greater values

        $array2 = [];

        for($i = 0; $i < $size; $i++)
        {
            //dump($i,$array[$i]);

            if($array[$i] > $minn)
            {
                $array2[] = $array[$i];
            }
        }

        $data['minimal'] = $array2;
        $data['minn'] = $minn;

        // Task Nr2. kvadrats

        $array3 = [];

        for($i = 0; $i < count($array2); $i++)
        {
            $array3[] = $array2[$i] * $array2[$i];
        }
        $data['kvadrats'] = $array3;

        //  Task Nr3. nth element.

        $array4 = [];

        for($i = 0; $i < count($array3); $i += 3)
        {
            $array4[] = $array3[$i];
        }

        $data['nth'] = $array4;

        //dd($minn);

        // Task Nr4. Avarage

        $summ = 0;
        $count = 0;

        for($i = 0; $i < count($array4); $i++)
        {
            $summ = $summ + $array4[$i];
            $count = $count + $i;
        }


        if($count != 0)
        {
            $summ = round( $summ / $count, 2);
        }


        $data['average'] = $summ;

        return view( 'loops', $data);
    }


}