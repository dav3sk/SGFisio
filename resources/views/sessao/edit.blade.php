@extends('adminlte::page')

@section('title', 'Editar sessão')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Editar sessão</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'sessoes.index'
    ])
    @include('sessao._form', [
        'form' => $form
    ])
@stop

