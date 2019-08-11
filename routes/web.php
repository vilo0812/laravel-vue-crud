<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios','UserController@index');
Route::get('/usuarios/{id}','UserController@show')
->where('id','[0-9]+');
Route::get('usuarios/nombre','UserController@create');
Route::get('/saludo/{nombre}/{nickname?}','WelcomeUserController');
