<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "usuarios";
    }
    public function show($id){
        return "eres un usuario y tu id es:$id";
    }
    public function create(){
        return "usuario crear";
    }
}
