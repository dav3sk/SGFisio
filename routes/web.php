<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Rotas Pacientes
Route::group(['prefix' => 'pacientes'], function () {
    Route::get('/create', 'PacienteController@create')->name('pacientes.create');
    Route::post('/', 'PacienteController@store')->name('pacientes.store');

    Route::get('/', 'PacienteController@index')->name('pacientes.index');
    Route::get('/{paciente}', 'PacienteController@show')->name('pacientes.show');

    Route::get('/{paciente}/edit', 'PacienteController@edit')->name('pacientes.edit');
    Route::put('/{paciente}', 'PacienteController@update')->name('pacientes.update');

    Route::delete('/{paciente}/destroy', 'PacienteController@destroy')->name('pacientes.destroy');
});

// Rotas Plantonistas
Route::group(['prefix' => 'plantonistas'], function () {
    Route::get('/create', 'PlantonistaController@create')->name('plantonistas.create');
    Route::post('/', 'PlantonistaController@store')->name('plantonistas.store');

    Route::get('/', 'PlantonistaController@index')->name('plantonistas.index');
    Route::get('/{plantonista}', 'PlantonistaController@show')->name('plantonistas.show');

    Route::get('/{plantonista}/edit', 'PlantonistaController@edit')->name('plantonistas.edit');
    Route::put('/{plantonista}', 'PlantonistaController@update')->name('plantonistas.update');

    Route::delete('/{plantonista}/destroy', 'PlantonistaController@destroy')->name('plantonistas.destroy');
});

// Rotas Guias
Route::group(['prefix' => 'guias'], function () {
    Route::get('/create', 'GuiaController@create')->name('guias.create');
    Route::post('/', 'GuiaController@store')->name('guias.store');

    Route::get('/', 'GuiaController@index')->name('guias.index');
    Route::get('/{guia}', 'GuiaController@show')->name('guias.show');

    Route::get('/{guia}/edit', 'GuiaController@edit')->name('guias.edit');
    Route::put('/{guia}', 'GuiaController@update')->name('guias.update');

    Route::delete('/{guia}/destroy', 'GuiaController@destroy')->name('guias.destroy');
});

// Rotas Atendimento
Route::group(['prefix' => 'atendimento'], function () {
    Route::get('/create', 'AtendimentoController@create')->name('atendimentos.create');
    Route::post('/', 'AtendimentoController@store')->name('atendimentos.store');

    Route::get('/', 'AtendimentoController@index')->name('atendimentos.index');
    Route::get('/{atendimento}', 'AtendimentoController@show')->name('atendimentos.show');

    Route::get('/{atendimento}/edit', 'AtendimentoController@edit')->name('atendimentos.edit');
    Route::put('/{atendimento}', 'AtendimentoController@update')->name('atendimentos.update');

    Route::delete('/{atendimento}/destroy', 'AtendimentoController@destroy')->name('atendimentos.destroy');
});

// Rotas Sessões
Route::group(['prefix' => 'sessoes'], function(){
    Route::get('/create', 'SessaoController@create')->name('sessoes.create');
    Route::post('/', 'SessaoController@store')->name('sessoes.store');

    Route::get('/', 'SessaoController@index')->name('sessoes.index');
    Route::get('/{sessao}', 'SessaoController@show')->name('sessoes.show');

    Route::get('/{sessao}/edit', 'SessaoController@edit')->name('sessoes.edit');
    Route::put('/{sessao}', 'SessaoController@update')->name('sessoes.update');

    Route::delete('/{sessao}/destroy', 'SessaoController@destroy')->name('sessoes.destroy');
});
