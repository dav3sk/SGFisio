<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Paciente extends Model
{
    use SoftDeletes;
    /**
     * Atributos do paciente
     */
    protected $fillable = [
        'nome',
        'sexo',
        'data_nascimento',
        'cpf',
        'cidade',
        'estado',
        'telefone'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * Possui varias guias
     */
    public function guias()
    {
        return $this->hasMany(Guia::class);
    }
}
