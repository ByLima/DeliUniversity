@extends('base')

@section('content')
<head>
	<title>Meu perfil</title>

	<style>
       .container {
            max-width: 100%;
            height: 100%;

       }
    </style>
</head>
<body>
    <div class="box-meuperfil">
       <div class="box-image">
        <div class="image-perfil" ><span>B</span></div>
        <div class="name-perfil">Bianca Lima</div>
       </div>

       <div class="demais-info">
            <div class="info-text">
                <label>E-mail</label>
                <p>bianca.limass@yahoo.com</p>
            </div>

            <div class="info-text">
                <label>Celular</label>
                <p>(24) 9999-99999</p>
            </div>
       </div>
    <div>
</body>
@endsection
