<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class insumo extends Model
{
    protected $fillable = ['nome', 'descricao', 'dataSolicitacao', 'dataEntrada', 'dataValidacao', 'tiposDisponiveis', 'valorUnitario', 'quantidade'];
}
