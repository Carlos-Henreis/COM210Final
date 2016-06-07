<?php
//Página inicial
Route::get('/', function () {
    return view('welcome');
});

Route::get ('/insumo','InsumoController@index');

//Rotas para presidente//
Route::group(['middleware' => 'presidente'], function() {
	//Rotas protegidas(somente o presidente entra)
	Route::group(['middleware' => 'auth:presidente'], function() {
		Route::get('/presidente', 'PresidenteController@index' );
	});

	Route::get('/presidente/login', 'PresidenteController@login' );
	Route::post('/presidente/login', 'PresidenteController@postLogin' );
	Route::get('/presidente/logout' , 'PresidenteController@logout');
});

//Rotas para atendente//
Route::group(['middleware' => 'atendente'], function() {
	//Rotas protegidas(somente o atendente entra)
	Route::group(['middleware' => 'auth:atendente'], function() {
		Route::get('/atendente', 'AtendenteController@index' );
	});

	Route::get('/atendente/login', 'AtendenteController@login' );
	Route::post('/atendente/login', 'AtendenteController@postLogin' );
	Route::get('/atendente/logout' , 'AtendenteController@logout');
});

//Rotas para tecnico//
Route::group(['middleware' => 'tecnico'], function() {
	//Rotas protegidas(somente o tecnico entra)
	Route::group(['middleware' => 'auth:tecnico'], function() {
		Route::get('/tecnico', 'TecnicoController@index' );
	});

	Route::get('/tecnico/login', 'TecnicoController@login' );
	Route::post('/tecnico/login', 'TecnicoController@postLogin' );
	Route::get('/tecnico/logout' , 'TecnicoController@logout');
});

//Rotas associados
Route::group(['prefix'=>'associado'], function() {
	//Rotas protegidas(somente o atendente entra)
	Route::group(['middleware' => 'auth:atendente'], function() {
		Route::get('',['as'=>'associado', 'uses'=>'AssociadoController@index']);
		Route::get('create',['as'=>'associado.create', 'uses'=>'AssociadoController@create']);
		Route::post('store',['as'=>'associado.store', 'uses'=>'AssociadoController@store']);
		Route::get('{id}/destroy',['as'=>'associado.destroy', 'uses'=>'AssociadoController@destroy']);
		Route::get('{id}/edit',['as'=>'associado.edit', 'uses'=>'AssociadoController@edit']);
	 	Route::put('{id}/update',['as'=>'associado.update', 'uses'=>'AssociadoController@update']);
	});

});

//rotas atendente CRUDS (Todas estão corretas)
Route::group(['prefix'=>'atendente/cruds'], function() {
	//Rotas protegidas(somente o presidente entra)
	Route::group(['middleware' => 'auth:presidente'], function() {
		Route::get('', ['as' => 'atendente.cruds', 'uses' => 'AtendenteController@index1']);
	    Route::get('create', ['as' => 'atendente.cruds.create', 'uses' => 'AtendenteController@create']);
	    Route::post('store', ['as' => 'atendente.cruds.store', 'uses' => 'AtendenteController@store']);
	    Route::get('{id}/destroy', ['as' => 'atendente.cruds.destroy', 'uses' => 'AtendenteController@destroy']);
	    Route::get('{id}/edit', ['as' => 'atendente.cruds.edit', 'uses' => 'AtendenteController@edit']);
	    Route::put('{id}/update', ['as' => 'atendente.cruds.update', 'uses' => 'AtendenteController@update']);
	});
});

Route::group(['prefix'=>'insumo/cruds'], function() {
	//Rotas protegidas(somente o atendente entra)
	Route::group(['middleware' => 'auth:atendente'], function() {
		Route::get('', ['as' => 'insumo', 'uses' => 'InsumoController@index']);
	    Route::get('create', ['as' => 'insumo.cruds.create', 'uses' => 'InsumoController@create']);
	    Route::post('store', ['as' => 'insumo.cruds.store', 'uses' => 'InsumoController@store']);
	    Route::get('{id}/destroy', ['as' => 'insumo.cruds.destroy', 'uses' => 'InsumoController@destroy']);
	    Route::get('{id}/edit', ['as' => 'insumo.cruds.edit', 'uses' => 'InsumoController@edit']);
	    Route::put('{id}/update', ['as' => 'insumo.cruds.update', 'uses' => 'InsumoController@update']);
	});
});

//Rotas de um teste para testarmos
Route::group(['prefix'=>'teste', 'where'=>['id'=>'[0-9]+']], function() {

	Route::get('',['as'=>'teste', 'uses'=>'testeController@index']);

	Route::get('create',['as'=>'teste.create', 'uses'=>'testeController@create']);

	Route::post('store',['as'=>'teste.store', 'uses'=>'testeController@store']);

	Route::get('{id}/destroy',['as'=>'teste.destroy', 'uses'=>'testeController@destroy']);
	
	Route::get('{id}/edit',['as'=>'teste.edit', 'uses'=>'testeController@edit']);
	

 	Route::put('{id}/update',['as'=>'teste.update', 'uses'=>'testeController@update']);
});


