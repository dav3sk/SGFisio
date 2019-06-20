@extends('adminlte::page')

@section('title', 'Visualizar Plantonista')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Plantonista {{ $plantonista->nome }}</h1>
@stop

@section('content')
    <div class="col-md-8 col-md-offset-2">
        <div class="box box-primary">
            <div class="box-header with-border">
                <div class="pull-right">
                    <a class="btn btn-xs btn-primary" href="{{ route('plantonistas.edit', $plantonista->id) }}">Editar plantonista</a>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="col-md-6">
                    <h2>Informações Pessoais</h2>

                    <p> <b>Nome:</b> {{ $plantonista->nome }} </p>
                    <p> <b>E-mail:</b> {{ $plantonista->email }} </p>
                    <p> <b>Sexo:</b> {{ $plantonista->sexo }} </p>
                    <p> <b>Data de Nascimento:</b> {{ date('d/m/Y', strtotime($plantonista->data_nascimento)) }} </p>
                    <p> <b>CPF:</b> {{ $plantonista->cpf }} </p>
                    <p> <b>Crefito:</b> {{ $plantonista->crefito }} </p>
                    <p> <b>Telefone:</b> {{ $plantonista->telefone }} </p>
                </div>

                <div class="col-md-6">
                    <h2>Endereço</h2>

                    <p> <b>Cidade:</b> {{ $plantonista->cidade }} </p>
                    <p> <b>Estado:</b> {{ $plantonista->estado }} </p>
                </div>
            </div>
        </div>
    </div>
@stop

@section('js')
@endsection
