<?php

namespace App\Http\Controllers;

use App\Models\Atendimento;
use App\Forms\AtendimentoForm;
use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atendimentos = Atendimento::all();

        return view('atendimentos.index', [
            'atendimentos' => $atendimentos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = $this->formBuilder->create(AtendimentoForm::class, [
            'url' => route('atendimentos.store'),
            'method' => 'POST'
        ]);

        return view('atendimentos.create', [
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
        $atendimento = new Atendimento($request->all());

        try {
            $atendimento->save();

            return redirect()
                ->route('atendimentos.index')
                ->with('alert-success', 'Atendimento cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha no cadastro do atendimento!' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Atendimento $atendimento)
    {
        return view('atendimentos.show', [
            'atendimento' => $atendimento
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Atendimento $atendimento)
    {
        $form = $this->formBuilder->create(AtendimentoForm::class, [
            'url' => route('atendimentos.update', $atendimento->id),
            'method' => 'PUT',
            'model' => $atendimento
        ]);

        return view('atendimentos.edit', [
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
    public function update(Request $request, Atendimento $atendimento)
    {
        $atendimento->update($request->all());

        try {
            $atendimento->save();

            return redirect()
                ->route('atendimentos.show', $atendimento->id)
                ->with('alert-success', 'Atendimento atualizado com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha na atualização do atendimento!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atendimento $atendimento)
    {
        $atendimento->delete();
    }
}
