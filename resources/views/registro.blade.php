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

    .texto {
        font-family: "texto" !important;
    }


    .divregistro{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        -webkit-transform: translate(-50%, -50%);
    }

</style>


<div id="contenido">

    <div class="divregistro">
        <h1>HOLA</h1>
    </div>

    <div class=" row">

        <div class="col-md-7 imizq d-flex align-items-end ">
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
                <h4 class="copyfooter texto">
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