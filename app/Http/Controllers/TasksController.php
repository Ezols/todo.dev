<?php

namespace App\Http\Controllers;

class TasksController
{
    public  function index()
    {
        $numbers = [1,2,3,4,5,6];


        //dd(request()->all);
        // Request number
        $num = request()->get('number');
        $numbers[] = (int) $num;

         // Sum
        $sum = array_sum($numbers);
        $numbers[] = $sum;



        $numbers[] = $numbers[2] * $numbers[1];
        $divide = $numbers[6] / $numbers[7];

        array_unshift($numbers, $divide);

        dump($numbers);
        return $numbers;

    }

}