<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    /**
     * Atributos do paciente
     */
    protected $atributos = [
        'nome',
        'sexo',
        'data_nascimento',
        'cpf',
        'cidade',
        'estado',
        'telefone'
    ];

    /**
     * Possui varias guias
     */
    public function guias()
    {
        return $this->hasMany(Guia::class);
    }
}
