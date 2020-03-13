<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'AutenticacaoController@pageLogin');

Route::get('/questoes', 'QuestoesController@pageQuestoesIndex');
Route::post('/questao2', 'QuestoesController@renderQuestao2')->name('questao02');

Route::post('/verifica-questao', 'QuestoesController@verificaQuestao')->name('verifica-questao');



