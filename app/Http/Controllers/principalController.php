<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Hash;

class principalController extends Controller
{



    public function trivia(){


    if (!empty($_SESSION["name"]) || isset($_SESSION["name"])){

    $queryPreguntas=DB::select("select count(*) as conteo from preguntas where etapa = ".env('ETAPA_CONCURSO')."");
    $cant_preguntas=$queryPreguntas[0]->conteo;

    $queryPregunta=DB::select("select * from preguntas where etapa = ".env('ETAPA_CONCURSO')." limit 1");
    $preguntaTurno=$queryPregunta[0]->texto_pregunta;
    $id_pregunta=$queryPregunta[0]->id_pregunta;

    $queryOpciones=DB::select("select * from opciones where fk_id_pregunta = ".$id_pregunta."");
    $contOpciones=count($queryOpciones);

    $_SESSION["conteo_pregunta"]=1;

    $respuestaQuery=DB::select("select respuesta from respuestas where id_participante = ".$_SESSION["id_participante"]." and fk_id_pregunta = ".$id_pregunta." and etapa = ".env('ETAPA_CONCURSO')." ");

    if(count($respuestaQuery)>0){
        $respuesta=$respuestaQuery[0]->respuesta;
    }else{
        $respuesta=0;
    }


        $comprobar=DB::select("select count(fk_id_participante) as conteo from resultados where fk_id_participante = ".$_SESSION["id_participante"]."");

        if($comprobar[0]->conteo > 0){

            $cronometro=DB::select("select minutos, segundos, centesimas from resultados where fk_id_participante = ".$_SESSION["id_participante"]." ");

        }



    return view('trivia',compact('queryPreguntas','preguntaTurno','id_pregunta','queryOpciones','cant_preguntas','respuesta','cronometro'));

        }else{
        unset($_SESSION["name"]);

        return redirect("/");


    }


}

    public function preguntas(Request $request){


        $_SESSION["conteo_pregunta"]++;//aumentamos uno a uno el conteo de las preguntas


        $queryPreguntas=DB::select("select count(*) as conteo from preguntas where etapa = ".env('ETAPA_CONCURSO')."");
        $cant_preguntas=$queryPreguntas[0]->conteo;

        $queryPregunta=DB::select("select * from preguntas where id_pregunta > $request->id_pregunta and  etapa = ".env('ETAPA_CONCURSO')." limit 1");
        $preguntaTurno=$queryPregunta[0]->texto_pregunta;
        $id_pregunta=$queryPregunta[0]->id_pregunta;

        $queryOpciones=DB::select("select * from opciones where fk_id_pregunta = ".$id_pregunta."");
        $contOpciones=count($queryOpciones);


        $respuestaQuery=DB::select("select respuesta from respuestas where id_participante = ".$_SESSION["id_participante"]." and fk_id_pregunta = ".$id_pregunta." and etapa = ".env('ETAPA_CONCURSO')." ");
         $contRespuesta=count($respuestaQuery);

        if($contRespuesta>0){
            $id_respuestaBase=$respuestaQuery[0]->respuesta;
            DB::update("update respuestas set respuesta=".$request->valorOption." where id_participante=".$_SESSION["id_participante"]." and fk_id_pregunta =".$request->id_pregunta."");

        }else{
            $id_respuestaBase=1000;
            DB::insert("insert into respuestas (id_participante,etapa,fk_id_pregunta, respuesta) values (".$_SESSION["id_participante"].",".env('ETAPA_CONCURSO').",".$request->id_pregunta.",".$request->valorOption.")");
        }







        ?>

        <div class="recuadro recuadroTrivia animated bounceInRight">



            <div class=" white">
                <p class="contador-preguntas"><?php echo $_SESSION["conteo_pregunta"]." DE ".$cant_preguntas."" ?></p>
            </div>



            <div class="contenedor-preguntas white">
                <p class="pregunta"><?php echo strtoupper($preguntaTurno); ?></p>

                <div class="contenedor-respuesta">

                    <input type="hidden" id="id_pregunta" name="id_pregunta" value="<?php echo $id_pregunta?>">

                    <?php

                    for($i=0; $i < $contOpciones; $i++){

                        if($queryOpciones[$i]->id_opcion==$id_respuestaBase){
                    ?>

                    <button type="button" class="boton-respuesta select" id_option="<?php echo $queryOpciones[$i]->id_opcion; ?>"><?php echo strtoupper($queryOpciones[$i]->texto_opcion); ?></button>

<?php }else{ ?>

                            <button type="button" class="boton-respuesta " id_option="<?php echo $queryOpciones[$i]->id_opcion; ?>"><?php echo strtoupper($queryOpciones[$i]->texto_opcion); ?></button>

                   <?php     }


                    } ?>

                </div>


            </div>

        </div>




<?php    }



