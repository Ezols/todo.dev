<?php

Route::get('user', 'UsersController@allusers');
Route::get('user/{id}', 'UsersController@showuser');
Route::get('.../{id}', 'UsersController@show');

Route::get('dūms', function ()
{
    return 'Vecīt, nēsi mīkstais, urulē džo.';
});