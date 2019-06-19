<?php

namespace App\Http\Controllers;

use App\Models\Plantonista;
use App\Forms\PlantonistaForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PlantonistaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $plantonista = Plantonista::all();

        return view('plantonistas.index', [
            'plantonistas' => $plantonistas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = $this->formBuilder->create(PlantonistaForm::class, [
            'url' => route('plantonista.store'),
            'method' => 'POST'
        ]);

        return view('plantonistas.create', [
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
        $plantonista = new Plantonista($request->all());

        try {
            $plantonista->save();

            return redirect()
                ->route('plantonista.index')
                ->with('alert-success', 'Plantonista cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha no cadastro do plantonista!' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Plantonista $plantonista)
    {
        return view('plantonistas.show', [
            'plantonista' => $plantonista
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Plantonista $plantonista)
    {
        $form = $this->formBuilder->create(plantonistaForm::class, [
            'url' => route('plantonista.update', $plantonista->id),
            'method' => 'PUT',
            'model' => $plantonista
        ]);

        return view('plantonistas.edit', [
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
    public function update(Request $request, Plantonista $plantonista)
    {
        $plantonista->update($request->all());

        try {
            $plantonista->save();

            return redirect()
                ->route('plantonista.show', $plantonista->id)
                ->with('alert-success', 'Plantonista atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha na atualização do plantonista!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plantonista $plantonista)
    {
        $plantonista->delete();
    }
}
