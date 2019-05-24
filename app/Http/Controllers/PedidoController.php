<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PedidoController extends Controller
{
    public function index(request $request) {
		return View("pedido");
    }


    public function realizarPedido(request $request) {
		return View("realizarPedido");
    }
}

