@extends('adminlte::page')

@section('title', 'Visualizar sessão')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Sessao {{ $sessao->data_hora }}</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'sessao.index'
    ])

    <table class="table table-bordered table-condensed">
        <tbody>
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações da Sessão</h3>
                    </div>
                    
                    <div class="box-body">
                        <p> <b>Data e Hora:</b> {{ date('d/m/Y', strtotime($sessao->data_hora)) }} </p>
                        <p> <b>Evolução:</b> {{ $sessao->evolucao }} </p>
                        <p> <b>Atendimento Id:</b> {{ $sessao->atendimento_id }} </p>
                        <p> <b>Plantonista Id:</b> {{ $sessao->plantonista_id }} </p>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
@stop

@section('js')
@endsection
