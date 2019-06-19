<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Plantonista extends Model
{
    use SoftDeletes;
    /**
     * Atributos do paciente
     */
    protected $fillable = [
        'nome',
        'email',
        'crefito',
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
}
