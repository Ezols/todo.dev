<?php

namespace App\Http\Controllers;
use DB;

class GetUsersController
{
    public function GetUsers()
    {
        $email = request()->get('email');
        $data['email'] = $email;
        $unique = [];

        if($email)
            $data['users'] = DB::table("users")->where('email', "like", "%".$email)->get();
        else
            $data['users'] = DB::table("users")->get();

        $domain = DB::table("users")
            ->select('email' )
            ->get()
            ->map(function ($user) {
                return "@" . explode('@', $user->email)[1];
            });



        for($i = 0; $i < count($domain); $i++)
        {
            if(in_array($domain[$i], $unique    ))
            {

                dump(5);
            }
            else
            {
                dump(6);
                $unique[] = $domain[$i];
            }

        }



        $data['usersselect'] = $unique;
        return view('getusers', $data);
    }



}