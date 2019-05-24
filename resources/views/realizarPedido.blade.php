@extends('base')

@section('content')
<head>
	<title>Produto</title>
	
	<style>
		body{ 
			background-color: #EB7B30;
			margin: auto;
    		width: 50%;
   		 	
       }
       .card-deck{
  
    display: flex;
    flex-direction: column;
    flex-wrap: unset;

       }
       .card{
    margin-bottom: 54px !important;
    border-radius: 20px !important;
    width: 680px; 



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

       .container-box{
      width: 100%;
      font-size: 23px;
      height: 100%;

       }
       .btn-encomendar{
        justify-content: center;
    width: 100%;
    height: 68px;
    display: flex;
    align-items: center;
    border-radius: 10px;
    font-size: 32px;
    margin-top: 34px;
       }





</style>
</head>
<body>
	
	<div class="card-deck">
  <div class="card">
    <img src="imagens/empadinha.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Empadinhas</h5>
      <p class="card-text">Empadinhas cremosas de frango</p>
    <div class="container-box">
      <div class="itens">
        <p>Preço: <span>2,00</span></p>
        <p>Sabores: <span>Frango,palmito,queijo</span></p>
        <p>Quantidade: <span>25</span></p>
        <p>Descrição: <span>Empadinhas cremosas de varios sabores</span></p>
        <p>Vendedor: <span>Thailan</span></p>
        <p>Localização: <span>Bloco IV-Sala 405 </span></p>

      </div>
      <a href="#" class="btn btn-success btn-encomendar">Encomendar</a>
    </div>
  </div>
</div>
</div>
</body>
@endsection