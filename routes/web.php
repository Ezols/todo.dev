<?php

Route::get('allusers', 'UsersController@allusers');
Route::get('user/{id}', 'UsersController@show');

Route::get('dūms', function ()
{
    return 'Sazimē dūmu';
});