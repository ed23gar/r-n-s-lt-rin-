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

    <link rel="stylesheet" href="css/animate.css">


    <title>Test</title>


</head>
<body class="">

<style>
    .extremos{
        background-image: url("img/background1.png");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;

        /*max-width: 1920px;*/
        /*margin: 0 auto;*/

    }

    #contenido{
        max-width: 1920px;
        margin: 0 auto;

    }


    /*@media(max-width: 991px){*/

        /*.extremos {*/
            /*background-image: url("img/bgmobile.jpg");*/
            /*background-repeat: no-repeat;*/
            /*background-size: cover;*/
            /*background-position: center;*/

        /*}*/


    /*}*/

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
        background: #a90000;
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



    .displayNone{
        display: none;
    }


    .displayYes{
        display: block;
    }

    /*@media (max-width: 767px) {*/
        /*.imagenes{*/
            /*display: none;*/
        /*}*/
    /*}*/

    @media(max-width: 991px){
        .tituloregistro {
            font-size: 30px;
        }

        .extremos {
            background-image: url("img/bgmobile1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;

        }

        .divregistro {
            /*height: 80%;*/
            width: 90%;
        }
        .divcopy{
            display: none;
        }
        .logofooter {
            width: 80%;
            margin-left: 10%;
            margin-top: 10px;
        }
        .divregistro {
            top: 42%;
        }
        .botonfonfig {
            height: 50px;
        }
        .txtregistro {
            font-size: 20px;
        }


    }
    @media(max-width: 991px){
        .txtregistro {
            font-size: 15px;
        }


    }
    @media(min-width: 700px) and (max-width: 991px){
        .divregistro {
            /*height: 80%;*/
            width: 70%;
        }
    }
    @media(min-width: 550px) and (max-width: 991px){
        .logofooter {
            width: 60%;
            margin-left: 20%;
        }
        .recuadro {
            margin-top: 25px;
            margin-bottom: 25px;
        }
    }
    @media(min-width: 992px) and (max-width: 999px){
        .divregistro {
            width: 60%;
        }
        .recuadro {
            height: 350px;
            padding-top: 5px;
        }
        .tituloregistro {
            font-size: 40px;
        }
    }
    @media(min-width: 1000px) and (max-width: 1400px){
        .divregistro {
            width: 40%!important;
        }
        .recuadro {
            height: 350px;
            padding-top: 5px;
        }
        .tituloregistro {
            font-size: 40px;
        }
    }
    @media(min-width: 1000px) and (max-width: 1400px){
        .divregistro {
            top: 45%;
        }
    }
    @media(min-width: 1800px){
        .divregistro {
            padding-top: 5%;
        }
        .txtregistro{
            font-size: 20px;
        }
    }






</style>


<div id="contenido">

    <div class="divregistro">
        <div>
            <div>
                <h1 class="titulo tituloregistro">REGISTRA <br> TU CÓDIGO</h1>
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

        {{--<div>--}}

                {{--<div class="recuadro">--}}

                    {{--<h2>!HAS SIDO REGISTRADO EXITOSAMENTE!</h2>--}}

                {{--</div>--}}
        {{--</div>--}}
    </div>

    <div class=" row extremos">

        <div class="col-md-7 imizq  d-flex align-items-end ">
            <img src="img/pareja1.png" alt="" width="" class="animated fadeInLeft imginterna1 imagenes ">
        </div>
        <div class="col-md-5 imder imagenes ">
            <img src="img/balonpie1.png" alt="" width="" class="animated fadeInDown imginterna2">
        </div>

    </div>
    <footer class=" row">
        <div class="col-lg-6 ">
            <div class="">
                <img src="img/logos1.png" alt="" width="" class="logofooter">
            </div>
        </div>
        <div class="col-md-6 divcopy">
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



<script>


    function myFunction(x) {

        tamanio= $(window).height()+100;



        if (x.matches) {// cuando es pequeño

            $(".imagenes").removeClass("displayYes");
            $(".imagenes").addClass("displayNone");
            $(".extremos").css("height", tamanio);





        } else {// cuando es grande
            $(".imagenes").removeClass("displayNone");
            $(".imagenes").addClass("displayYes");
            $(".extremos").css("height", "auto");
        }
    }



    var x = window.matchMedia("(max-width: 991px)")
    myFunction(x)
    x.addListener(myFunction)

    setTimeout(function piebalon() {$(".imizq").removeClass("displayNone");},1000);



</script>

</body>
</html>