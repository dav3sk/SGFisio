<?php

namespace App\Forms;

use App\Models\Paciente;
use Kris\LaravelFormBuilder\Form;

class GuiaForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('paciente_id', Field::ENTITY, [
                'label' => 'Paciente',
                'class' => Paciente::class,
                'property' => 'nome',
                'query_builder' => Paciente::all()
            ])
            ->add('data_emissao', Field::DATE, [
                'label' => 'Data de emissão',
                'rules' => 'required'
            ])
            ->add('diagnostico', Field::TEXT, [
                'label' => 'Diagnóstico',
                'rules' => 'required'
            ])
            ->add('prioridade', Field::SELECT, [
                'label' => 'Prioridade',
                'choices' => [
                    1 => 'Baixo',
                    2 => 'Médio',
                    3 => 'Alto',
                    4 => 'Muito Alto',
                    5 => 'Risco',
                ],
                'empty_value' => 'Selecione uma opção',
                'rules' => 'required'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Cadastrar'
            ]);
    }
}
