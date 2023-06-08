@extends('adminlte::page')

@section('title', 'PreAlta')

@section('content_header')
    <h1>PreAlta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Aqui se subirá la prealta</h1>
        </div>
        <div class="card-body">


            <form action="" class="form form-style" style="width: 80%; ">
                <div class="row">
                    <div class="col">
                        <label for="nombre">Nombre :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="nombre" name="nombre" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="apaterno">Apellido paterno :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="apaterno" name="apaterno" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="amaterno">Apellido materno :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="amaterno" name="amaterno" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="correo">Correo electrónico :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="correo" name="correo" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="curp">CURP :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="curp" name="curp" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="rfc">RFC :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="rfc" name="rfc" class="form-control">
                    </div>
                </div>
                <h5>Dirección</h5>
                <div class="row">
                    <div class="col">
                        <label for="calle">Calle y Numero:</label>
                    </div>
                    <div class="col">
                        <input type="text" id="calle" name="calle" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="manzana">Manzana :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="manzana" name="manzana" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="colonia">Colonia :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="colonia" name="colonia" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="municipio">Municipio :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="municipio" name="municipio" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="estado">Estado :</label>
                    </div>
                    <div class="col">
                        <input type="text" id="estado" name="estado" class="form-control">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="fecha_solicitud">Fecha de Solicitud:</label>
                    </div>
                    <div class="col">
                        <input type="date" id="fecha_solicitud" name="fecha_solicitud" class="form-control" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="reclutador">Reclutador:</label>
                    </div>
                    <div class="col">
                        <input type="text" id="reclutador" name="reclutador" class="form-control">
                    </div>
                </div>



            </form>
        </div>

    </div>
@stop

@section('css')

    <style>
        .form-style {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
    </style>
@stop

@section('js')
    <script>
        $(document).ready(function() {
            var currentDate = new Date().toISOString().split('T')[0];
            $('#fecha_solicitud').val(currentDate);

        });
    </script>
@stop
