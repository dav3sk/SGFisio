<?php

namespace App\Forms;

use App\Models\Guia;
use Kris\LaravelFormBuilder\Form;

class AtendimentoForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('guia_id', Field::ENTITY, [
                'label' => 'Guia',
                'class' => Guia::class,
                'property' => 'data_emissao',
                'query_builder' => Guia::with(['paciente'])
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
