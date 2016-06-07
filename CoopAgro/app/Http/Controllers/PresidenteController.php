<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use App\Http\Controllers\Controller;

class PresidenteController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }

    public function index () {
        return view('presidente.index');
    }

    public function login () {
        return view('presidente.login');
    }

    public function postLogin (Request $request) {

        $validator = validator($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if ($validator->fails()) {
             return redirect('/presidente/login')
                        ->withErrors($validator)
                        ->withInput();
        }

        $credentials = ['email' => $request->get('email'), 'password' => $request->get('password')];
        if (auth()->guard('presidente')->attempt($credentials)) {
            return redirect ('/presidente');
        }
        else {
            return redirect ('/presidente/login')
                    ->withErrors(['Errors' => 'Login Invalido'])
                    ->withInput();
        }
    }

    public function logout () {
            auth()->guard('presidente')->logout();
            return redirect ('/presidente/login');
    }
}
