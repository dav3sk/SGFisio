<?php

namespace App\Http\Controllers;

use App\Models\Sessao;
use App\Forms\SessaoForm;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SessaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sessao = Sessao::all();

        return view('sessao.index', [
            'sessao' => $sessao
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $form = $this->formBuilder->create(SessaoForm::class, [
            'url' => route('sessoes.store'),
            'method' => 'POST'
        ]);

        return view('sessao.create', [
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
        $sessao = new Sessao($request->all());

        try {
            $sessao->save();

            return redirect()
                ->route('sessoes.index')
                ->with('alert-success', 'Sessão cadastrada com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha no cadastro da sessão!' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Sessao $sessao)
    {
        $atendimento = DB::table('atendimentos')->where('id', $sessao->atendimento_id)->first();
        $guia = DB::table('guias')->where('id', $atendimento->guia_id)->first();
        $paciente = DB::table('pacientes')->where('id', $guia->paciente_id)->first();
        $plantonista = DB::table('plantonistas')->where('id', $sessao->plantonista_id)->first();

        return view('sessao.show', [
            'sessao' => $sessao,
            'atendimento' => $atendimento,
            'paciente' => $paciente,
            'plantonista' => $plantonista
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Sessao $sessao)
    {
        $form = $this->formBuilder->create(SessaoForm::class, [
            'url' => route('sessoes.update', $sessao->id),
            'method' => 'PUT',
            'model' => $sessao
        ]);

        return view('sessao.edit', [
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
    public function update(Request $request, Sessao $sessao)
    {
        $sessao->update($request->all());

        try {
            $sessao->save();

            return redirect()
                ->route('sessoes.show', $sessao->id)
                ->with('alert-success', 'Sessao atualizada com sucesso!');
        } catch (\Exception $e) {
            return redirect()
                ->back()
                ->with('alert-danger', 'Falha na atualização da sessao!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sessao $sessao)
    {
        $sessao->delete();
    }
}
