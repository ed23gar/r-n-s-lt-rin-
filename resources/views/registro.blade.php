@extends('layout.principal')

@section('content')


    <div class="divregistro">
        <div>
            <div>
                <h1 class="titulo tituloregistro">REGISTRA <br> TU CÓDIGO</h1>
            </div>
            <form method="post" action="registrarParticipante" >

                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <div class="recuadro">

                    <div class="form-group ">
                        <label for="vin" class="txtregistro">NÚMERO VIN DEL AUTO</label>
                        <input type="text" class="form-control esquinasr" name="vin" id="vin">
                    </div>

                    <div class="form-group ">
                        <label for="nombre" class="txtregistro">NOMBRE COMPLETO</label>
                        <input type="text" class="form-control esquinasr" name="nombre" id="nombre">
                    </div>

                    <div class="form-group">
                        <label for="email" class="txtregistro">CORREO ELECTRÓNICO</label>
                        <input type="email" class="form-control esquinasr" name="email" id="email" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="txtregistro">TELÉFONO CELULAR</label>
                        <input type="text" class="form-control esquinasr" name="telefono" id="telefono">
                    </div>

                </div>
                <div class="divboton">
                    <button type="submit" class="btn btn-primary botonfonfig txtregistro">ACEPTAR</button>
                </div>
            </form>
        </div>

        {{--<div>--}}

        {{--<div class="recuadro">--}}

        {{--<h2>!HAS SIDO REGISTRADO EXITOSAMENTE!</h2>--}}

        {{--</div>--}}
        {{--</div>--}}
    </div>
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

        font-size: 92px!important;
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






</style>

    <button type="button" class="btn btn-primary" id="pulsar" data-toggle="modal" data-target="#exampleModal" hidden></button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" data-backdrop=”static” data-keyboard=false tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" hidden class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
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






    @stop


@section('script')

    <script>

    $("#pulsar").click();

    $(".btn-comenzar").click(function () {

        $(".close").click();

    });


    </script>

@stop