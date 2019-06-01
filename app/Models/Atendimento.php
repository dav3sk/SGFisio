<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atendimento extends Model
{
    protected $atributos = [
        'CID',
        'tipo_atendimento',
        'quantidade_sessoes',
        'inicio',
        'fim'
    ];
}
