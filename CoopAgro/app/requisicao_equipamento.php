<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class requisicao_equipamento extends Model
{
	protected $fillable = ['tipo', 'servico', 'associado', 'local', 'datainicio', 'horainicio', 'tempo', 'datafim', 'valor']; 
}
