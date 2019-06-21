@extends('adminlte::page')

@section('title', 'Cadastrar novo plantonista')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Cadastrar novo plantonista</h1>
@stop

@section('content')
    @include('helpers._button_voltar', [
        'rota' => 'plantonistas.index'
    ])
    @include('plantonistas._form', [
        'form' => $form
    ])
@stop
