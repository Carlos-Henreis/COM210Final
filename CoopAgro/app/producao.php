<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producao extends Model
{
    protected $fillable = ['cpfprod', 'tipo', 'previsao', 'insumos', 'observacoes'];
    
    public function associaAssociado () {
        return $this->belongsTo('App\Associado');
    }
}
