<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\insumo;
use App\Http\Requests;

class InsumoController extends Controller
{
    public function __construct()
    {
    }

    public function index () {
    	$insumos = insumo::all();
    	return view('insumo.cruds.index', ['insumo' => $insumos]);
    }
    public function create(){
    	return view('insumo.cruds.create');
    }
}
