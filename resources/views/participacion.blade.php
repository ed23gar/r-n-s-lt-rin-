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

                <div class="contenido-preguntas">

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
                </div>

        </div>


    </div>



@stop




