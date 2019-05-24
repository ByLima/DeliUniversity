<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\usuarios;

class LoginController extends Controller
{
    public function index(request $request) {
		return View("login");
    }

    public function store(request $request){
    	$usuarios = new usuarios; 

    }
    

}
