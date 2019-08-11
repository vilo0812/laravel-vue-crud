<?php

Route::get('/', function () {
    return view('welcome');
});
Route::get('/usuarios', function(){
 return "eres un usuario";
});
Route::get('/usuarios/{id}',function($id){
    return "eres un usuario y tu id es:  $id";
})->where('id','[0-9]+');
Route::get('usuarios/nombre',function(){
return "usuario crear";
});
Route::get('/usuarios/{nombre}/{nickname?}',function($nombre,$nickname=null){
if($nickname){
return "eres el usuario $nombre y tu apodo es: $nickname";
}else{
return "eres el usuario $nombre y no tienes nickname";
}
});
