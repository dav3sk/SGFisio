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
    Route::get('/show', 'PacienteController@show')->name('pacientes.show');

    Route::get('/create', 'PacienteController@create')->name('pacientes.create');
    Route::post('/', 'PacienteController@store')->name('paciente.store');

    Route::get('/destroy', 'PacienteController@destroy')->name('pacientes.destroy');
    Route::get('/edit', 'PacienteController@edit')->name('pacientes.edit');
});
