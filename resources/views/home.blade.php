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
            border: 10px solid white;
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

       .slick-prev:before, .slick-next:before{
           font-size: 82px;
       }

       .slick-prev:before{
        margin-left: -57px !important;
       }

       .slick-dots li button:before
        {
        font-size: 30px;
        color: white
        }
        .slick-dots li{
            margin: 0px 15px !important;
        }

        .slick-dots{
            bottom: 60px !important;
        }

        .slick-dots li.slick-active button:before{
            color: #fff
        }

        .btn-success{
            font-family: 'Lalezar', cursive;
            font-size: 48px !important;
        }
        .btn-success a{
            color: white;
            text-decoration: none
        }
        .container{
            margin-right: auto !important;
            margin-left: auto !important;
        }

</style>
</head>
<body>
    <p class="title-box">UlTIMOS PRODUTOS ANUNCIADOS</p>
	<div class="card-deck">
  <div class="card">
    <img src="imagens/empadinha.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Empadinhas</h5>
      <p class="card-text">Empadinhas cremosas de frango</p>
    </div>
    <div class="card-footer">
      <button type="button" class="btn btn-success"><a href="/detalheProduto?id=1">Mais informações</a></button>
    </div>
  </div>
  <div class="card">
    <img src="imagens/docinhos.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Docinhos</h5>
      <p class="card-text">Docinhos varios sabores</p>
    </div>
    <div class="card-footer">
    	<button type="button" class="btn btn-success"><a href="/detalheProduto?id=2">Mais informações</a></button>

    </div>
  </div>
  <div class="card">
    <img src="imagens/bala-baiana.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Bala Baiana</h5>
      <p class="card-text">Sabores:Coco,morango,Chocolate,milho verde</p>
    </div>
    <div class="card-footer">
      <button type="button" class="btn btn-success"> <a href="/detalheProduto?id=3">Mais informações</a></button>
    </div>
  </div>
	</br>
    <div class="card">
    <img src="imagens/empadao.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Empadão</h5>
      <p class="card-text">Empadão de frango</p>
    </div>
    <div class="card-footer">
      <button type="button" class="btn btn-success"> <a href="/detalheProduto?id=4">Mais informações</a></button>
    </div>
  </div>
  <div class="card">
    <img src="imagens/docinhos.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Bolo de pote</h5>
      <p class="card-text">Varios sabores</p>
    </div>
    <div class="card-footer">
    	<button type="button" class="btn btn-success"> <a href="/detalheProduto?id=5">Mais informações</a></button>

    </div>
  </div>
  <div class="card">
    <img src="imagens/coxinha.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Coxinha</h5>
      <p class="card-text">Deliosas coxinhas de frango com catupiry</p>
    </div>
    <div class="card-footer">
      <button type="button" class="btn btn-success"> <a href="/detalheProduto?id=6">Mais informações</a></button>
    </div>
</div>
</div>


@section('scripts')
<script>
    $('.card-deck').slick({
        dots: true,
    });
</script>
@endsection

</body>
@endsection
