@extends('layout.principal')

@section('content')

    <style>
        .contador{
            text-align: center;
            font-style: italic;
            font-size: 36px;
            font-weight: 500;
        }

        .contador-preguntas{
            font-style: italic;
            font-size: 26px;
            font-weight: 500;
        }

        .white{
            color:white;
        }

        .recuadroTrivia{
            width: 100%;
            padding-top: 20px;
        }

        .pregunta{

            font-style: italic;
            font-size: 20px;
            font-weight: 500;
        }

        .boton-respuesta{

            width: 100%;
            margin-top: 20px;
            border-radius: 10px;
            font-size: 18px;
            font-weight: 600;
            font-style: italic;
            background-color: white;
        }
    </style>


    <div class="divregistro">
        <div>
            <div>
                <h1 class="titulo tituloregistro">TRIVIA</h1>
                <div class="reloj">
                    <p class="contador white">00:06:00</p>
                </div>
            </div>
            <form>
                <div class="recuadro recuadroTrivia">

                    <div class=" white">
                        <p class="contador-preguntas"> 1 DE 15</p>
                    </div>

                    <div class="contenedor-preguntas white">
                        <p class="pregunta">¿EN QUE AÑO FUE EL PRIMER PARTIDO?</p>

                        <div class="contenedor-respuesta">

                            <input type="hidden" id="id_pregunta" name="id_pregunta" value="1">

                            <button type="button" class="boton-respuesta" id_option="1">1927</button>
                            <button type="button" class="boton-respuesta" id_option="2">1927</button>
                            <button type="button" class="boton-respuesta" id_option="3">1927</button>
                            <button type="button" class="boton-respuesta" id_option="4">1927</button>


                        </div>


                    </div>


                </div>
                <div class="divboton">
                    <button type="button" id="siguiente" class="btn btn-primary botonfonfig txtregistro">SIGUIENTE</button>
                </div>
            </form>
        </div>

        {{--<div>--}}

        {{--<div class="recuadro">--}}

        {{--<h2>!HAS SIDO REGISTRADO EXITOSAMENTE!</h2>--}}

        {{--</div>--}}
        {{--</div>--}}
    </div>

@stop
