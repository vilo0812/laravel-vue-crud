<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users= [
            'Joel',
            'Timmy',
            'Davinson',
            'Katiana',
            'Diana',
            '<script>alert("clicker")</script>',
        ];
        $title = 'listado de usuarios';

        /*return view("users",[
            'users' => $users,
            'title' => 'listado de usuarios'
        ]
    );*/
    /*return view("users")
         ->with('users',$users)
         ->with('title','listado de usuarios'); */
         return view("users", compact('users','title'));
    }
    public function show($id){
        return "eres un usuario y tu id es:$id";
    }
    public function create(){
        return "usuario crear";
    }
}
