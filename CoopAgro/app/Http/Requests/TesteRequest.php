<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class TesteRequest extends Request
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
    public function rules()//Os dados estão de forma adequda
    {
        return [
            'descricao' => 'required'
        ];
    }
}
