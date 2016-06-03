<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AtendenteRequest;
use App\Http\Controllers\Controller;
use App\Atendente;


class AtendenteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    //funções do usuários
    public function index () {
    	return view('atendente.index');
    }

    public function login () {
    	return view('atendente.login');
    }

    public function postLogin (Request $request) {

        $validator = validator($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        dd($validator);
        if ($validator->fails()) {
             return redirect('/atendente/login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];
    	if (auth()->guard('atendente')->attempt($credentials)) {
            return redirect ('/atendente');
        }
        else {
            return redirect ('/atendente/login')
                    ->withErrors(['Errors' => 'Login Invalido'])
                    ->withInput();
        }
    }

    public function logout () {
            auth()->guard('atendente')->logout();
            return redirect ('/atendente/login');
    }

    //CRUDS

    public function index1 () {
        $atendente = Atendente::all();
        return view('atendente.cruds.index',  ['atendente'=>$atendente]);
    }

    public function create() {
        return view('atendente.cruds.create');
    }
    
    public function store(AtendenteRequest $request) {
        $input = $request->all();
        Atendente::create($input);
        return redirect()->route('atendente.cruds');
    }
    
    public function destroy($id) {
        $atendente = Atendente::find($id);
        $atendente->delete();
        return redirect()->route('atendente.cruds');
    }
    
    public function edit($id) {
        $atendente = Atendente::find($id);
        return view('atendente.cruds.edit', compact('atendente'));
    }
    
    public function update(AtendenteRequest $request, $id) {
        $atendente = Atendente::find($id)->update($request->all());
        return redirect()->route('atendente.cruds');
    }

}
