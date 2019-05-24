<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/cadastro', function () {
    return view('cadastro');
});


Route::get('/login','LoginController@index')->name('teste');

Route::post('/cadastro','CadastroController@store');


Route::get('/', function () {
    return view('welcome');
});

Route::post('/login','LoginController@store');

Route::get('/home', function () {
    return view('home');
});

Route::get('/meuperfil', function () {
    return view('meuperfil');
});

Route::get('/meuspedidos', function () {
    return view('meuspedidos');
});

Route::get('/detalheProduto','ProdutoController@index');



