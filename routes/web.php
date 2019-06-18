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
    Route::get('/', 'PacienteController@index')->name('paciente.index');
    Route::get('/{paciente}', 'PacienteController@show')->name('paciente.show');

    Route::get('/create', 'PacienteController@create')->name('paciente.create');
    Route::post('/', 'PacienteController@store')->name('paciente.store');

    Route::put('/{paciente}', 'PacienteController@update')->name('paciente.update');
    Route::get('/{paciente}/edit', 'PacienteController@edit')->name('paciente.edit');
});
