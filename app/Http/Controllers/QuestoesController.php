<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestoesController extends Controller
{
    public function pageQuestoesIndex()
    {
        return view('questoes.questao_01');
    }

    public function renderQuestao2(Request $request)
    {
        dd($request->all());
        return view('questoes.questao02');
    }
}
