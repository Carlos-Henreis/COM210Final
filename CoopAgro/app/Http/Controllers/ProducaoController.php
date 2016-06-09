<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\producao;
use App\Http\Requests;
use App\Http\Requests\ProducaoRequest;
use App\Http\Controllers\Controller;

class ProducaoController extends Controller
{
    public function __construct()
    {
    }

    public function index () {
    	$producao = producao::all();
    	return view('producao.cruds.index', ['producao' => $producao]);
    }
    public function create(){
    	return view('producao.cruds.create');
    }
    public function store(ProducaoRequest $request) {
        $input = $request->all();
        Producao::create($input);
        return redirect()->route('producao.cruds');
    }
    public function destroy($id) {
        $producao = Producao::find($id);
        $producao->delete();
        return redirect()->route('producao.cruds');
    }
    
    public function edit($id) {
        $producao = Producao::find($id);
        return view('producao.cruds.edit', compact('producao'));
    }
    
    public function update(ProducaoRequest $request, $id) {
        $producao = Producao::find($id)->update($request->all());
        return redirect()->route('producao.cruds');
    }
}
