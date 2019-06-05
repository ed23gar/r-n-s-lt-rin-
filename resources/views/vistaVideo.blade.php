@extends('layout.principal')


<style>

    .divboton{

        margin-top: 40px;
    }

    .divregistro{

        height: 250px!important;
        border: 4px solid white;
        width: 30%!important;
        border-radius: 10px;
        top: 50%!important;

    }

    .btn-subir{
        background-color:#df050c!important; ;
        width: 30%!important;
        font-size: 50px;
        font-weight: 900!important;
        font-style: italic;

    }

    .negrita{
        font-weight: 800;
        font-size: 14px;
    }

    .tituloExpl{


        position: absolute;
        border-radius: 10px;
        padding: 7px 10px 7px 10px;
        left: 50%;
        top: 28%;
        -webkit-transform: translate(-50%, -50%);
        z-index: 1;



    }

</style>



@section('content')


    <div class="tituloExpl">
        <center> <h1 class="titulo tituloregistro">{{$nombre}}, SUBE TU VIDEO</h1></center>

    </div>



    <div class="divregistro">
        <div>
                <div class="divboton">



                    <form  class="dropzone" id="dropzone" method="post" action="/uploadsArchivos">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="fallback">
                            <input name="file" type="file"/>
                        </div>

                    <div class="dz-default dz-message" style="cursor: pointer">
                        <img src="img/iconoSubir.png"><br>
                        <button type="submit" class="btn btn-primary botonfonfig  btn-subir">SUBIR</button>
                    </div>

                    </form>
                </div>

        </div>

        {{--<div>--}}

        {{--<div class="recuadro">--}}

        {{--<h2>!HAS SIDO REGISTRADO EXITOSAMENTE!</h2>--}}

        {{--</div>--}}
        {{--</div>--}}
    </div>


    {{-- modal

    <style>

        .modal-content {

            background-color:#df050c ;
            border: 8px solid white!important;
            border-radius: 10px;
            margin-top: 120px;

        }

        .modal-header {
            padding: inherit;
            border-bottom: 1px solid transparent;

        }

        .titulomodal{

            font-size: 86px!important;
            margin-bottom: 24px;
            margin-top: 60px;


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

        .close {
            float: right;
            font-size: 40px;
            font-weight: 900;
            line-height: 0;
            color: white;
            text-shadow: inherit;
            opacity: 1;
            border: 4px solid white!important;
            background-color: #b7b7b7!important;
            border-radius: 40px;
            height: 50px;
            width: 50px;
            padding-left: 8px!important;
            padding-top: 5px!important;
        }

        .equis{
            height: 10px;
        }


    </style>

    <button type="button" class="btn btn-primary" id="pulsar" data-toggle="modal" data-target="#exampleModal" hidden></button>


    <div class="modal fade" id="exampleModal" data-backdrop=”static” data-keyboard=false tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" class="equis">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <center><h2 class="titulo titulomodal">BIENVENIDO</h2></center>
                    <center><p class="txtregistro txtP">LA EMOCIÓN DE LA LIGA COMIENZA AQUÍ.</p></center>

                    <div class="logoLiga" >
                        <center><img  src="img/LOGO_BLANCO.png" width="40%"  /></center>

                    </div>

                </div>

            </div>
        </div>
    </div>


fin del modal--}}



@stop


@section('script')

    <script>

        $("#pulsar").click();

        $(".btn-comenzar").click(function () {

            $(".close").click();

        });





        //opciones de  dropzone

        Dropzone.autoDiscover = false;

        $("#dropzone").dropzone({

            addRemoveLinks: true,

            maxFilesize: 200000,

            autoProcessQueue: true,

            parallelChunkUpload:1,

            dictResponseError: "Ha ocurrido un error en el server",

            dictDefaultMessage: "Arrastre los Archivos o (Click)",

            acceptedFiles: 'video/*,.mp4,.avi,.png,.mkv,.mov,.wmv',

            success: function () {
                setTimeout(function () { window.location="logout"},6000)

            },

            error: function(file)

            {

                alert("Archivo no permitido " + file.name);

            },


        });


    </script>

@stop