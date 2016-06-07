<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\atendentes;

class AtendenteRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()//AQUI QUE VALIDA USUÀRIO
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    //Request adiciondo
    public function rules()//Os dados estão de forma adequda
    {

        return [
            'name' => 'required',
            'email' => 'required | unique:atendentes',
            'password' => 'required | min: 6',
            'cpf' => 'required | min: 11 | max:11 | unique:atendentes',
            'nascimento' => 'required | after:date_from: "1998/04/03"',
            'sexo' => 'required ',
            'salario' => 'required',
            'telefone' => 'required | min:10 | max: 12',
            'endereco' => 'required'
        ];
    }
}
