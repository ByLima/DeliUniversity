<!DOCTYPE html>
<html style="
height: 99%">

<head>
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/slick-theme.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/slick.css') }}" rel="stylesheet">

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/animated.css') }}" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lalezar&display=swap');
        </style>
</head>
<body style="
height: 99%">
<p class="logo-name">Deli University</p>
<nav role="navigation">

  <div id="menuToggle" style="width: 50%">


    <input type="checkbox" />



    <span></span>
    <span></span>
    <span></span>


    <ul id="menu">
      <a href="/home"><li>Home</li></a>
      <a href="/meuperfil"><li>Meu Perfil</li></a>
      <a href="/meuspedidos"><li>Meus Pedidos</li></a>
      <a href="/login"><li>Sair</li></a>
    </ul>
  </div>
</nav>

<div class="container" >


   @yield('content')
</div>


<script src="{{ asset('/js/jquery.js') }}"></script>
<script src="{{ asset('/js/slick.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
@yield('scripts')
</body>
</html>
