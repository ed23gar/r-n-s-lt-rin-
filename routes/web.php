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


////login para la trivia


 Route::get('/', [ 'as' => 'login', 'uses' => function () {

     if (!empty($_SESSION["name"]) || isset($_SESSION["name"])) {
         return redirect('video');// si esta en etapa4 cambiar trivia por video
     }else{
         return view('welcome');
     }


 }]);




//--------------------Registro--------------//

/*Route::get('/', function () {//registro
    if (!empty($_SESSION["name"]) || isset($_SESSION["name"])) {

        return redirect('trivia');
    }else{
        return view('registro');
    }
});*/


  Route::post('registrarParticipante', "principalController@registrarParticipante");

//--------------------fin Registro--------------//


    Route::get('/trivia', "principalController@trivia");

    Route::post('/preguntas', "principalController@preguntas");

    Route::post('cargaCronometro','principalController@cargaCronometro');

    Route::post('cambioFinalizar','principalController@cambioFinalizar');

    Route::post('finalizar','principalController@finalizar');

    Route::get('participacion',function (){

        return view('participacion');
    });

    Route::get('participacionVideo',function (){

    return view('participacionVideo');
});


    Route::get('video','principalController@vistaVideo');

    Route::post('uploadsArchivos','principalController@uploadsArchivos');




//Login

Route::post('comprobar', 'LogController@comprobar');
Route::get('logout','LogController@logout');