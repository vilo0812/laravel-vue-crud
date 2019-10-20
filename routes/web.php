<?php
Route::get('/usuarios','UserController@index');

Route::get('/usuarios/{user}','UserController@show')->where('id','[0-9]+');
Route::get('usuarios/nombre','UserController@create');
Route::get('/saludo/{nombre}/{nickname?}','WelcomeUserController');
Route::get('/{any}',function(){
	return view('app');
})->where('any', '.*');
