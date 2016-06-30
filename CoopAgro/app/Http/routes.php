<?php
//Página inicial
Route::get('/', function () {
    return view('welcome');
});

//Route::get ('/insumo','InsumoController@index');
//Route::get ('/producao','ProducaoController@index');
//Route::get ('/requisicao_equipamento','requisicao_equipamentoController@index');
//Route::get ('/equipamento','equipamentoController@index');

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

Route::group(['prefix'=>'insumo/cruds', 'where'=>['id'=>'[0-9]+']], function() {
	//Rotas protegidas(somente o atendente entra)
	Route::group(['middleware' => 'auth:atendente'], function() {
		Route::get('', ['as' => 'insumo.cruds', 'uses' => 'InsumoController@index']);
	    Route::get('create', ['as' => 'insumo.cruds.create', 'uses' => 'InsumoController@create']);
	    Route::post('store', ['as' => 'insumo.cruds.store', 'uses' => 'InsumoController@store']);
	    Route::get('{id}/destroy', ['as' => 'insumo.cruds.destroy', 'uses' => 'InsumoController@destroy']);
	    Route::get('{id}/edit', ['as' => 'insumo.cruds.edit', 'uses' => 'InsumoController@edit']);
	    Route::put('{id}/update', ['as' => 'insumo.cruds.update', 'uses' => 'InsumoController@update']);
	});
});

Route::group(['prefix'=>'producao/cruds', 'where'=>['id'=>'[0-9]+']], function() {
	//Rotas protegidas(somente o atendente entra)
	Route::group(['middleware' => 'auth:atendente'], function() {
		Route::get('', ['as' => 'producao.cruds', 'uses' => 'ProducaoController@index']);
	    Route::get('create', ['as' => 'producao.cruds.create', 'uses' => 'ProducaoController@create']);
	    Route::post('store', ['as' => 'producao.cruds.store', 'uses' => 'ProducaoController@store']);
	    Route::get('{id}/destroy', ['as' => 'producao.cruds.destroy', 'uses' => 'ProducaoController@destroy']);
	    Route::get('{id}/edit', ['as' => 'producao.cruds.edit', 'uses' => 'ProducaoController@edit']);
	    Route::put('{id}/update', ['as' => 'producao.cruds.update', 'uses' => 'ProducaoController@update']);
	});
});

//rotas de relatorios
Route::group(['prefix'=>'producao/relatorio', 'where'=>['id'=>'[0-9]+']], function() {
	//Rotas para os relatórios producao
	Route::group(['middleware' => 'auth:presidente'], function() {

	    Route::get('', ['as' => 'producao.relatorio', 'uses' => 'ProducaoController@relatorio']);
	    Route::post('relatorioqual', ['as' => 'producao.relatorio.relatorioqual', 'uses' => 'ProducaoController@relatorioqual']);
	    Route::get('tipo', ['as' => 'producao.relatorio.tipo', 'uses' => 'ProducaoController@tipo']);
	    Route::get('associado', ['as' => 'producao.relatorio.associado', 'uses' => 'ProducaoController@associado']);
	    Route::get('geral', ['as' => 'producao.relatorio.geral', 'uses' => 'ProducaoController@geral']);
	});
});

Route::group(['prefix'=>'requisicao_equipamento/cruds', 'where'=>['id'=>'[0-9]+']], function() {
	//Rotas protegidas(somente o atendente entra)
	Route::group(['middleware' => 'auth:atendente'], function() {
		Route::get('', ['as' => 'requisicao_equipamento.cruds', 'uses' => 'Requisicao_equipamentoController@index']);
	    Route::get('create', ['as' => 'requisicao_equipamento.cruds.create', 'uses' => 'Requisicao_equipamentoController@create']);
	    Route::post('store', ['as' => 'requisicao_equipamento.cruds.store', 'uses' => 'Requisicao_equipamentoController@store']);
	    Route::get('{id}/destroy', ['as' => 'requisicao_equipamento.cruds.destroy', 'uses' => 'Requisicao_equipamentoController@destroy']);
	    Route::get('{id}/edit', ['as' => 'requisicao_equipamento.cruds.edit', 'uses' => 'Requisicao_equipamentoController@edit']);
	    Route::put('{id}/update', ['as' => 'requisicao_equipamento.cruds.update', 'uses' => 'Requisicao_equipamentoController@update']);
	});
});

Route::group(['prefix'=>'equipamento/cruds', 'where'=>['id'=>'[0-9]+']], function() {
	//Rotas protegidas(somente o atendente entra)
	Route::group(['middleware' => 'auth:atendente'], function() {
		Route::get('', ['as' => 'equipamento.cruds', 'uses' => 'equipamentoController@index']);
	    Route::get('create', ['as' => 'equipamento.cruds.create', 'uses' => 'equipamentoController@create']);
	    Route::post('store', ['as' => 'equipamento.cruds.store', 'uses' => 'equipamentoController@store']);
	    Route::get('{id}/destroy', ['as' => 'equipamento.cruds.destroy', 'uses' => 'equipamentoController@destroy']);
	    Route::get('{id}/edit', ['as' => 'equipamento.cruds.edit', 'uses' => 'equipamentoController@edit']);
	    Route::put('{id}/update', ['as' => 'equipamento.cruds.update', 'uses' => 'equipamentoController@update']);
	});
});

//Rotas associados
Route::group(['prefix'=>'associado'], function() {
	//Rotas protegidas(somente o atendente entra)
	Route::group(['middleware' => 'auth:atendente'], function() {
		Route::get('',['as'=>'associado.crud', 'uses'=>'AssociadoController@index']);
		Route::get('create',['as'=>'associado.crud.create', 'uses'=>'AssociadoController@create']);
		Route::post('store',['as'=>'associado.crud.store', 'uses'=>'AssociadoController@store']);
		Route::get('{id}/destroy',['as'=>'associado.crud.destroy', 'uses'=>'AssociadoController@destroy']);
		Route::get('{id}/edit',['as'=>'associado.crud.edit', 'uses'=>'AssociadoController@edit']);
	 	Route::put('{id}/update',['as'=>'associado.crud.update', 'uses'=>'AssociadoController@update']);
	});
});

//Rotas de um teste para testarmos
Route::group(['prefix'=>'teste', 'where'=>['id'=>'[0-9]+']], function()
{

	Route::get('',['as'=>'teste', 'uses'=>'testeController@index']);

	Route::get('create',['as'=>'teste.create', 'uses'=>'testeController@create']);

	Route::post('store',['as'=>'teste.store', 'uses'=>'testeController@store']);

	Route::get('{id}/destroy',['as'=>'teste.destroy', 'uses'=>'testeController@destroy']);
	
	Route::get('{id}/edit',['as'=>'teste.edit', 'uses'=>'testeController@edit']);
	

 	Route::put('{id}/update',['as'=>'teste.update', 'uses'=>'testeController@update']);
});

/*

	Teste Carlos para a nova branch
*/


