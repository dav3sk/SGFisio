@extends('adminlte::page')

@section('title', 'Cadastrar novo paciente')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Cadastrar novo paciente</h1>
@stop

@section('content')
    @include('pacientes._form', [
        'form' => $form
    ])
@stop
