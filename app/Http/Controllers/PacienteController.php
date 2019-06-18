<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Forms\PacienteForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();

        // return $pacientes; // Isso aqui retorna só o JSON

        return view('paciente.index', [
            'pacientes' => $pacientes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = $this->formBuilder->create(PacienteForm::class, [
            'url' => route('paciente.store'),
            'method' => 'POST'
        ]);

        return view('paciente.create', [
            'form' => $form
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente($request->all());

        try {
            $paciente->save();

            return redirect()
                ->route('paciente.index')
                ->with('alert-success', 'Paciente cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha no cadastro do paciente!' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return view('paciente.show', [
            'paciente' => $paciente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        $form = $this->formBuilder->create(Paciente::class, [
            'url' => route('paciente.update', $paciente->id),
            'method' => 'PUT',
            'model' => $paciente
        ]);

        return view('paciente.edit', [
            'form' => $form
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $paciente->update($request->all());

        try {
            $paciente->save();

            return redirect()
                ->route('paciente.show', $paciente->id)
                ->with('alert-success', 'Paciente atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha na atualização do paciente!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
