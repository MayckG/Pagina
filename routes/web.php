<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContatoController;

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


/*
//O código de rota abaixo pode ser substitúido por uma chamada de controller através do código abaixo.
//O controller deve estar configurado para que a execução responda à chamada.
Route::get('/contato/{id?}',function($id = null){
    return "Contato id = $id";
});
*/

/*
// na versão 8 esse código foi substituido pelo código abaixo
Route::get('/contato/{id?}',['uses'=>'ContatoController@index']);
*/
//Chamada de rota passando por um controller
Route::get('/contato/{id?}',[ContatoController::class,'index']);

/*
//O código de rota abaixo pode ser substitúido por uma chamada de controller através do código abaixo.
//O controller deve estar configurado para que a execução responda à chamada.
Route::post('/contato',function(){
    dd($_POST);
    return "Contato POST";
});
*/
//Chamada de rota passando por um controller
Route::post('/contato',[ContatoController::class,'criar']);

/*
//O código de rota abaixo pode ser substitúido por uma chamada de controller através do código abaixo.
//O controller deve estar configurado para que a execução responda à chamada.
Route::put('/contato',function(){
    return "Contato PUT";
});
*/
//Chamada de rota passando por um controller
Route::put('/contato',[ContatoController::class,'editar']);
