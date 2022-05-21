<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/esporte/{ano}/{titulo}', function ($ano, $titulo) {

    echo "<h1>" . implode(" ", explode("-", $titulo)) . "</h1>";

});


Route::get('/cadastrar/{id?}', function ($id = null) {

    echo $id == null ? "Não tem id" : $id;

})->where("id", "[0-9]+");


/* ROTA SIMPLES */

Route::get('/noticias', function () {

    echo "Equilíbrio entre trabalho e vida pessoal eleva produtividade, diz estudo";

});

/* ROTA COM VARIÁVEL */

Route::get('/noticias/{id}', function ($id) {

    echo $id;

});

/* ROTA COM 2 OU + VARIÁVEIS */

Route::get('/noticias/{ano}/{mes}/{dia}/{titulo}', function ($ano, $mes, $dia, $titulo) {

    echo "<h1>" . implode(" ", explode("-", $titulo)) . "</h1>";

});

/* ROTA COM VARIÁVEIS OPCIONAIS */

Route::get('/esportes/{ano}/{mes?}/{dia?}/{titulo?}', function ($ano, $mes = null, $dia = null, $titulo = null) {
 
    echo $titulo == null ? "Notícias de $ano" : $titulo;

});

/* ROTA COM WHERE */

Route::get('/noticias/{id}', function ($id) {

    echo $id;

})->where("id", "[0-9]+");

Route::get('/cadastrar/{id?}', function ($id = null) {
    echo $id == null ? "Não tem id" : $id;
})->where("id", "[0-9]+");


/* Aula de 11-05-2022 */

Route::get('/{operation}/{v1}/{v2}', 'App\Http\Controllers\ArithmeticController@calc')
    ->whereIn('operation', ['soma', 'subtrai', 'multiplica'])
    ->where(["v1" => "[0-9]+", "v2" => "[0-9]+"]);