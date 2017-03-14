<?php

Route::get('user', 'UsersController@allusers');
Route::get('user/{id}', 'UsersController@showuser');
Route::get('.../{id}', 'UsersController@show');

Route::get( 'test', 'UsersController@manipulation');
Route::get('tasks', 'TasksController@index');



Route::get('dūms', function ()
{
    return 'Vecīt, nēsi mīkstais, urulē džo.';
});