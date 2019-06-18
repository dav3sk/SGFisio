@extends('adminlte::page')

@section('title', 'Visualizar Paciente')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Paciente {{ $paciente->nome }}</h1>
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="pull-right">
                    <a class="btn btn-xs btn-primary" href="{{ route('paciente.edit', $paciente->id) }}">Editar paciente</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-6">
                    <h2>Informações Pessoais</h2>

                    <p> <b>Nome:</b> {{ $paciente->nome }} </p>
                    <p> <b>Sexo:</b> {{ $paciente->sexo }} </p>
                    <p> <b>Data de Nascimento:</b> {{ date('d/m/Y', strtotime($paciente->data_nascimento)) }} </p>
                    <p> <b>CPF:</b> {{ $paciente->cpf }} </p>
                    <p> <b>Telefone:</b> {{ $paciente->telefone }} </p>
                </div>

                <div class="col-md-6">
                    <h2>Endereço</h2>

                    <p> <b>Cidade:</b> {{ $paciente->cidade }} </p>
                    <p> <b>Estado:</b> {{ $paciente->estado }} </p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
@endsection
