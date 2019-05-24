@extends('base')

@section('content')
<head>
	<title>Meus Pedidos</title>

	<style>
       .container {
            max-width: 100%;
            height: 100%;
       }
       .title-box{
            letter-spacing: 5px;
            text-align: center;
            font-size: 62px;
       }
    </style>
</head>
<body>
    <p class="title-box">Meus Pedidos</p>
    <div class="box-meuspedidos">
       <div class="ultimo-pedido">
            <p>Total de compras: <span>42</span></p>
            <p>Ultima compra: <span>19/05/2019</span></p>
            <p>Tipo da compra: <span class="encomenda">Encomenda</span></p>
       </div>
       <div class="div-hr"></div>
       <div class="listagem-pedidos">
           <div class="pedido-item-box">
                <p>Produto: <span>Empadinhas</span></p>
                <p>Data da Compra: <span>19/05/2019</span></p>
                <p>Tipo da compra: <span class="encomenda">Encomenda</span></p>
                <p>Vendedor(a): <span>Bianca Do Salgado</span></p>
                <p>Quantidade: <span>2</span></p>
           </div>

           <div class="pedido-item-box">
                <p>Produto: <span>Bolo de Pote</span></p>
                <p>Data da Compra: <span>12/05/2019</span></p>
                <p>Tipo da compra: <span class="vou-buscar">Vou Buscar</span></p>
                <p>Vendedor(a): <span>Bianca Doceira</span></p>
                <p>Quantidade: <span>1</span></p>
           </div>

           <div class="pedido-item-box">
                <p>Produto: <span>Coxinha</span></p>
                <p>Data da Compra: <span>11/05/2019</span></p>
                <p>Tipo da compra: <span class="encomenda">Encomenda</span></p>
                <p>Vendedor(a): <span>Bianca da Coxinha</span></p>
                <p>Quantidade: <span>18</span></p>
           </div>


       </div>

    <div>
</body>
@endsection
