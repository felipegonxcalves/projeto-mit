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
            \Session::put('logado', ['logado' => true]);
//            $request->session()->put(['logado' => true]);
//            session(['logado' => true]);
//            dd(\Session::get('logado'));
            return \redirect()->route('questoes');
        }

        return \redirect()->route('page.login');

    }
}
