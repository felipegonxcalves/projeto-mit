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


//Route::group('plataforma-questoes', function () {
//
//});
Route::get('/login', 'AutenticacaoController@pageLogin')->name('page.login');

Route::group(['middleware' => ['web']], function () {
    // your routes here

    Route::post('/valida-login', 'AutenticacaoController@validaLogin')->name('valida.login');

    Route::get('/questoes', 'QuestoesController@pageQuestoesIndex')->name('questoes');
    Route::post('/questoes-store', 'QuestoesController@storeQuestoesIndex')->name('questoes.store');


    Route::get('/questao2', 'QuestoesController@renderQuestao2')->name('questao02');
    Route::get('/questao3', 'QuestoesController@renderQuestao3')->name('questao03');
    Route::get('/questao4', 'QuestoesController@renderQuestao4')->name('questao04');
    Route::get('/questao5', 'QuestoesController@renderQuestao5')->name('questao05');
    Route::get('/questao6', 'QuestoesController@renderQuestao6')->name('questao06');
    Route::get('/questao7', 'QuestoesController@renderQuestao7')->name('questao07');
    Route::get('/questao8', 'QuestoesController@renderQuestao8')->name('questao08');
    Route::get('/questao9', 'QuestoesController@renderQuestao9')->name('questao09');
    Route::get('/questao10', 'QuestoesController@renderQuestao10')->name('questao10');
    Route::get('/questao11', 'QuestoesController@renderQuestao11')->name('questao11');
    Route::get('/questao12', 'QuestoesController@renderQuestao12')->name('questao12');
    Route::get('/questao13', 'QuestoesController@renderQuestao13')->name('questao13');
    Route::get('/questao14', 'QuestoesController@renderQuestao14')->name('questao14');
    Route::get('/questao15', 'QuestoesController@renderQuestao15')->name('questao15');
    Route::get('/questao16', 'QuestoesController@renderQuestao16')->name('questao16');
    Route::get('/questao17', 'QuestoesController@renderQuestao17')->name('questao17');
    Route::get('/questao18', 'QuestoesController@renderQuestao18')->name('questao18');
    Route::get('/questao19', 'QuestoesController@renderQuestao19')->name('questao19');
    Route::get('/questao20', 'QuestoesController@renderQuestao20')->name('questao20');
    Route::get('/questao21', 'QuestoesController@renderQuestao21')->name('questao21');
    Route::get('/questao22', 'QuestoesController@renderQuestao22')->name('questao22');
    Route::get('/questao23', 'QuestoesController@renderQuestao23')->name('questao23');
    Route::get('/questao24', 'QuestoesController@renderQuestao24')->name('questao24');
    Route::get('/questao25', 'QuestoesController@renderQuestao25')->name('questao25');
    Route::get('/questao26', 'QuestoesController@renderQuestao26')->name('questao26');
    Route::get('/questao27', 'QuestoesController@renderQuestao27')->name('questao27');
    Route::get('/questao28', 'QuestoesController@renderQuestao28')->name('questao28');
    Route::get('/questao29', 'QuestoesController@renderQuestao29')->name('questao29');
    Route::get('/questao30', 'QuestoesController@renderQuestao30')->name('questao30');
    Route::get('/questao31', 'QuestoesController@renderQuestao31')->name('questao31');
    Route::get('/questao32', 'QuestoesController@renderQuestao32')->name('questao32');
    Route::get('/questao33', 'QuestoesController@renderQuestao33')->name('questao33');
    Route::get('/questao34', 'QuestoesController@renderQuestao34')->name('questao34');
    Route::get('/questao35', 'QuestoesController@renderQuestao35')->name('questao35');
    Route::get('/questao36', 'QuestoesController@renderQuestao36')->name('questao36');
    Route::get('/questao37', 'QuestoesController@renderQuestao37')->name('questao37');
    Route::get('/questao38', 'QuestoesController@renderQuestao38')->name('questao38');
    Route::get('/questao39', 'QuestoesController@renderQuestao39')->name('questao39');

    Route::post('/verifica-questao', 'QuestoesController@verificaQuestao')->name('verifica-questao');
});







