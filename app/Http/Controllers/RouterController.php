<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class routerController extends Controller
{
    public function index() {
  		return view('app');
  }
}
