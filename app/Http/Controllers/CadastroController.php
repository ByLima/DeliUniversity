<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class CadastroController extends Controller
{
    public function store(request $request) {
	$cadastro = new User;
	$cadastro->nome = $request->nome;
	$cadastro->email = $request->email;
	$cadastro->senha = $request->senha;
	$cadastro->celular = $request->celular;
	$cadastro->sexo = $request->sexo;
	$cadastro->recebeNovidades = $request->recebeNovidades;
	$cadastro->save();
	return View("cadastroSucesso");
    }
}
