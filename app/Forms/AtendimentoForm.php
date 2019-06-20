<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class AtendimentoForm extends Form
{
    public function buildForm()
    {
        $this
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
            ]);
    }
}
