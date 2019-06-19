<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Atendimento extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'CID',
        'tipo_atendimento',
        'quantidade_sessoes',
        'inicio',
        'fim'
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
     * Pertence a uma guia
     */
    public function guia()
    {
        return $this->belongsTo(Guia::class);
    }

    /**
     * Possui varias sessoes
     */
    public function sessoes()
    {
        return $this->hasMany(Sessao::class);
    }
}
