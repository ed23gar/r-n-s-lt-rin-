<?php

session_start();


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

 /*Route::get('/', [ 'as' => 'login', 'uses' => function () {//login

     if (!empty($_SESSION["name"]) || isset($_SESSION["name"])) {
         return redirect('trivia');
     }else{
         return view('welcome');
     }


 }]);*/

Route::get('/', function () {//registro
    if (!empty($_SESSION["name"]) || isset($_SESSION["name"])) {

        return redirect('trivia');
    }else{
        return view('registro');
    }
});


//--------------------Registro--------------//



  Route::post('registrarParticipante', "principalController@registrarParticipante");




    Route::get('/trivia', "principalController@trivia");

    Route::post('/preguntas', "principalController@preguntas");

    Route::post('cargaCronometro','principalController@cargaCronometro');

    Route::post('cambioFinalizar','principalController@cambioFinalizar');

    Route::post('finalizar','principalController@finalizar');

    Route::get('participacion',function (){

        return view('participacion');
    });




//Login

Route::post('comprobar', 'LogController@comprobar');