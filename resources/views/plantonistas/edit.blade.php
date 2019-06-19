@extends('adminlte::page')

@section('title', 'Editar plantonista')

@section('css')
@endsection

@section('content_header')
    @include('helpers.flash-message')
    <h1>Editar plantonista</h1>
@stop

@section('content')
    @include('plantonistas._form', [
        'form' => $form
    ])
@stop

