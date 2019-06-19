@extends('adminlte::page')

@section('title', 'Visualizar Paciente')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Paciente {{ $paciente->nome }}</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'pacientes.index'
    ])

    <table class="table table-bordered table-condensed">
        <tbody>
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações Pessoais</h3>
                    </div>
                    
                    <div class="box-body">
                        <p> <b>Nome:</b> {{ $paciente->nome }} </p>
                        <p> <b>Sexo:</b> {{ $paciente->sexo }} </p>
                        <p> <b>Data de Nascimento:</b> {{ date('d/m/Y', strtotime($paciente->data_nascimento)) }} </p>
                        <p> <b>CPF:</b> {{ $paciente->cpf }} </p>
                        <p> <b>Telefone:</b> {{ $paciente->telefone }} </p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">

                    <div class="box-header with-border">
                        <h3 class="box-title">Endereço</h3>
                    </div>

                    <div class="box-body">
                        <p> <b>Cidade:</b> {{ $paciente->cidade }} </p>
                        <p> <b>Estado:</b> {{ $paciente->estado }} </p>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
@stop

@section('js')
@endsection
