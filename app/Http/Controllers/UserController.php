<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        if(request()->has('empty')){
            $users=[];
        }else{
            $users= [
                'Joel','gabriel','Timmy','Davinson','Katiana','Diana'
            ];
        }
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
        if(request()->has('empty')){
            $users=[];
        }else{
            $users=[
                'gabriel',
                'ramon',
                'jesus',
                'gean'
            ];
        }
        $frontendVue='bienvenido desarrollador de Vue';
        $frontendReact='bienvenido desarrollador de React';
        $backendLaravel='bienvenido desarrollador de Laravel';
        return view("show",compact('users','frontendVue','frontendReact','backendLaravel'));
    }
    public function create(){
        if(request()->has('empty')){
            $users=[];
        }else{
            $users=[
                'gabriel',
                'jesus',
                'ramon',
                'gean'
            ];
        }
        return view("create",compact("users"));
    }
}
