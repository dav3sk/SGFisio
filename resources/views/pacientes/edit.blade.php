@extends('adminlte::page')

@section('title', 'Editar paciente')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Editar paciente</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'pacientes.index'
    ])
    @include('pacientes._form', [
        'form' => $form
    ])
@stop

