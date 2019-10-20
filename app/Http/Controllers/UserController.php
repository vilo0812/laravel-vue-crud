<?php


namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        //verificamos si esta vacio el request
        /*if(request()->has('empty')){
            $users=[];
        }
        }else{
            $users= [
                'Joel','gabriel','Timmy','Davinson','Katiana','Diana'
            ];
        }*/
         //otro metodo de concadenacion
        /*return view("users",[
            'users' => $users,
            'title' => 'listado de usuarios'
        ]
    );*/
    //otro metodo de concadenacion
    /*return view("users")
         ->with('users',$users)
         ->with('title','listado de usuarios'); */

         $users = User::all();

         // dd($users);
         return $users;
         //return view("users", compact('users'));

         //return response()->view('error.404',[],404);
    }
    public function show(User $user){
        return $user;
/*        if(request()->has('empty')){
            $users=[];
        }else{
            $users=[
                'gabriel',
                'ramon',
                'jesus',
                'gean'
            ];
        }
        $id=$id;
        $frontendVue='bienvenido desarrollador de Vue';
        $frontendReact='bienvenido desarrollador de React';
        $backendLaravel='bienvenido desarrollador de Laravel';
        return view("show",compact('users','frontendVue','frontendReact','backendLaravel','id'));
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
        }*/
        //$users = User::find($id);
        //return $users;
        //return view("create",compact("users"));
    }
}
