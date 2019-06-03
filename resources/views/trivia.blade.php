@extends('layout.principal')

@section('content')

    <style>
        .contador{

            width: 145px;
            margin: 0 auto 70px;

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






        .reloj{
            float: left;
            font-style: italic;
            font-size: 36px;
            font-weight: 500;
            color:white;
        }


        @media (min-width: 300px) and (max-width: 575px){
            .divregistro {
                width: 85%!important;
            }
            .recuadro {
                height: 510px;
            }
        }

        @media (min-width: 576px) and (max-width: 767px) {
            .divregistro {
                width: 70%!important;
            }
            .recuadro {
                height: 450px;
            }
        }
        @media (min-width: 768px) and (max-width: 991px) {
            .divregistro {
                width: 50%;
            }
        }
        @media (min-width: 992px) and (max-width: 1199px) {
            .divregistro {
                width: 91%!important;
                top: 42%;
            }
            .recuadro {
                height: 300px;
                padding-top: 0px;
            }

        }





        @media (min-width: 1200px) and (max-width: 1400px){
            .divregistro {
                width: 55%!important;
            }
        }
        @media (min-width: 1401px) and (max-width: 1800px){
            .divregistro {
                width: 45%!important;
            }
        }
        @media (min-width: 1801px){
            .divregistro {
                width: 40%!important;
                max-width: 800px;
            }
        }


        .select{

            background: yellow;

        }

        .ganaste{

            margin-top: 70px;


        }

        .suerte{
            text-align: right;
            margin-top: 3%;
        }


    </style>



    <div class="divregistro">
        <div>
                <h1 class="titulo tituloregistro">TRIVIA</h1>
                <div class="contador">

                <div class="reloj">

                    @if(isset($cronometro))
                        <div class="reloj" id="Minutos"  >@if($cronometro[0]->minutos<10)0{{$cronometro[0]->minutos}}@else {{$cronometro[0]->minutos}}    @endif</div>
                        <div class="reloj" id="Segundos" >:@if($cronometro[0]->segundos<10)0{{$cronometro[0]->segundos}}@else {{$cronometro[0]->segundos}}    @endif</div>
                        <div class="reloj" id="Centesimas" >:00</div>

                        @else
                        <div class="reloj" id="Minutos"  >00</div>
                        <div class="reloj" id="Segundos" >:00</div>
                        <div class="reloj" id="Centesimas" >:00</div>

                    @endif
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

                                @if($opciones->id_opcion==$respuesta)

                                <button type="button" class="boton-respuesta select" id_option="{{$opciones->id_opcion}}">{{$opciones->texto_opcion}}</button>

                                @else

                                    <button type="button" class="boton-respuesta" id_option="{{$opciones->id_opcion}}">{{$opciones->texto_opcion}}</button>
                                    @endif

                                @endforeach


                        </div>


                    </div>

                    </div>



                </div>
                <div class="divboton">
                        <button type="button" id="siguiente" class="btn btn-primary botonfonfig txtregistro">SIGUIENTE</button>

                </div>
            </form>
        </div>


    </div>


    <style>


        .modal{

            pointer-events: none;

        }

        .modal-content {

            background-color:#df050c ;
            border: 8px solid white!important;
            border-radius: 10px;

        }

        .modal-header {
            padding: inherit;
            border-bottom: 1px solid transparent;

        }

        .titulomodal{

            font-size: 40px!important;
            margin-bottom: 24px;
            margin-top: 20px;

        }

        .txtP{
            font-size: 26px!important;
            line-height:28px;
            margin-bottom: 24px;
        }



        @media (min-width: 576px) {
            .modal-dialog {
                max-width: 700px;
                margin: 1.75rem auto;
            }

        }

        .btn-comenzar{
            background-color:#df050c ;
            width: 40%;
            font-size: 30px;

        }

        .logoLiga{
            margin-top: -20px;
            margin-bottom: -20px;
        }






    </style>

    <?php
    $str = $_SESSION["name"];
    $nombre=explode(" ",$str);
    $nombre=$nombre[0];
    ?>

    <button type="button" class="btn btn-primary" id="pulsar" data-toggle="modal" data-target="#exampleModal" hidden></button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-backdrop=”static” data-keyboard=false tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                {{-- <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div> --}}
                <div class="modal-body">
                    <button type="button" hidden class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <center><h2 class="titulo titulomodal">{{strtoupper($nombre)}}, EL BALÓN EN TUS PIES.</h2></center>
                    <center><p class="txtregistro  txtP">RESPONDE CORRECTAMENTE LAS 10 PREGUNTAS <br> QUE A CONTINUACIÓN APARECERÁN.</p></center>
                    <center><p class="txtregistro txtP">RECUERDA ENTRE MÁS RÁPIDO CONTESTES <br> MÁS OPORTUNIDADES TIENES DE GANAR.</p></center>

                    <div class="divboton">
                        <button type="button" class="btn btn-primary botonfonfig txtregistro btn-comenzar">COMENZAR</button>
                    </div>

                    <div class="logoLiga" >
                        <center><img  src="img/LOGO_BLANCO.png" width="40%"  /></center>

                    </div>

                </div>

            </div>
        </div>
    </div>







@stop



@section('script')

    <script>
    @if(isset($cronometro))

        var centesimas = {{$cronometro[0]->centesimas}};
        var segundos = {{$cronometro[0]->segundos}};
        var minutos = {{$cronometro[0]->minutos}};
        var horas = 0;

    @else

        var centesimas = 0;
        var segundos = 0;
        var minutos = 0;
        var horas = 0;


    @endif

    </script>

    <script>



        @if(!isset($cronometro))

        $("#pulsar").click();

        @else
$(document).ready(function () {
            control = setInterval(cronometro,10);
        });


                @endif



        $(".btn-comenzar").click(function () {

            $(".close").click();

        });


    </script>




    <script src="js/cronometro.js"></script>

    @stop
