@extends('base')

@section('content')
<head>
	<title>Cadastro</title>
	<h1 style="font-size: 65px">Cadastre-se</h1>
	<style>
		body{
            background-color: #1e82c0;

       }
        form label, h1 {
        color: #fff
        }

        h1{
        margin-bottom: 30px;
        }
        .container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 63px;
            padding: 16px;
            margin-right: auto !important;
            margin-left: auto !important;
        }

        button{
        background: #1e82c0;
        color: #fff;
        border: 1px solid #fff;
        width: 140px;
        margin-top: 10px;

        }
        button:hover{
        background: #fff;
        color: #1e82c0;
        border: 1px solid #1e82c0 ;
        transition: 0.8s;
        }
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            width: 100%;
            margin-top: 60px;
        }

        .form-group{
            width: 100%
        }
        form label{
            font-size: 43px
        }
        form input{
            height: 65px;
            font-size: 35px !important;
            border-radius: 9px !important;
        }
        form .btn{
            font-size: 36px;
        height: 70px;
        width: 100%;
        border: 2px solid white;
        margin-top: 33px;
        }
</style>
</head>
<form method="POST" action="/cadastro">
{{ csrf_field() }}
    <div class="form-group  ">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome">
    </div>

    <div class="form-group  ">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email">
    </div>
    <div class="form-group  ">
      <label for="cargo">Celular</label>
      <input type="text" class="form-control" id="cargo">
    </div>

    <div class="form-group  ">
      <label for="cargo">Senha</label>
      <input type="text" class="form-control" id="cargo">
    </div>

    <div class="form-group  ">
      <label for="cargo">Confirme sua senha</label>
      <input type="text" class="form-control" id="cargo">
    </div>


  <div class="form-row" style="display: flex; justify-content: center;">
    <button type="submit" class="btn center">Cadastrar</button>
  </div>
</form>
@endsection
