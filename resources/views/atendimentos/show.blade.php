@extends('adminlte::page')

@section('title', 'Visualizar atendimento')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Atendimento da guia {{ $atendimento->guia_id }}</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'atendimentos.index'
    ])

    <table class="table table-bordered table-condensed">
        <tbody>
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações do Atendimento</h3>
                    </div>
                    
                    <div class="box-body">
                        <p> <b>ID da Guia:</b> {{ $atendimento->guia_id }} </p>
                        <p> <b>CID:</b> {{ $atendimento->CID }} </p>
                        <p> <b>Tipo de Atendimento:</b> {{ $atendimento->tipo_atendimento }} </p>
                        <p> <b>Quantidade de Sessões:</b> {{ $atendimento->quantidade_sessoes }} </p>
                        <p> <b>Início:</b> {{ date('d/m/Y', strtotime($atendimento->inicio)) }} </p>
                        <p> <b>Fim:</b> {{ date('d/m/Y', strtotime($atendimento->fim)) }} </p>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
@stop

@section('js')
@endsection
