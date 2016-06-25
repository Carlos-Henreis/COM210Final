<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProducaoRequest extends Request
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
            'cpfprod' => 'required',
            'tipo' => 'required',
            'previsao' => 'required | after:date_from: "1998/04/03"',
            'insumos' => 'required'
        ];
    }
}
