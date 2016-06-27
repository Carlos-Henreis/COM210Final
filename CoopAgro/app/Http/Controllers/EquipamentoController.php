<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\equipamento;
use App\Http\Requests;
use App\Http\Requests\equipamentoRequest;
use App\Http\Controllers\Controller;

use App\requisicao_equipamento;
use App\Http\Requests\requisicao_equipamentoRequest;

class EquipamentoController extends Controller
{
    public function __construct()
    {
    }

    public function index () {
        $equipamento = equipamento::all();
        return view('equipamento.cruds.index', ['equipamento' => $equipamento]);
    }
    public function create(){
        return view('equipamento.cruds.create');
    }
    public function store(equipamentoRequest $request) {
        $input = $request->all();
        equipamento::create($input);
        \Session::flash('flash_message','Cadastrado com sucesso.');
        return redirect()->route('equipamento.cruds');
    }
    public function destroy($id) {
        $equipamento = equipamento::find($id);
        if(requisicao_equipamento::where('idmaquina', '=', equipamento::find($id)->idmaquina)->exists())
        {
            \Session::flash('flash_message','Equipamento emprestado, não é possivel remover.');
            return redirect()->route('equipamento.cruds');
        }
        $equipamento->delete();
        \Session::flash('flash_message','Removido com sucesso.');
        return redirect()->route('equipamento.cruds');
    }
    
    public function edit($id) {
        $equipamento = equipamento::find($id);
        return view('equipamento.cruds.edit', compact('equipamento'));
    }
    
    public function update(equipamentoRequest $request, $id) {
        $equipamento = equipamento::find($id)->update($request->all());
        \Session::flash('flash_message','Editado com sucesso.');
        return redirect()->route('equipamento.cruds');
    }
}
