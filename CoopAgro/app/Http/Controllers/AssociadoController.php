<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\associado;
use App\Http\Requests;
use App\Http\Requests\AssociadoRequest;
use App\Http\Controllers\Controller;

class AssociadoController extends Controller {
    
    public function __construct(){}
    
    public function index() {
    	$associados = associado::all();
    	return view('associado.crud.index', ['associado' => $associados]);
    }
    
    public function create() {
        return view('associado.crud.create');
    }
    
    public function store(AssociadoRequest $request) {
        $input = $request->all();
        associado::create($input);
        return redirect()->route('associado.crud');
    }
    
    public function destroy($id) {
        $associado = associado::find($id);
        $associado->delete();
        return redirect()->route('associado.crud');
    }
    
    public function edit($id) {
        $associado = associado::find($id);
        return view('associado.crud.edit', compact('associado'));
    }
    
    public function update(Request $request, $id) {
        $associado = associado::find($id)->update($request->all());
        return redirect()->route('associado.crud');
    }
    
}