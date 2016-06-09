<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;
use App\associado;

class AssociadoRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'cpf' => 'required | min: 11 | max: 15 | unique:associados',
            'rg' => 'required | min: 6 | max: 15 | unique:associados',
            'nascimento' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'email' => 'required | unique:associados',
            'tipo' => 'required'
        ];
    }
}
