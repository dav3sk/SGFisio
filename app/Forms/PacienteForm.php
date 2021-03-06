<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Forms\Field;

class PacienteForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('nome', Field::TEXT, [
                'label' => 'Nome',
                'rules' => 'required|string'
            ])
            ->add('sexo', Field::SELECT, [
                'label' => 'Sexo',
                'choices' => [
                    'masculino' => 'Masculino',
                    'feminino' => 'Feminino',
                ],
                'empty_value' => 'Selecione uma opção',
                'rules' => 'required'
            ])
            ->add('data_nascimento', Field::DATE, [
                'label' => 'Data de Nascimento',
                'rules' => 'required'
            ])
            ->add('cpf', Field::TEXT, [
                'label' => 'CPF',
            ])
            ->add('cidade', Field::TEXT, [
                'label' => 'Cidade',
                'rules' => 'required|string'
            ])
            ->add('estado', Field::TEXT, [
                'label' => 'Estado',
                'rules' => 'required|string'
            ])
            ->add('rua', Field::TEXT, [
                'label' => 'Rua',
                'rules' => 'required|string'
            ])
            ->add('bairro', Field::TEXT, [
                'label' => 'Bairro',
                'rules' => 'required|string'
            ])
            ->add('telefone', Field::TEXT, [
                'label' => 'Telefone',
                'rules' => 'required|string'
            ])
            ->add('submit', Field::BUTTON_SUBMIT, [
                'label' => 'Cadastrar'
            ]);
    }
}
