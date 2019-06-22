<?php

namespace App\Forms;

use App\Models\Guia;
use Kris\LaravelFormBuilder\Form;

class AtendimentoForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('guia_id', Field::SELECT, [
                'label' => 'Guia',
                'choices' => [
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                ],
                'empty_value' => 'Selecione uma opção',
                'rules' => 'required'
            ])
            ->add('CID', Field::TEXT, [
                'label' => 'Código CID',
                'rules' => 'required'
            ])
            ->add('tipo_atendimento', Field::TEXT, [
                'label' => 'Tipo de Atendimento',
                'rules' => 'required'
            ])
            ->add('quantidade_sessoes', Field::NUMBER, [
                'label' => 'Quantidade de Sessões',
                'rules' => 'required'
            ])
            ->add('inicio', Field::DATE, [
                'label' => 'Data de Início',
                'rules' => 'required'
            ])
            ->add('fim', Field::DATE, [
                'label' => 'Data de Termino',
                'rules' => 'required'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Cadastrar'
            ]);
    }
}
