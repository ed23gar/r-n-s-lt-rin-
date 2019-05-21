<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class principalController extends Controller
{



public function trivia(){

    $queryPreguntas=DB::select("select count(*) as conteo from preguntas where etapa = ".env('ETAPA_CONCURSO')."");
    $cant_preguntas=$queryPreguntas[0]->conteo;

    $queryPregunta=DB::select("select * from preguntas where etapa = ".env('ETAPA_CONCURSO')." limit 1");
    $preguntaTurno=$queryPregunta[0]->texto_pregunta;
    $id_pregunta=$queryPregunta[0]->id_pregunta;

    $queryOpciones=DB::select("select * from opciones where fk_id_pregunta = ".$id_pregunta."");
    $contOpciones=count($queryOpciones);

    $_SESSION["conteo_pregunta"]=1;


    return view('trivia',compact('queryPreguntas','preguntaTurno','id_pregunta','queryOpciones','cant_preguntas'));




}

    public function preguntas(Request $request){


        $_SESSION["conteo_pregunta"]++;//aumentamos uno a uno el conteo de las preguntas


        $queryPreguntas=DB::select("select count(*) as conteo from preguntas where etapa = ".env('ETAPA_CONCURSO')."");
        $cant_preguntas=$queryPreguntas[0]->conteo;

        $queryPregunta=DB::select("select * from preguntas where id_pregunta > $request->id_pregunta and etapa = etapa = ".env('ETAPA_CONCURSO')." limit 1");
        $preguntaTurno=$queryPregunta[0]->texto_pregunta;
        $id_pregunta=$queryPregunta[0]->id_pregunta;

        $queryOpciones=DB::select("select * from opciones where fk_id_pregunta = ".$id_pregunta."");
        $contOpciones=count($queryOpciones);






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
                    ?>

                    <button type="button" class="boton-respuesta" id_option="<?php echo $queryOpciones[$i]->id_opcion; ?>"><?php echo strtoupper($queryOpciones[$i]->texto_opcion); ?></button>

<?php } ?>

                </div>


            </div>

        </div>




<?php    }

}
