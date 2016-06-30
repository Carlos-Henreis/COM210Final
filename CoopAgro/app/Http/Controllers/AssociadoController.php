<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\associado;
use App\Http\Requests;
use App\Http\Requests\AssociadoRequest;
use App\Http\Controllers\Controller;

use App\Http\Requests\requisicao_equipamentoRequest;
use App\requisicao_equipamento;

class AssociadoController extends Controller {
    
    public function __construct(){}
    
    public function index() {
    	$associados = associado::all();
    	return view('associado.crud.index', ['associado' => $associados]);
    }
    
    public function create() {
        \Session::flash('flash_message','Cadastrado com sucesso.');
        return view('associado.crud.create');
    }
    
    public function store(AssociadoRequest $request) {
        $input = $request->all();
        associado::create($input);
        return redirect()->route('associado.crud');
    }
    
    public function destroy($id) {
        $associado = associado::find($id);

        if(requisicao_equipamento::where('cpf', '=', associado::find($id)->cpf)->exists())
        {
            \Session::flash('flash_message','Associado possuí emprestimo de equipamento, não é possivel remover.');
            return redirect()->route('associado.crud');
        }
        \Session::flash('flash_message','Removido com sucesso.');
        $associado->delete();
        return redirect()->route('associado.crud');
    }
    
    public function edit($id) {
        $associado = associado::find($id);
        return view('associado.crud.edit', compact('associado'));
    }
    
    public function update(Request $request, $id) {
        $associado = associado::find($id)->update($request->all());
        \Session::flash('flash_message','Editado com sucesso.');
        return redirect()->route('associado.crud');
    }
    
}