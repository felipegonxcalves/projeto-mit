<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function pageLogin()
    {
        return view('autenticacao.page_login');
    }

    public function validaLogin(Request $request)
    {
        $validaUsuario = \DB::select('call spselidecandidato(?)',[$request->cpf]);
        if ($validaUsuario[0]->stsativo == "S"){
            $ideEntrevistado = \DB::select('call spselidecandidato(?)',[$request->cpf]);
            \Session::put('logado', ['logado' => true, 'ide_ntrevistado' => $ideEntrevistado]);
            return \redirect()->route('questoes');
        }

        return \redirect()->route('page.login');

    }
}
