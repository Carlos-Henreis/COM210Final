<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\requisicao_equipamento;
use App\Http\Requests;
use App\Http\Requests\requisicao_equipamentoRequest;
use App\Http\Controllers\Controller;

class Requisicao_equipamentoController extends Controller
{
    public function __construct()
    {
    }

    public function index () {
    	$requisicao_equipamento = requisicao_equipamento::all();
    	return view('requisicao_equipamento.cruds.index', ['requisicao_equipamento' => $requisicao_equipamento]);
    }
    public function create(){
    	return view('requisicao_equipamento.cruds.create');
    }
    public function store(requisicao_equipamentoRequest $request) {
        $input = $request->all();
        requisicao_equipamento::create($input);
        \Session::flash('flash_message','Cadastrado com sucesso.');
        return redirect()->route('requisicao_equipamento.cruds');
    }
    public function destroy($id) {
        $requisicao_equipamento = requisicao_equipamento::find($id);
        $requisicao_equipamento->delete();
        \Session::flash('flash_message','Removido com sucesso.');
        return redirect()->route('requisicao_equipamento.cruds');
    }
    
    public function edit($id) {
        $requisicao_equipamento = requisicao_equipamento::find($id);
        return view('requisicao_equipamento.cruds.edit', compact('requisicao_equipamento'));
    }
    
    public function update(requisicao_equipamentoRequest $request, $id) {
        $requisicao_equipamento = requisicao_equipamento::find($id)->update($request->all());
        \Session::flash('flash_message','Editado com sucesso.');
        return redirect()->route('requisicao_equipamento.cruds');
    }
}
