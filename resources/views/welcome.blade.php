@extends('layout.principal')

<style>

    .recuadro {
        height: 270px!important;
    }

    .divregistro{
        top:55%!important;
    }

</style>


@section('content')


    <div class="divregistro">
        <div>
            <div>
                <h1 class="titulo tituloregistro">INGRESA</h1>
            </div>
            <form method="post" action="comprobar">
                <div class="recuadro">





                    <div class="form-group ">
                        <label for="email" class="txtregistro">CORREO</label>
                        <input type="text" name="email" class="form-control esquinasr" id="email">
                    </div>

                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group ">
                        <label for="passw" class="txtregistro">CONTRASEÑA</label>
                        <input type="password" name="password" class="form-control esquinasr" id="passw">
                    </div>

                </div>
                <div class="divboton">
                    <button type="submit" class="btn btn-primary botonfonfig txtregistro">INGRESAR</button>
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




