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
    Route::get('/create', 'PacienteController@create')->name('paciente.create');
    Route::post('/', 'PacienteController@store')->name('paciente.store');
});
