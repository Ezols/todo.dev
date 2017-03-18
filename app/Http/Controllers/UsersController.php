<?php


namespace App\Http\Controllers;

use App\User;

class UsersController
{
    public function show($id)
    {
        return  $id;
    }

    public function showuser($id)
    {
        $data['user'] = User::findorFail($id);

        return view('show', $data);
    }

    public function allusers()
    {
        $data['users'] = User::all();
        return view('users', $data);
    }

    public function manipulation()
    {
        $name = 'janis';
        $surname = 'tavamamma';
        $randomdata = [1,2,3,4,5,6,7,8,9,10,11,12,13];
        $data = [];

        $data['name'] = ucfirst($name);
        $data['surname'] = strtoupper($surname);

        $data['randomdata'] = implode(" ",$randomdata);
        $data['randomdata2'] = max($randomdata);
        $data['randomdata3'] = min($randomdata);
        $data['randomdata4'] = array_sum($randomdata);
        $data['count'] = count($randomdata);
        $data['avarage'] = array_sum($randomdata) / count($randomdata);
        return view('manipulation', $data);
    }



}