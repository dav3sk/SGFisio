<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sessao extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'atendimento_id',
        'plantonista_id',
        'data',
        'horario',
        'evolucao'
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
     * Pertence a um atendimento
     */
    public function atendimento()
    {
        return $this->belongsTo(Atendimento::class);
    }

    /**
     * Sessao e realizada por um plantonista
     */
    public function plantonista()
    {
        return $this->belongsTo(Plantonista::class, 'id');
    }
}
