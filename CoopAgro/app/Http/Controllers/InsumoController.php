<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumo;
use App\Http\Requests;
use App\Http\Requests\InsumoRequest;
use App\Http\Controllers\Controller;



class InsumoController extends Controller
{
    public function __construct()
    {
    }

    public function index () {
    	$insumos = Insumo::all();
    	return view('insumo.cruds.index', ['insumo' => $insumos]);
    }
    public function create(){
    	return view('insumo.cruds.create');
    }
    public function store(InsumoRequest $request) {
        $input = $request->all();
        Insumo::create($input);
        return redirect()->route('insumo.cruds');
    }
    public function destroy($id) {
        $insumo = Insumo::find($id);
        $insumo->delete();
        return redirect()->route('insumo.cruds');
    }
    
    public function edit($id) {
        $insumo = Insumo::find($id);
        return view('insumo.cruds.edit', compact('insumo'));
    }
    
    public function update(InsumoRequest $request, $id) {
        $insumo = Insumo::find($id)->update($request->all());
        return redirect()->route('insumo.cruds');
    }
}
