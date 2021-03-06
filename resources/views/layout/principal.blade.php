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

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="bower_components/dropzone/downloads/css/dropzone.css">




    <title>Tivia TOYOTA 2019</title>


</head>
<body class="">



<div id="contenido">

    @yield('content')

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
<script src="js/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>


<script src="bower_components/dropzone/downloads/dropzone.min.js"></script>


<!-- cronometro -->



    @yield('script')














<script>




    function cargaCronometro(minutos){


        $.ajax({

            type: "POST",
            url:"/cargaCronometro",
            data: {'_token':'<?php echo csrf_token() ?>',"minutos":minutos,"segundos":segundos,"centesimas":centesimas},
            success:function(data){



            }

        });


    }


    $(".divregistro").on("click",".boton-respuesta",function () {

        $(".boton-respuesta").css("background","white");
        $(".boton-respuesta").removeClass("select");
        $(this).css("background","yellow");
        $(this).addClass("select");


    });

    $(".divregistro").on("click","#siguiente",function(){

        var valorPregunta = $("#id_pregunta").val();
        var valorOption= $(".select").attr("id_option");
        var id_usuario= 1;



        $.ajax({

            type: "POST",
            url:"/preguntas",
            data: {'_token':'<?php echo csrf_token() ?>','id_pregunta':valorPregunta,'valorOption':valorOption},
            success:function(data){

                $(".contenido-preguntas").html(data);

            }

        });



        $.ajax({

            type: "POST",
            url:"/cambioFinalizar",
            data: {'_token':'<?php echo csrf_token() ?>','id_pregunta':valorPregunta,'valorOption':valorOption},
            success:function(data){


                if(parseInt(data)==1){

                $(".divboton").html('  <button type="button" id="finalizar" class="btn btn-primary botonfonfig txtregistro">FINALIZAR</button>');

                }

            }

        });


    });

    $(".divregistro").on("click","#finalizar",function(){

        var valorPregunta = $("#id_pregunta").val();
        var valorOption= $(".select").attr("id_option");




        $.ajax({

            type: "POST",
            url:"/finalizar",
            data: {'_token':'<?php echo csrf_token() ?>','id_pregunta':valorPregunta,'valorOption':valorOption,'minutos':minutos,'segundos':segundos,'centesimas':centesimas},
            success:function(data){


                $(".reloj").html("");
                $(".tituloregistro").html("");
                $(".divboton").html("");
                $(".contenido-preguntas").html(data);



            }

        });



    });



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