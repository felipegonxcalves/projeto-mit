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
        return view('questoes.questao01');
    }

    public function storeQuestoesIndex(Request $request)
    {
        $ide_entrevistado = \Session::get('logado');

        foreach ($request->check_per_1 as $resposta){
            \DB::select('call spinsresposta2(?, ?, ?)',[
                $ide_entrevistado['ide_ntrevistado'][0]->ideentrevistado,
                $request->nro_questao,
                $resposta
            ]);
        }

        return \redirect()->route($request->prox_questao);
    }

    public function renderQuestao2()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao02');
    }

    public function renderQuestao3()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao03');
    }


    public function renderQuestao4()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao04');
    }


    public function renderQuestao5()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao05');
    }


    public function renderQuestao6()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao06');
    }


    public function renderQuestao7()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao07');
    }


    public function renderQuestao8()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao08');
    }


    public function renderQuestao9()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao09');
    }


    public function renderQuestao10()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao10');
    }


    public function renderQuestao11()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao11');
    }


    public function renderQuestao12()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao12');
    }


    public function renderQuestao13()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao13');
    }


    public function renderQuestao14()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao14');
    }


    public function renderQuestao15()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao15');
    }


    public function renderQuestao16()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao16');
    }


    public function renderQuestao17()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao17');
    }


    public function renderQuestao18()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao18');
    }


    public function renderQuestao19()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao19');
    }

    public function renderQuestao20()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao20');
    }

    public function renderQuestao21()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao21');
    }

    public function renderQuestao22()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao22');
    }

    public function renderQuestao23()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao23');
    }


    public function renderQuestao24()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao24');
    }

    public function renderQuestao25()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao25');
    }

    public function renderQuestao26()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao26');
    }

    public function renderQuestao27()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao27');
    }

    public function renderQuestao28()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao28');
    }

    public function renderQuestao29()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao29');
    }

    public function renderQuestao30()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao30');
    }

    public function renderQuestao31()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao31');
    }

    public function renderQuestao32()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao32');
    }

    public function renderQuestao33()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao33');
    }

    public function renderQuestao34()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao34');
    }

    public function renderQuestao35()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao35');
    }

    public function renderQuestao36()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao36');
    }

    public function renderQuestao37()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao37');
    }

    public function renderQuestao38()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao38');
    }

    public function renderQuestao39()  // Sempre insere o da questão anterior
    {
        return view('questoes.questao39');
    }
}
