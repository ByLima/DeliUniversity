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
           font-size: 40px;
           text-align: center

       }

       .card-title{
           font-size: 62px;
           text-align: center
       }

       .container-box{
            width: 100%;
            font-size: 23px;
            height: 100%;
       }
       .btn-encomendar{
            justify-content: center;
            width: 100%;
            height: 99px;
            display: flex;
            align-items: center;
            border-radius: 10px;
            font-size: 32px !important;
            margin-top: 34px;
            font-family: 'Lalezar', cursive;
            font-size: 58px !important;
       }
       .btn-success a{
            color: white;
            text-decoration: none
        }
       .container {
            max-width: 100%;
       }

       .box-full{
            background: white;
            border-radius: 15px
       }
       .box-image{
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 55px;
       }
       .box-image img {
            width: 615px;
            border-radius: 14px;
            border: 3px solid #eb7b30;
       }
       .itens p{
            font-size: 40px;
            border-top: 2px solid #ccc8c8;
            padding: 15px;
       }
       .itens span{
           font-weight: bold
       }
       .box{
        margin-bottom: 50px
       }
       .title-box{
        letter-spacing: 2px;
        text-align: center;
        font-size: 62px;
       }
       #ex1{
          max-width: 90%;
          font-family: 'Lalezar', cursive;
            padding: 14px;
            font-size: 47px;
       }
       #ex2{
          max-width: 90%;
          font-family: 'Lalezar', cursive;
            padding: 14px;
            font-size: 47px;
       }

       .close-modal{
            right: 13px !important;
            top: 11px !important;
       }
       #ex1 p{
        text-align: center;
    margin-top: 35px;
       }
       #ex2 p{
        text-align: center;
    margin-top: 35px;
       }

       .compre{
        font-weight: bold;
        font-size: 40px;
        border-top: 2px solid #ccc8c8;
        padding: 15px;
        margin-top: 105px;
        display: flex;
        text-align: center;
        flex-direction: column;
        justify-content: center;
        align-items: center;
       }

       .compre input{
        height: 80px;
    border: 1px solid #131212;
    font-size: 38px;

       }
       .compre select{
        margin-top: 31px;
    height: 80px;
    border: 1px solid #131212;
    font-size: 35px;
    text-align: center;
    height: 92px !important;

       }
</style>
</head>
<body>

    <div>
        <p class="title-box">Detalhes do Produto</p>

    </div>
	<div class="box-full">
        <div id="ex1" class="modal">
            <p>Obrigado por encomendar. </br>Agora é só esperar a chegada do vendedor até você na data de entrega!</p>
        </div>

        <div id="ex2" class="modal">
            <p>Confirmado com sucesso! </br>O Vendedor está esperando sua chegada na data de entrega!</p>
        </div>

  <div class="box">
    <div class="box-image">
        <img src="imagens/empadinha.jpg" class="card-img-top" alt="...">
    </div>
    <div class="card-body">
      <h5 class="card-title">Empadinhas</h5>
      <p class="card-text">Empadinhas cremosas de frango</p>
    <div class="container-box">
      <div class="itens">
        <p>Preço: <span>2,00 </span></p>
        <p>Sabores: <span>Frango,palmito,queijo</span></p>
        <p>Descrição: <span>Empadinhas cremosas de varios sabores</span></p>
        <p>Vendedor: <span>Bianca Developer</span></p>
        <p>Localização: <span>Bloco IV-Sala 405 </span></p>
        <p>Data para Entrega: <span>20/05/2019 20:10</span></p>

      </div>

      <div class="compre">
          <p>Compre agora rapidamente apenas informando a quantidade, sabor e clicando na opção abaixo</p>
          <input type="number" placeholder="Informe a quantidade" class="form-control" id="quantidade">
          <select class="form-control" id="exampleFormControlSelect1">
            <option>Selecione o sabor</option>
            <option>Frango</option>
            <option>Queijo</option>
            <option>Palmito</option>
        </select>
      </div>
      <a href="#ex1" rel="modal:open" class="btn btn-success btn-encomendar" >Encomendar</a>
      <a href="#ex2"   rel="modal:open" class="btn btn-primary btn-encomendar">Vou Buscar</a>
      <a href="/home" class="btn btn-danger btn-encomendar">Voltar</a>
    </div>
  </div>
</div>
</div>
</body>
@section('scripts')
<script>


</script>
@endsection
@endsection
