<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Session;
use Redirect;

use DB;
use Hash;
use App\Http\Requests;

class LogController extends Controller
{
    public function index()
    {
        return view("admin.log");
    }



    public function comprobar(Request $request)
    {

        $email = $request->email;
        $password = $request->password;


        if ($email != "" && $password != "") {

            $query = DB::select("select * from participantes where email= '" . $email . "'");


            if (count($query) > 0) { // si existe un participante con este email


                if ($query[0]->valido == 1) {

                    if ($query[0]->etapa1 != 1) {// cambiar campo etapa dependiendo de la etapa del concurso

                        if (Hash::check($password, $query[0]->password)) {

                            $_SESSION["name"] = $query[0]->nombre;
                            $_SESSION["id_participante"] = $query[0]->id_participante;

                            return redirect('trivia');// cambiar trivia por video si es etapa4

                        } else {
                            $mensaje = "Usuario y/o Contraseña incorrectos";
                            $succcess = 0;
                            return view("/", compact('mensaje', 'succcess'));
                        }

                    } else {
                        return redirect("participacion");
                    }

                } else {
                    return redirect("/");
                }

            } else {
                return redirect("/");
            }


        }





    }





    public function logout(){

        Auth::logout();

        unset($_SESSION["name"]);
        unset($_SESSION["id_participante"]);


        return Redirect::to('participacion');// cambiar a participacionVideo cuando estes en la etapa4

    }



}
