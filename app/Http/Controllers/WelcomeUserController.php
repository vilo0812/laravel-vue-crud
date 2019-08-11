<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{
    public function __invoke($nombre,$nickname=null){
    $nombre = ucfirst($nombre);
    if($nickname){
    return "eres el usuario $nombre y tu apodo es: $nickname";
    }else{
    return "eres el usuario $nombre";
    }
    }
}
