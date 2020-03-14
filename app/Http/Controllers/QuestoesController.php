<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestoesController extends Controller
{

    public function __construct()
    {
        if (\Session::get('logado') == null)
        {
            \Redirect::route("page.login")->send();
        }
    }

    public function pageQuestoesIndex() // Pergunta 01 ++
    {
        return view('questoes.questao_01');
    }

    public function renderQuestao2(Request $request)
    {
        dd($request->all());
        return view('questoes.questao02');
    }
}
