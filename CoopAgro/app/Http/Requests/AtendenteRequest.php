<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

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
            'email' => 'required',
            'senha' => 'required | min: 6',
            'cpf' => 'required | min: 11 | max:11',
            'nascimento' => 'required',
            'sexo' => 'required | max: 1',
            'salario' => 'required',
            'telefone' => 'required | min:10 | max: 12',
            'endereco' => 'required'
        ];
    }
}
