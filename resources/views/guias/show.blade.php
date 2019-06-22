@extends('adminlte::page')

@section('title', 'Visualizar guia')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Guia {{ $guia->paciente->nome }}|{{ $guia->data_emissao }}</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'guias.index'
    ])

    <table class="table table-bordered table-condensed">
        <tbody>
            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações do Paciente</h3>
                    </div>

                    <div class="box-body">
                    @if ($paciente != NULL)
                            <p> <b>Paciente:</b> {{ $paciente->nome }} </p>
                            <p> <b>Sexo:</b> {{ $paciente->sexo }} </p>
                            <p> <b>Data de Nascimento:</b> {{ date('d/m/Y', strtotime($paciente->data_nascimento)) }} </p>
                            <p> <b>CPF:</b> {{ $paciente->cpf }} </p>
                            <p> <b>Telefone:</b> {{ $paciente->telefone }} </p>
                    @else
                        <p> Sem paciente vinculado. </p>
                    @endif
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações da Guia</h3>
                    </div>

                    <div class="box-body">
                        <p> <b>Data de Emissão:</b> {{ date('d/m/Y', strtotime($guia->data_emissao)) }} </p>
                        <p> <b>Diagnostico:</b> {{ $guia->diagnostico }} </p>
                        <p> <b>Tempo de Lesão:</b> {{ date('d/m/Y', strtotime($guia->tempo_de_lesao)) }} </p>
                        <p> <b>Prioridade:</b> {{ $guia->prioridade }} </p>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
@stop

@section('js')
@endsection
