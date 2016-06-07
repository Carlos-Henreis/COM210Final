<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InsumoController extends Controller
{
    public function __construct()
    {
    }

    public function index () {
    	return view('insumo.index');
    }
}
