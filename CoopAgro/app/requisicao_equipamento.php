<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requisicao_equipamento extends Model
{
	protected $fillable = ['tipo', 'cpf', 'servico', 'idmaquina', 'associado', 'local', 'datainicio', 'horainicio', 'tempo', 'datafim', 'valor']; 
}
