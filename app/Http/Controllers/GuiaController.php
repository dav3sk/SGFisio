<?php

namespace App\Http\Controllers;

use App\Models\Guia;
use App\Forms\GuiaForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GuiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $guias = Guia::all();

        return view('guias.index', [
            'guias' => $guias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = $this->formBuilder->create(GuiaForm::class, [
            'url' => route('guias.store'),
            'method' => 'POST'
        ]);

        return view('guias.create', [
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
        $guia = new Guia($request->all());

        try {
            $guia->save();

            return redirect()
                ->route('guias.index')
                ->with('alert-success', 'Guia cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha no cadastro do guia!' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guia $guia)
    {
        return view('guias.show', [
            'guia' => $guia
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Guia $guia)
    {
        $form = $this->formBuilder->create(GuiaForm::class, [
            'url' => route('guias.update', $guia->id),
            'method' => 'PUT',
            'model' => $guia
        ]);

        return view('guias.edit', [
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
    public function update(Request $request, Guia $guia)
    {
        $guia->update($request->all());

        try {
            $guia->save();

            return redirect()
                ->route('guias.show', $guia->id)
                ->with('alert-success', 'Guia atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha na atualização do guia!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guia $guia)
    {
        $guia->delete();
    }
}
