@extends('base')

@section('content')
<head>
	<title>Cadastro</title>
	
	<style>
		body{ 
			background-color: #EB7B30;
			margin: auto;
    		width: 50%;
   		 	
       }
       .card-deck{
    height: 100%;
    display: flex;
    flex-direction: column;
    flex-wrap: unset;

       }
       .card{
    margin-bottom: 54px !important;
    border-radius: 20px !important;


       }

       .card img{
    height: 645px;
    border-radius: 20px;

       }
       .card-footer{
    border-bottom-left-radius: 20px;
    padding: 0 !important;
    border-bottom-right-radius: 20px;
    height: 79px;
       }
       .card-footer button{
    width: 100%;
    height: 100%;
    font-size: 40px;
       }

       .card-text{
       	font-size: 28px;

       }

       .card-title{
       	font-size: 42px;
       }


</style>
</head>
<body>
	
	<div class="card-deck">
    <div class="card-header">
      <button type="button" class="btn btn-danger">Pendentes</button>
      <button type="button" class="btn btn-success">Realizados</button>
      <p>Total:10</p>
    </div>
  <div class="card">
    <img src="imagens/empadinha.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Empadinhas</h5>
      <p class="card-text">Empadinhas cremosas de frango.</br>
      R$ 2,00</p>
    </div>
    <div class="card-footer">
      <button type="button" class="btn btn-success">Mais informações</button>
    </div>
  </div>
</div>
</body>
@endsection