<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Forms\Field;
use App\Models\Plantonista;
use App\Models\Atendimento;

class SessaoForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('atendimento_id', Field::ENTITY, [
                'label' => 'Atendimento',
                'class' => Atendimento::class,
                'property' => 'id',
                'query_builder' => Atendimento::all()
            ])
            ->add('plantonista_id', Field::ENTITY, [
                'label' => 'Plantonista',
                'class' => Plantonista::class,
                'property' => 'nome',
                'query_builder' => Plantonista::all()
            ])
            ->add('data', Field::DATE, [
                'label' => 'Data',
                'rules' => 'required'
            ])
            ->add('horario', Field::TIME, [
                'label' => 'Horario',
                'rules' => 'required'
            ])
            ->add('evolucao', Field::TEXTAREA, [
                'label' => 'Evolução',
                'rules' => 'required'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Cadastrar'
            ]);
    }
}
