@extends('base')

@section('content')
  <style>
    body{ 
      background-image:url("{{ asset('imagens/fast-food.jpg') }}" );
      margin: auto;
        width: 50%;
        padding: 10px;
       }

    .msg-sucesso{
      color: #fff;

    }

    .div-sucesso{
      display: flex;
      justify-content: center;
      flex-direction: column;
      align-items: center;
      height: 100%;
      width: 100%;
    }
    .btn-voltar{
      background: #1e82c0;
      color: #fff;
      border: 1px solid #fff;
      width: 140px;
      margin-top: 10px;
      text-align: center;
      padding: 10px;
      border-radius:5px;
      margin-top: 40px


    }
    .btn-voltar:hover{
      background: #fff;
      color: #1e82c0;
      border: 1px solid #1e82c0 ;
      transition: 0.8s;
    }
    .container{
      height: 100%
    }

  </style>
<div class="div-sucesso">
  <h1 class="msg-sucesso">
    Cadastro realizado com sucesso!
  </h1>
  <a class="btn-voltar" href="/" >Voltar</a>
</div>
@endsection