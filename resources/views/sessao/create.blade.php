@extends('adminlte::page')

@section('title', 'Cadastrar nova sessão')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Cadastrar nova sessão</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'sessao.index'
    ])
    @include('sessao._form', [
        'form' => $form
    ])
@stop