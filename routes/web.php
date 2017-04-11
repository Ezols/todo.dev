<?php


Route::get('user', 'UsersController@allusers');
Route::get('user/{id}', 'UsersController@showuser');
Route::get('.../{id}', 'UsersController@show');

Route::get( 'test', 'UsersController@manipulation');
Route::get('tasks', 'TasksController@index');

Route::get('loops', 'LoopsController@random');

Route::get('kd', 'KDController@KD');
Route::get('kd2', 'KD2Controller@KD2');

Route::as('user-filter')->get('getusers', 'GetUsersController@GetUsers');


Route::get('', 'DuumsController@duums');
