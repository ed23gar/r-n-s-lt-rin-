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
            margin-top: -15px;
        }

        .boton-respuesta{

            width: 100%;
            margin-top: 20px;
            border-radius: 1px;
            font-size: 18px;
            font-weight: 600;
            font-style: italic;
            background-color: white;
        }

        .divregistro {

            width: 28%;

        }

        .recuadro{
            padding-right: 20px;
            padding-left: 20px;
        }

        .contenedor-respuesta{
            margin-top: -20px;
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

                <div class="contenido-preguntas">

                <div class="recuadro recuadroTrivia animated bounceInRight">



                    <div class=" white">
                        <p class="contador-preguntas"> {{$_SESSION["conteo_pregunta"]}} DE {{$cant_preguntas}}</p>
                    </div>

                    <div class="contenedor-preguntas white">
                        <p class="pregunta">{{ strtoupper($preguntaTurno) }}</p>

                        <div class="contenedor-respuesta">

                            <input type="hidden" id="id_pregunta" name="id_pregunta" value="{{$id_pregunta}}">


                            @foreach($queryOpciones as $opciones)

                                <button type="button" class="boton-respuesta" id_option="{{$opciones->id_opcion}}">{{$opciones->texto_opcion}}</button>

                                @endforeach


                        </div>


                    </div>

                    </div>



                </div>
                <div class="divboton">

                    {{$_SESSION["conteo_pregunta"]}}
                    @if($_SESSION["conteo_pregunta"]==$cant_preguntas)
                    <button type="button" id="siguiente" class="btn btn-primary botonfonfig txtregistro">SIGUIENTE</button>
                        @else
                        <button type="button" id="siguiente" class="btn btn-primary botonfonfig txtregistro">FINALIZAR</button>
                    @endif
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
