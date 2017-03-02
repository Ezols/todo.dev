<?php


namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
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



}