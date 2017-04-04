<?php

namespace App\Http\Controllers;
use DB;

class GetUsersController
{
    public function GetUsers()
    {

        $email = request()->get('emails');

        if($email)
            $data['users'] = DB::table("users")->where('email', $email)->get();
        else
            $data['users'] = DB::table("users")->get();


        $data['usersselect'] = DB::table("users")->get();
        $data['email'] = $email;
        return view('getusers', $data);
    }



}