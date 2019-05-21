@extends('layout.principal')

@section('content')


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

    @stop
