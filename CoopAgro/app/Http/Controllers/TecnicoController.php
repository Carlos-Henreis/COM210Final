<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;

class TecnicoController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index () {
        return view('tecnico.index');
    }

    public function login () {
        return view('tecnico.login');
    }

    public function postLogin (Request $request) {

        $validator = validator($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if ($validator->fails()) {
             return redirect('/tecnico/login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];
        if (auth()->guard('tecnico')->attempt($credentials)) {
            return redirect ('/tecnico');
        }
        else {
            return redirect ('/tecnico/login')
                    ->withErrors(['Errors' => 'Login Invalido'])
                    ->withInput();
        }
    }

    public function logout () {
            auth()->guard('tecnico')->logout();
            return redirect ('/presidente/login');
    }
}
