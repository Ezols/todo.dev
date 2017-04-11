<?php

namespace App\Http\Controllers;
use DB;

class GetUsersController
{
    public function GetUsers()
    {
        $email = request()->get('email');

        if($email)
            $data['users'] = DB::table("users")->where('email', "like", "%".$email)->get();
        else
            $data['users'] = DB::table("users")->get();

        $data['usersselect'] = DB::table("users")
            ->select('email' )
            ->get()
            ->map(function ($user) {
                return "@" . explode('@', $user->email)[1];
            });


        $data['email'] = $email;

        return view('getusers', $data);
    }



}