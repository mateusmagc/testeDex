<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Loja
 */

Route::get('/Loja/Listar','LojaController@getListar')->name('loja.listar');
Route::get('/Admin','LojaController@getListar')->name('loja.listar');
Route::get('/User','LojaController@getListarUser')->name('loja.listaruser');


Route::get('/Loja/Alterar/{id}','LojaController@getAlterar')->name('loja.alterar');
Route::get('/Loja/Excluir/{id}','LojaController@getExcluir')->name('loja.excluir');

Route::get('/Loja/Novo','LojaController@getNovo')->name('loja.novo');
Route::post('/Loja/Novo','LojaController@postNovo')->name('loja.novo');
Route::post('/Loja/Logo','LojaController@getLogo')->name('loja.logo');

Route::post('submit', function(){
	 $image = Input::file('image');
	 $move = $image->move('public/logomarcas', $image->getClientOriginalName());
	 if($move){
	 	$msg = true;
	 }else{
	 	$msg =false;
	 }
	 
	 return Response::json(['success'=>$msg]);
});