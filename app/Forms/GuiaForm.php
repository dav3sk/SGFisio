<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class GuiaForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('data_emissao', Field::DATE, [
                'label' => 'Data de emissão',
                'rules' => 'required'
            ])
            ->add('diagnostico', Field::TEXT, [
                'label' => 'Diagnóstico',
                'rules' => 'required'
            ])
            ->add('tempo_de_lesao', Field::DATE, [
                'label' => 'Data de Nascimento',
                'rules' => 'required'
            ])
            ->add('prioridade', Field::SELECT, [
                'label' => 'CPF',
                'choices' => [
                    1 => '1',
                    2 => '2',
                    3 => '3',
                    4 => '4',
                    5 => '5',
                ],
                'empty_value' => 'Selecione uma opção',
                'rules' => 'required'
            ]);
    }
}
