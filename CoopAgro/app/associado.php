<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class associado extends Model
{
    protected $fillable = [
        'name',
        'cpf',
        'rg',
        'nascimento',
        'endereco',
        'telefone',
        'email',
        'tipo'
        ];
    public function assoProducao () {
        $this->hasMany('App\producao');
    }
}
