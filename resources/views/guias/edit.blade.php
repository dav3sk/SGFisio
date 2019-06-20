@extends('adminlte::page')

@section('title', 'Editar guia')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Editar guia</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'guias.index'
    ])
    @include('guias._form', [
        'form' => $form
    ])
@stop

