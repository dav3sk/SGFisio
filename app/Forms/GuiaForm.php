<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Forms\Field;

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
                'label' => 'Tempo de lesão',
                'rules' => 'required'
            ])
            ->add('prioridade', Field::SELECT, [
                'label' => 'Prioridade',
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
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Cadastrar'
            ]);
    }
}
