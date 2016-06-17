<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producao extends Model
{
    protected $fillable = ['tipo', 'previsao', 'insumos', 'observacoes'];
}
