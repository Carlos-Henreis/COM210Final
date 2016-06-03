<?php

namespace App\Http\Controllers;

use App\teste;
use App\Http\Requests;
use App\Http\Requests\TesteRequest;
use Illuminate\Http\Request;



//classe controlador da classe teste aponta para a view do teste
class testeController extends Controller {


	
	public function index() {
		$teste = teste::all();
		return view('teste.index', ['teste'=>$teste]);
	}

	public function create() {
		return view ('teste.create');
	}

	public function store(Request $request) {
 		$input = $request->all();
 		teste::create($input);
		return redirect()->route('teste');


 	}

 	public function destroy($id)  {
 		$teste = teste::find($id);    
		$teste->delete();
 		return redirect()->route('teste');
	}

	public function edit($id) {
		$teste = teste::find($id);
 		return view('teste.edit', compact('teste'));
  	}

  	public function update(TesteRequest $request, $id) {
		$teste = teste::find($id)->update($request->all());

 		return redirect()->route('teste');
 	}

}