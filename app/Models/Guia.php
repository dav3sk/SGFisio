<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guia extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'paciente_id',
        'data_emissao',
        'diagnostico',
        'tempo_de_lesao',
        'prioridade'
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
     * Pertence a um paciente
     */
    public function paciente()
    {
        return $this->belongsTo(Paciente::class);
    }

    /**
     * Possui um atendimento
     */
    public function atendimento()
    {
        return $this->hasOne(Atendimento::class);
    }
}
