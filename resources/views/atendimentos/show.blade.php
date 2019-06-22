@extends('adminlte::page')

@section('title', 'Visualizar atendimento')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Atendimento {{ $paciente->nome . ' - ' . $atendimento->tipo_atendimento }} </h1>
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
                        <h3 class="box-title">Informações da Guia</h3>
                    </div>

                    <div class="box-body">
                        <p> <b>Paciente:</b> {{ $paciente->nome }} </p>
                        <p> <b>Data de Emissão:</b> {{ date('d/m/Y', strtotime($guia->data_emissao)) }} </p>
                        <p> <b>Diagnostico:</b> {{ $guia->diagnostico }} </p>
                        <p> <b>Tempo de Lesão:</b> {{ date('d/m/Y', strtotime($guia->tempo_de_lesao)) }} </p>
                        <p> <b>Prioridade:</b> {{ $guia->prioridade }} </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box box-success" style="border: 1px solid #d2d6de;">
                    <div class="box-header with-border">
                        <h3 class="box-title">Informações do Atendimento</h3>
                    </div>

                    <div class="box-body">
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

    @if ($sessoes->count() > 0)
        <table class="table table-bordered table-condensed">
            <tbody>
                <div class="box-header with-border">
                    <h3 class="box-title">Sessões realizadas</h3>
                </div>

                @foreach ($sessoes as $sessao)
                <div class="col-md-12">
                    <div class="box box-success" style="border: 1px solid #d2d6de;">
                        <div class="box-body">
                            {{-- <p> <b>Plantonista:</b> {{ $sessao->plantonista()->get('nome') }} </p> --}}
                            <p> <b>Data:</b> {{ date('d/m/Y', strtotime($sessao->data)) }} </p>
                            <p> <b>Horário:</b> {{ $sessao->horario }} </p>
                            <p> <b>Evolução:</b> {{ $sessao->evolucao }} </p>
                        </div>
                    </div>
                </div>
                @endforeach
        </table>
    @endif
@stop

@section('js')
@endsection
