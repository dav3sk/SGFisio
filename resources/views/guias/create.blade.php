@extends('adminlte::page')

@section('title', 'Cadastrar nova guia')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Cadastrar nova guia</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'guias.index'
    ])
    @include('guias._form', [
        'form' => $form
    ])
@stop
