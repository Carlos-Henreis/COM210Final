<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\AtendenteRequest;
use App\Http\Controllers\Controller;
use App\Atendente;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;


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

    //CRUDS, ainda está com problemas nesse, senha não está sendo criptografada antes de persistir no banco, acho que isso deve ocorrer na View (Se der da uma olhada para arrumar isso)

    public function index1 () {
        $atendente = Atendente::all();
        return view('atendente.cruds.index',  ['atendente'=>$atendente]);
    }

    public function create() {
        return view('atendente.cruds.create');
    }
    
    public function store(AtendenteRequest $request) {
        $input = $request->all();
        $input['password'] = bcrypt($request['password']);
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
