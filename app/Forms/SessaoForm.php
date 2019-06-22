<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Forms\Field;

class SessaoForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('data_hora', Field::DATE, [
                'label' => 'Data e hora da sessão',
                'rules' => 'required'
            ])
            ->add('evolucao', Field::TEXT, [
                'label' => 'evolução',
                'rules' => 'required'
            ])
            ->add('atendimento id', Field::TEXT, [
                'label' => 'atendimento_id',
                'rules' => 'required'
            ])
            ->add('plantonista id', Field::TEXT, [
                'label' => 'plantonista_id',
                'rules' => 'required'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Cadastrar'
            ]);
    }
}
