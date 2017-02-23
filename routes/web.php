<?php

Route::get('/', 'Controller@index');

//Route::get('/allusers', 'Controller@allusers');


Route::get('/allusers', function () {
  //  $data['users'] = \App\User::where('name', 'janis')
      //  ->orderBy('email', 'asc')
       // ->get();


      $data['users'] = \App\User::all();
     // dd($data);
    return view('allusers', $data);
});

Route::get('/roberts', 'Controller@roberts');

Route::get('/nikita', 'Controller@nikita');