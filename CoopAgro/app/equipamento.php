<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipamento extends Model
{
    protected $fillable = ['tipo', 'idmaquina', 'descricao', 'dataaquisicao', 'datafabricacao', 'procedencia', 'valor']; 
}
