<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

{{--<link rel="stylesheet" href="css/style.css">--}}

<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Test</title>


</head>
<body class="">

<style>
    #contenido{
        background-image: url("img/background.png");
        background-repeat: no-repeat;
        background-size: 100% 100%;
        background-position: center;

        max-width: 1920px;
        margin: 0 auto;

    }

    footer {
        height: 00px;
        background: white;
        padding-top: 10px;
    }


    .row {
        margin-left: 0 !important;
        margin-right: 0 !important;
    }

    .imizq {
        padding-left: 0;
    }

    .imder {
        padding-right: 0;
    }

    .imginterna1 {
        width: 100%;
        /*height: 100%;*/
    }

    .imginterna2 {
        width: 100%;
        /*height: 100%;*/
    }

    .logofooter {
        width: 50%;
        margin-left: 40%;
    }

    .copyfooter {
        margin-left: 25%;
        padding-top: 20px;
    }


    @font-face {

        font-family: "titulo";
        src: url("fonts/edosz.ttf");

    }

    @font-face {

        font-family: "texto";
        src: url("fonts/Futura.ttf");

    }

    .titulo {

        font-family: "titulo" !important;
        color: white;

    }

    .tituloregistro{
        text-align: center;
        font-size: 55px;
    }

    .recuadro{
        width: 90%;
        height: 450px;
        background: #a90000c2;
        margin-left: auto;
        margin-right: auto;

        border-radius: 50px 50px 50px 50px;
        -moz-border-radius: 50px 50px 50px 50px;
        -webkit-border-radius: 50px 50px 50px 50px;
        border: 0px none #000000;

        -webkit-box-shadow: 10px 10px 19px -5px rgba(0,0,0,0.75);
        -moz-box-shadow: 10px 10px 19px -5px rgba(0,0,0,0.75);
        box-shadow: 10px 10px 19px -5px rgba(0,0,0,0.75);

        padding-left: 40px;
        padding-right: 40px;
        padding-top: 45px;

        text-align: center;
    }


    .texto {
        font-family: "texto" !important;
    }
    .txtregistro{
        font-family: "texto" !important;
        color: white;
        font-style: italic;

        letter-spacing: 0.5pt;


    }




    .divregistro{
        position: absolute;
        left: 50%;
        top: 45%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);

        height: 80%;
        width: 25%;

        /*background: rgba(0,0,0,0.5);*/

        z-index: 1;
    }

    .esquinasr{
        border-radius: 50px 50px 50px 50px;
        -moz-border-radius: 50px 50px 50px 50px;
        -webkit-border-radius: 50px 50px 50px 50px;
        border: 0px none #000000;
    }

    .divboton{
        text-align: center;
    }

    .botonfonfig{
        margin-top: 15px;
        margin-bottom: 15px;
        background: #a90000c2;
        border-color: white;

        border-radius: 50px 50px 50px 50px;
        -moz-border-radius: 50px 50px 50px 50px;
        -webkit-border-radius: 50px 50px 50px 50px;

        width: 60%;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #980000;
        border: 0px none #000000;
    }

    .btn-primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #980000;
        border: 0px none #000000;
    }

    .btn-primary.focus, .btn-primary:focus {
        box-shadow: 0 0 0 0.0rem rgba(0,0,0,0);
    }

    .btn.focus, .btn:focus {
        outline: 0;
        box-shadow: 0 0 0 0.0rem rgba(0,0,0,0);
    }

    *::-moz-selection{
        background: none;
    }

    *::selection {
        background: none;
    }

    @media (max-width: 767px) {
        .extremos{
           display: none;
        }
    }



</style>


<div id="contenido">

    <div class="divregistro">
        <div>
            <div>
                <h1 class="titulo tituloregistro">REGISTRA TU CÓDIGO</h1>
            </div>
            <form>
                <div class="recuadro">

                    <div class="form-group ">
                        <label for="vin" class="txtregistro">NÚMERO VIN DEL AUTO</label>
                        <input type="text" class="form-control esquinasr" id="vin">
                    </div>

                    <div class="form-group ">
                        <label for="nombre" class="txtregistro">NOMBRE COMPLETO</label>
                        <input type="text" class="form-control esquinasr" id="nombre">
                    </div>

                    <div class="form-group">
                        <label for="email" class="txtregistro">CORREO ELECTRÓNICO</label>
                        <input type="email" class="form-control esquinasr" id="email" aria-describedby="emailHelp">
                    </div>

                    <div class="form-group">
                        <label for="telefono" class="txtregistro">TELÉFONO CELULAR</label>
                        <input type="text" class="form-control esquinasr" id="telefono">
                    </div>

                </div>
                <div class="divboton">
                    <button type="submit" class="btn btn-primary botonfonfig txtregistro">ACEPTAR</button>
                </div>
            </form>
        </div>
    </div>

    <div class=" row extremos">

        <div class="col-md-7 imizq  d-flex align-items-end ">
            <img src="img/pareja.png" alt="" width="" class="imginterna1">
        </div>
        <div class="col-md-5 imder ">
            <img src="img/balonpie.png" alt="" width="" class="imginterna2">
        </div>

    </div>
    <footer class=" row">
        <div class="col-md-6 ">
            <div class="">
                <img src="img/logos.png" alt="" width="" class="logofooter">
            </div>
        </div>
        <div class="col-md-6 ">
            <div class="">
                <h4 class="copyfooter ">
                    © Toyota México 2019.
                </h4>
            </div>
        </div>
    </footer>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

</body>
</html>