    public function cambioFinalizar(Request $request){


        $queryPregunta=DB::select("select * from preguntas where id_pregunta > $request->id_pregunta and  etapa = ".env('ETAPA_CONCURSO')."");

        if(count($queryPregunta) ==1){

           echo 1;
        }




    }


    public function cargaCronometro(Request $request){


    $minutos=$request->minutos;
    $segundos=$request->segundos;
    $centesimas=$request->centesimas;

    $comprobar=DB::select("select count(fk_id_participante) as conteo from resultados where fk_id_participante = ".$_SESSION["id_participante"]."");

    if($comprobar[0]->conteo > 0){

        DB::update("update resultados set minutos=$minutos, segundos=$segundos, centesimas =$centesimas where fk_id_participante = ".$_SESSION["id_participante"]." ");

    }else{

        DB::insert("insert into resultados (fk_id_participante,etapa,minutos,segundos,centesimas, fecha) values (".$_SESSION["id_participante"].",".env('ETAPA_CONCURSO').",$minutos,$segundos,$centesimas, SYSDATE()) ");
    }



}



    public function finalizar(Request $request){ ?>



    <div class="recuadro recuadroTrivia animated bounceInRight">



        <div class="contenedor-preguntas white">

            <div class="contenedor-respuesta">

                <h1 class="titulo tituloregistro ganaste">¡FELICIDADES!<br> COMPLETASTE LA TRIVIA</h1>
                <br>

                <h3>En caso de haber pasado a la siguiente ronda te contactaremos para que sigas participando.</h3>

                <h3 class="suerte" >¡SUERTE!</h3>

            </div>


        </div>

    </div>






<?php

    $respuestaQuery=DB::select("select respuesta from respuestas where id_participante = ".$_SESSION["id_participante"]." and fk_id_pregunta = ".$request->id_pregunta." and etapa = ".env('ETAPA_CONCURSO')." ");

    $contRespuesta=count($respuestaQuery);

    if($contRespuesta>0){
        $id_respuestaBase=$respuestaQuery[0]->respuesta;
        DB::update("update respuestas set respuesta=".$request->valorOption." where id_participante=".$_SESSION["id_participante"]." and fk_id_pregunta =".$request->id_pregunta."");

    }else{
        $id_respuestaBase=1000;
        DB::insert("insert into respuestas (id_participante,etapa,fk_id_pregunta, respuesta) values (".$_SESSION["id_participante"].",".env('ETAPA_CONCURSO').",".$request->id_pregunta.",".$request->valorOption.")");
    }



DB::update("update participantes set etapa1=1 where id_participante= ".$_SESSION["id_participante"]."");


    unset($_SESSION["name"]);
    unset($_SESSION["id_participante"]);

}



    public function registrarParticipante(Request $request){



            $alpha = "123qwertyuiopa456sdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXNCMV789";
            $code = "";
            $longitud=8;

            $consultaParticipantes = DB::select("select * from participantes where email= '".$request->email."' or vin= ".$request->vin."  ");
            $comprobar=count($consultaParticipantes);

            if($comprobar==0){



                for($z=0;$z<$longitud;$z++){// creamos la contraseña y la encriptamos
                    $code .= $alpha[rand(0, strlen($alpha)-1)];
                }

                echo $code;
                $codeEncrypt=Hash::make($code);

                //enviar correo

                $titulo = 'Inscripción para la Trivia Toyota 2019';
                $mensaje = '<html>'.
                    '<head><title>Inscripción trivia Toyota 2019</title></head>'.
                    '<body><h1>Felicidades, te has inscrito satisfactoriamente para la trivia Toyota 2019  </h1>'.
                    '<hr>'.
                    '<p>Las credenciales para poder ingresar a la trivia es:</p>'.
                    '<p>correo: '.$request->email.'</p>'.
                    '<p>Su nuevo password es: '.$code.'</p>'.
                    '</body>'.
                    '</html>';

                $cabeceras = 'MIME-Version: 1.0' . "\r\n";
                $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $cabeceras .= 'From: toyota.com>';

              // $enviado = mail($request->email, $titulo, $mensaje, $cabeceras);



                DB::insert("insert into participantes (vin, nombre, email, password, telefono) values ('".$request->vin."','".$request->nombre."','".$request->email."','".$codeEncrypt."',".$request->telefono.")");




            }else{ // mensaje de que el usuario ya existe


                echo "no entro";

            }







    }


}
