<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class principalController extends Controller
{

    public function preguntas(Request $request){



        $queryPreguntas=DB::select("select count(*) as conteo from preguntas where etapa = ".env('ETAPA_CONCURSO')."");
        $cant_preguntas=$queryPreguntas[0]->conteo;

        $queryPregunta=DB::select("select * from preguntas where id_pregunta > $request->id_pregunta limit 1");
        $preguntaTurno=$queryPregunta[0]->texto_pregunta;
        $id_pregunta=$queryPregunta[0]->id_pregunta;

        $queryOpciones=DB::select("select * from opciones where fk_id_pregunta = ".$id_pregunta."");
        $contOpciones=count($queryOpciones);






        ?>

        <div class="recuadro recuadroTrivia animated bounceInRight">



            <div class=" white">
                <p class="contador-preguntas"><?php echo "2 DE ".$cant_preguntas."" ?></p>
            </div>

            <div class="contenedor-preguntas white">
                <p class="pregunta"><?php echo strtoupper($preguntaTurno); ?></p>

                <div class="contenedor-respuesta">

                    <input type="hidden" id="id_pregunta" name="id_pregunta" value="1">

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
