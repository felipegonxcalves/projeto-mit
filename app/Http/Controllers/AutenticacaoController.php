<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticacaoController extends Controller
{
    public function pageLogin()
    {
        return view('autenticacao.page_login');
    }
}