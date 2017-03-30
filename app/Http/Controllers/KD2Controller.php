<?php

namespace App\Http\Controllers;

class KD2Controller
{
    public function KD2()
    {

        $names = explode( ",", request()->get('names'));
        $rand = request()->get('rand');
        //$names = request()->get('names');

        $count = count($names);



        $array = [];

        for($i = 0; $i < $rand; $i++)
        {
            $randomName = array_rand($names);
            $account = rand(-100,100);
            $age = rand(0,100);

            $array[] =
                [
                "name" => $names[$randomName],
                "age" => $age,
                "ballance" => $account
                ];

        }




        $data['randomName'] = $randomName;
        $data['account'] = $account;
        $data['age'] = $age;
        $data['users'] = $array;
        return view('KD2', $data);
    }
}