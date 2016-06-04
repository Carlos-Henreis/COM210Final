<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Presidente extends Authenticatable
{
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'nascimento', 'sexo', 'telefone', 'endereco', 'inicio', 'fim',
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
