<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class ProdutoController extends Controller
{
    public function index(request $request) {
		return View("detalheProduto");
    }
}