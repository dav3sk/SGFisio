@extends('adminlte::page')

@section('title', 'Visualizar Plantonista')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Plantonista {{ $plantonista->nome }}</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'plantonistas.index'
    ])

    <table class="table table-bordered table-condensed">
        <tbody>
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações Pessoais</h3>
                    </div>
                    
                    <div class="box-body">
                        <p> <b>Nome:</b> {{ $plantonista->nome }} </p>
                        <p> <b>E-mail:</b> {{ $plantonista->email }} </p>
                        <p> <b>Sexo:</b> {{ $plantonista->sexo }} </p>
                        <p> <b>Data de Nascimento:</b> {{ date('d/m/Y', strtotime($plantonista->data_nascimento)) }} </p>
                        <p> <b>CPF:</b> {{ $plantonista->cpf }} </p>
                        <p> <b>Crefito:</b> {{ $plantonista->crefito }} </p>
                        <p> <b>Telefone:</b> {{ $plantonista->telefone }} </p>
                    </div>
                </div>
            </div>
    
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">

                    <div class="box-header with-border">
                        <h3 class="box-title">Endereço</h3>
                    </div>

                    <div class="box-body">
                        <p> <b>Cidade:</b> {{ $plantonista->cidade }} </p>
                        <p> <b>Estado:</b> {{ $plantonista->estado }} </p>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
@stop

@section('js')
@endsection
