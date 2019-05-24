@extends('base')

@section('content')
<style type="text/css">
	.login{
		display: flex;
		background-color: blue;

	}
	label{
		    color: white;
    }
    body{
        background: #eb7b30;
    }
    .container {
        max-width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100%;
    }
    .login{
        background-color: #fff;
        width: 815px;
        height: 880px;
        align-items: center;
        justify-content: center;
        border-radius: 20px;
        flex-direction: column;
        box-shadow: 1px 0px 15px -4px rgba(0,0,0,0.85);
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
            font-size: 43px;
            color: #755e4e
        }
        form input{
            padding: 19px;
            height: 99px;
            font-size: 40px !important;
            border-radius: 9px !important;
            margin-bottom: 20px;
        }
        form .btn{
            justify-content: center;
            width: 100%;
            height: 86px;
            display: flex;
            align-items: center;
            border-radius: 10px;
            font-size: 32px !important;
            margin-top: 34px;
            font-family: 'Lalezar', cursive;
            font-size: 52px !important;
            margin-top: 65px;
        }
        nav{
            display: none
        }
        .logo-name{
            display: none
        }
        .title-box{
            letter-spacing: 2px;
            text-align: center;
            font-size: 72px;
            color: #c15106;
       }
       .btn-success a{
           text-decoration: none;
           color: #fff
       }
</style>
<div class="login" >
    <div>
        <p class="title-box">Deli University</p>
    </div>
	<form action="" method="post" style="
		display: flex;
    	flex-direction: column;
    	width: 80%;
    	justify-content: center;"
   	>

		<label>Login</label>
		<input type="text" name="Email">
		<label>Senha</label>
		<input type="password" name="Senha">
		<button type="button" class="btn btn-success"><a href="/home">Entrar</a></button>


	</form>
</div>
@endsection
@section('scripts')

@endsection
