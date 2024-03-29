<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Tecnico extends Authenticatable
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'nascimento', 'sexo', 'salario', 'telefone', 'endereco',
    ];
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
