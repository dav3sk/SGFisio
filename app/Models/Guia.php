<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    protected $atributos = [
        'data_emissao',
        'diagnostico',
        'tempo_de_lesao',
        'prioridade'
    ];

    /**
     * Pertence a um paciente
     */
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }
}
