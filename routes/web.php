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



Route::get('/login', 'AutenticacaoController@login')->name('login');
Route::post('/logar', 'AutenticacaoController@logar')->name('logar');
Route::get('/', 'AutenticacaoController@home')->name('home');
Route::get('/logout', 'AutenticacaoController@logout')->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/registrar', 'UsuarioController@registrar')->name('registrar');
    Route::post('/salvar', 'UsuarioController@salvar')->name('salvar');
    Route::get('/home', 'AutenticacaoController@privada')->name('dashboard');

    Route::get('/usuarios', 'UsuarioController@listar')->name('listar');
    Route::get('/usuarios/{id}/editar', 'UsuarioController@editar')->name('editar');
    Route::post('/usuarios/{id}/atualizar', 'UsuarioController@atualizar')->name('atualizar');

    Route::get('/usuarios/{id}/excluir', 'UsuarioController@excluir')->name('excluir');
    Route::post('/usuarios/{id}/deletar', 'UsuarioController@deletar')->name('deletar');

    Route::get('/produtos', 'ProdutosController@listar')->name('listarProdutos');
    Route::get('/marcas', 'MarcasController@listar')->name('listarMarcas');
    Route::get('/categorias', 'CategoriasController@listar')->name('listarCategorias');
});
