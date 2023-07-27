@extends('adminlte::page')

@section('title', 'Alta General')

@section('content_header')
    <h1>Altas General</h1>

@stop

@section('content')
    <link rel="stylesheet" href="{{ asset('css/moper.css') }}">
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Lista de altas en General</h1>
        </div>
        <div class="card-body">
            <table id="prealtatabla" class="table table-hover tabpre" style="width: 600px; overflow-x: auto;">
                <thead>
                    <tr>
                        <th>N° Empleado</th>
                        <th>Ejecutivo</th>
                        <th>Fecha Notificación</th>
                        <th>NSS</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Fecha Alta</th>
                        <th>Fecha Baja</th>
                        <th>Estatus</th>
                        <th>Salrio Mensual</th>
                        <th>Puesto</th>
                        <th>Centro de Costos</th>
                        <th>Cuenta</th>
                        <th>Predio</th>
                        <th>CURP</th>
                        <th>RFC</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Lugar de Nacimiento</th>
                        <th>Estado civil</th>
                        <th>Escolaridad</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Calle</th>
                        <th>Número</th>
                        <th>Manzana</th>
                        <th>Colonia</th>
                        <th>Codigo Postal</th>
                        <th>Municipio</th>
                        <th>Causa de baja</th>
                        <th>Beneficiario</th>
                        <th>Parentesco</th>
                        <th>Numero de cuenta bancario</th>
                        <th>Banco</th>
                        <th>Salario</th>
                        <th>MOPER ALTA</th>

                    </tr>
                </thead>
                <tbody>
                    <!-- Las filas de la tabla se generarán dinámicamente con JavaScript -->
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="modalmoperalta" tabindex="-1" aria-labelledby="modalmoperaltaLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <!-- Agregamos la clase modal-lg -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalmoperaltaLabel">MOPER ALTA</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">

                        <div id="moperbody">
                            <table border="0" cellpadding="0" cellspacing="0" id="sheet0" class="sheet0">
                                <col class="col0">
                                <col class="col1">
                                <col class="col2">
                                <col class="col3">
                                <col class="col4">
                                <col class="col5">
                                <col class="col6">
                                <col class="col7">
                                <col class="col8">
                                <col class="col9">
                                <col class="col10">
                                <col class="col11">
                                <col class="col12">
                                <col class="col13">
                                <col class="col14">
                                <col class="col15">
                                <col class="col16">
                                <col class="col17">
                                <col class="col18">
                                <col class="col19">
                                <col class="col20">
                                <col class="col21">
                                <col class="col22">
                                <col class="col23">
                                <col class="col24">
                                <col class="col25">
                                <col class="col26">
                                <col class="col27">
                                <col class="col28">
                                <col class="col29">
                                <col class="col30">
                                <col class="col31">
                                <col class="col32">
                                <col class="col33">
                                <col class="col34">
                                <col class="col35">
                                <col class="col36">
                                <col class="col37">
                                <tbody>
                                    <tr class="row0">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5">&nbsp;</td>
                                        <td class="column6">&nbsp;</td>
                                        <td class="column7">&nbsp;</td>
                                        <td class="column8">&nbsp;</td>
                                        <td class="column9">&nbsp;</td>
                                        <td class="column10">&nbsp;</td>
                                        <td class="column11">&nbsp;</td>
                                        <td class="column12">&nbsp;</td>
                                        <td class="column13">&nbsp;</td>
                                        <td class="column14">&nbsp;</td>
                                        <td class="column15">&nbsp;</td>
                                        <td class="column16">&nbsp;</td>
                                        <td class="column17">&nbsp;</td>
                                        <td class="column18">&nbsp;</td>
                                        <td class="column19">&nbsp;</td>
                                        <td class="column20">&nbsp;</td>
                                        <td class="column21">&nbsp;</td>
                                        <td class="column22">&nbsp;</td>
                                        <td class="column23">&nbsp;</td>
                                        <td class="column24">&nbsp;</td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row1">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5 style8 null style16" colspan="3" rowspan="6">
                                            <div style="position: relative;"><img
                                                    style="position: absolute; z-index: 1; left: 17px; top: -45px; width: 124px; height: 90px;"
                                                    src="{{ asset('assets/images/logo3.png') }}" border="0" /></div>
                                        </td>
                                        <td class="column8 style79 s style170" colspan="19" rowspan="2">BE GROUP
                                        </td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style169 null"></td>
                                        <td class="column32 style169 null"></td>

                                    </tr>
                                    <tr class="row2">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style171 null"></td>
                                        <td class="column32 style171 null"></td>

                                    </tr>
                                    <tr class="row3">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column8 style83 s style173" colspan="19" rowspan="2">MOVIMIENTO
                                            DE
                                            PERSONAL</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row4">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row5">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column8 style87 s style94" colspan="4" rowspan="2">CÓDIGO:
                                            F-MPER-RH/18</td>
                                        <td class="column12 style90 s style135" colspan="8" rowspan="2">VERSIÓN: 01
                                        </td>
                                        <td class="column20 style133 s style175" colspan="7" rowspan="2">Página
                                            <span
                                                style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt">1</span><span
                                                style="color:#000000; font-family:'Arial'; font-size:10pt"> de </span><span
                                                style="font-weight:bold; color:#000000; font-family:'Arial'; font-size:10pt">1</span>
                                        </td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row6">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row7">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style17 null"></td>
                                        <td class="column3 style17 null"></td>
                                        <td class="column4 style17 null"></td>
                                        <td class="column5 style18 null"></td>
                                        <td class="column6 style18 null"></td>
                                        <td class="column7 style18 null"></td>
                                        <td class="column8 style18 null"></td>
                                        <td class="column9 style18 null"></td>
                                        <td class="column10 style18 null"></td>
                                        <td class="column11 style18 null"></td>
                                        <td class="column12 style18 null"></td>
                                        <td class="column13 style18 null"></td>
                                        <td class="column14 style18 null"></td>
                                        <td class="column15 style97 null"></td>
                                        <td class="column16">&nbsp;</td>
                                        <td class="column17">&nbsp;</td>
                                        <td class="column18">&nbsp;</td>
                                        <td class="column19">&nbsp;</td>
                                        <td class="column20">&nbsp;</td>
                                        <td class="column21">&nbsp;</td>
                                        <td class="column22">&nbsp;</td>
                                        <td class="column23">&nbsp;</td>
                                        <td class="column24 style176 null"></td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style177 null"></td>
                                        <td class="column32 style177 null"></td>

                                    </tr>
                                    <tr class="row8">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style19 null"></td>
                                        <td class="column3 style19 null"></td>
                                        <td class="column4 style19 null"></td>
                                        <td class="column5 style17 null"></td>
                                        <td class="column6 style20 null"></td>
                                        <td class="column7 style20 null"></td>
                                        <td class="column8 style20 null"></td>
                                        <td class="column9 style20 null"></td>
                                        <td class="column10 style20 null"></td>
                                        <td class="column11 style20 null"></td>
                                        <td class="column12 style20 null"></td>
                                        <td class="column13 style20 null"></td>
                                        <td class="column14 style20 null"></td>
                                        <td class="column15 style98 null"></td>
                                        <td class="column16 style22 s style22" colspan="2">FECHA</td>
                                        <td class="column18 style138 f style138" colspan="6" id="fechaActual">
                                        </td>
                                        <td class="column24 style178 null"></td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row9">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style19 null"></td>
                                        <td class="column3 style19 null"></td>
                                        <td class="column4 style19 null"></td>
                                        <td class="column5 style17 null"></td>
                                        <td class="column6 style20 null"></td>
                                        <td class="column7 style20 null"></td>
                                        <td class="column8 style20 null"></td>
                                        <td class="column9 style20 null"></td>
                                        <td class="column10 style20 null"></td>
                                        <td class="column11 style20 null"></td>
                                        <td class="column12 style20 null"></td>
                                        <td class="column13 style20 null"></td>
                                        <td class="column14 style20 null"></td>
                                        <td class="column15 style99 null"></td>
                                        <td class="column16 style99 null"></td>
                                        <td class="column17 style99 null"></td>
                                        <td class="column18 style139 null"></td>
                                        <td class="column19 style139 null"></td>
                                        <td class="column20 style139 null"></td>
                                        <td class="column21 style139 null"></td>
                                        <td class="column22 style139 null"></td>
                                        <td class="column23 style139 null"></td>
                                        <td class="column24 style179 null"></td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row10">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style19 null"></td>
                                        <td class="column3 style19 null"></td>
                                        <td class="column4 style19 null"></td>
                                        <td class="column5 style19 null"></td>
                                        <td class="column6 style21 s style21" colspan="12">Seleccione la opcion a la que
                                            pertenezca el personal
                                        </td>
                                        <td class="column18 style140 null"></td>
                                        <td class="column19 style140 null"></td>
                                        <td class="column20 style140 null"></td>
                                        <td class="column21 style140 null"></td>
                                        <td class="column22 style140 null"></td>
                                        <td class="column23 style140 null"></td>
                                        <td class="column24 style19 null"></td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row11">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style19 null"></td>
                                        <td class="column3 style19 null"></td>
                                        <td class="column4 style19 null"></td>
                                        <td class="column5 style19 null"></td>
                                        <td class="column6 style22 s style22" colspan="2" rowspan="2">SEGESCRED
                                        </td>
                                        <td class="column8 style100 null style100" colspan="2" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column10 style98 null"></td>
                                        <td class="column11 style101 null"></td>
                                        <td class="column12 style22 s style22" colspan="3" rowspan="2">CLIENTE</td>
                                        <td class="column8 style100 null style100" colspan="2" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkcliente">
                                            </div>
                                        </td>
                                        <td class="column18 style20 null"></td>
                                        <td class="column19 style20 null"></td>
                                        <td class="column20 style20 null"></td>
                                        <td class="column21 style20 null"></td>
                                        <td class="column22 style20 null"></td>
                                        <td class="column23 style20 null"></td>
                                        <td class="column24 style179 null"></td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row12">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style19 null"></td>
                                        <td class="column3 style19 null"></td>
                                        <td class="column4 style19 null"></td>
                                        <td class="column5 style19 null"></td>
                                        <td class="column10 style98 null"></td>
                                        <td class="column11 style101 null"></td>
                                        <td class="column18 style140 null"></td>
                                        <td class="column19 style140 null"></td>
                                        <td class="column20 style140 null"></td>
                                        <td class="column21 style140 null"></td>
                                        <td class="column22 style140 null"></td>
                                        <td class="column23 style140 null"></td>
                                        <td class="column24 style141 null"></td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row13">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3 style23 null"></td>
                                        <td class="column4 style23 null"></td>
                                        <td class="column5 style23 null"></td>
                                        <td class="column6 style24 null"></td>
                                        <td class="column7 style24 null"></td>
                                        <td class="column8 style29 null"></td>
                                        <td class="column9 style29 null"></td>
                                        <td class="column10 style29 null"></td>
                                        <td class="column11">&nbsp;</td>
                                        <td class="column12">&nbsp;</td>
                                        <td class="column13 style29 null"></td>
                                        <td class="column14 style29 null"></td>
                                        <td class="column15 style29 null"></td>
                                        <td class="column16 style141 null"></td>
                                        <td class="column17 style141 null"></td>
                                        <td class="column18 style141 null"></td>
                                        <td class="column19 style141 null"></td>
                                        <td class="column20 style141 null"></td>
                                        <td class="column21 style29 null"></td>
                                        <td class="column22 style29 null"></td>
                                        <td class="column23 style29 null"></td>
                                        <td class="column24 style141 null"></td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>

                                    </tr>
                                    <tr class="row14">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4 style25 null"></td>
                                        <td class="column5 style26 s style26" colspan="2">SEMANA</td>
                                        <td class="column7 style27 s style27" colspan="2"># EMPLEADO</td>
                                        <td class="column9 style27 s style27" colspan="9">NOMBRE(Apellido Paterno,
                                            Materno
                                            Nombre(S)</td>
                                        <td class="column18 style142 s" colspan="4">FECHA DE INGRESO</td>
                                        <td class="column24 style26 s" colspan="5">FECHA DE BAJA</td>
                                        <td class="column27 style181 null"></td>
                                        <td class="column28 style181 null"></td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>

                                    </tr>
                                    <tr class="row15">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4 style25 null"></td>
                                        <td class="column5 style28 null style28" colspan="2" rowspan="2"
                                            id="currentweek"></td>
                                        <td class="column7 style28 null style28" colspan="2" rowspan="2"
                                            id="idempleado"></td>
                                        <td class="column9 style28 null style28" colspan="9" rowspan="2"
                                            id="nombrecompleto"></td>
                                        <td class="column18 style33 s style33" colspan="2">DIA</td>
                                        <td class="column20 style33 s">MES</td>
                                        <td class="column21 style143 s">AÑO</td>
                                        <td class="column22 style143 s style144" colspan="2">DIA</td>
                                        <td class="column24 style143 s style144" colspan="2">MES</td>
                                        <td class="column26 style143 s">AÑO</td>
                                        <td class="column27 style21 null"></td>
                                        <td class="column28 style149 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row16">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4 style25 null"></td>
                                        <td class="column18 style145 null style146" colspan="2" id="diaingreso"></td>
                                        <td class="column20 style57 null" id="mesingreso"></td>
                                        <td class="column21 style57 null" id="anoingreso"></td>
                                        <td class="column22 style145 null style146" colspan="2" id="diabaja"></td>
                                        <td class="column24 style145 null style146" colspan="2" id="mesbaja"></td>
                                        <td class="column26 style145 null" id="anobaja"></td>
                                        <td class="column27 style182 null"></td>
                                        <td class="column28 style182 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row17">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style29 null"></td>
                                        <td class="column3 style29 null"></td>
                                        <td class="column4 style29 null"></td>
                                        <td class="column5 style29 null"></td>
                                        <td class="column6 style29 null"></td>
                                        <td class="column7 style29 null"></td>
                                        <td class="column8 style29 null"></td>
                                        <td class="column9 style29 null"></td>
                                        <td class="column10 style29 null"></td>
                                        <td class="column11 style29 null"></td>
                                        <td class="column12 style23 null"></td>
                                        <td class="column13 style23 null"></td>
                                        <td class="column14 style29 null"></td>
                                        <td class="column15 style29 null"></td>
                                        <td class="column16 style29 null"></td>
                                        <td class="column17 style29 null"></td>
                                        <td class="column18 style29 null"></td>
                                        <td class="column19 style29 null"></td>
                                        <td class="column20 style29 null"></td>
                                        <td class="column21 style29 null"></td>
                                        <td class="column22 style29 null"></td>
                                        <td class="column23 style29 null"></td>
                                        <td class="column24 style29 null"></td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27 style6 null"></td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row18">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style30 null"></td>
                                        <td class="column4 style31 s style31" colspan="26">Seleccione una opcion por la
                                            cual
                                            se realiza el
                                            movimiento</td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row19">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style32 null"></td>
                                        <td class="column2 style32 null"></td>
                                        <td class="column3 style32 null"></td>
                                        <td class="column4 style26 s style26" colspan="4">ALTA</td>
                                        <td class="column8 style26 s style26" colspan="7">CAMBIO POR</td>
                                        <td class="column15 style26 s style26" colspan="5">PERMISO</td>
                                        <td class="column20 style26 s style26" colspan="8">BAJA POR</td>
                                        <td class="column28 style26 s style26" colspan="2">CAMBIO DE SALARIO</td>
                                        <td class="column30 style5 null"></td>
                                        <td class="column31 style5 null"></td>
                                        <td class="column32">&nbsp;</td>

                                    </tr>
                                    <tr class="row20">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style32 null"></td>
                                        <td class="column2 style32 null"></td>
                                        <td class="column3 style32 null"></td>
                                        <td class="column4 style33 s style33" colspan="2" rowspan="2">INGRESO</td>
                                        <td class="column6 style33 s style33" colspan="2" rowspan="2">REINGRESO
                                        </td>
                                        <td class="column8 style47 s style47" colspan="2" rowspan="2">PROMOCION
                                        </td>
                                        <td class="column10 style47 s style47" colspan="2" rowspan="2">TIPO DE
                                            NOMINA
                                        </td>
                                        <td class="column12 style47 s style47" colspan="3" rowspan="2">
                                            TRANSFERENCIA
                                        </td>
                                        <td class="column15 style47 s style47" colspan="2" rowspan="2">C/GOCE DE
                                            SUELDO
                                        </td>
                                        <td class="column17 style47 s style47" colspan="3" rowspan="2">S/GOCE DE
                                            SUELDO
                                        </td>
                                        <td class="column20 style33 s style33" colspan="2" rowspan="2">RENUNCIA
                                        </td>
                                        <td class="column22 style47 s style47" colspan="4" rowspan="2">TERMINACION
                                            DE
                                            CONTRATO</td>
                                        <td class="column26 style33 s style33" colspan="2" rowspan="2">OTROS</td>
                                        <td class="column28 style183 null style184" colspan="2" rowspan="3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column30 style6 null"></td>
                                        <td class="column31 style6 null"></td>
                                        <td class="column32">&nbsp;</td>

                                    </tr>
                                    <tr class="row21">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style32 null"></td>
                                        <td class="column2 style32 null"></td>
                                        <td class="column3 style32 null"></td>
                                        <td class="column30 style6 null"></td>
                                        <td class="column31 style6 null"></td>
                                        <td class="column32">&nbsp;</td>

                                    </tr>
                                    <tr class="row22">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style32 null"></td>
                                        <td class="column2 style32 null"></td>
                                        <td class="column3 style32 null"></td>
                                        <td class="column4 style34 null style34" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column6 style35 null style36" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column8 style35 null style36" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column10 style35 null style36" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column12 style35 null style36" colspan="3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column15 style34 null style34" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column17 style147 null style147" colspan="3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column20 style147 null style147" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column22 style147 null style147" colspan="4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column26 style147 s style147" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column30 style42 null"></td>
                                        <td class="column31 style42 null"></td>
                                        <td class="column32">&nbsp;</td>

                                    </tr>
                                    <tr class="row23">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style32 null"></td>
                                        <td class="column2 style32 null"></td>
                                        <td class="column3 style32 null"></td>
                                        <td class="column4 style37 null"></td>
                                        <td class="column5 style37 null"></td>
                                        <td class="column6 style38 null"></td>
                                        <td class="column7 style38 null"></td>
                                        <td class="column8 style38 null"></td>
                                        <td class="column9 style37 null"></td>
                                        <td class="column10 style37 null"></td>
                                        <td class="column11 style37 null"></td>
                                        <td class="column12 style37 null"></td>
                                        <td class="column13 style37 null"></td>
                                        <td class="column14 style37 null"></td>
                                        <td class="column15 style37 null"></td>
                                        <td class="column16 style37 null"></td>
                                        <td class="column17 style37 null"></td>
                                        <td class="column18 style37 null"></td>
                                        <td class="column19 style37 null"></td>
                                        <td class="column20 style148 null"></td>
                                        <td class="column21 style148 null"></td>
                                        <td class="column22 style148 null"></td>
                                        <td class="column23 style148 null"></td>
                                        <td class="column24 style148 null"></td>
                                        <td class="column25 style149 null"></td>
                                        <td class="column26 style149 null"></td>
                                        <td class="column27 style185 null"></td>
                                        <td class="column28 style149 null"></td>
                                        <td class="column29 style149 null"></td>
                                        <td class="column30 style185 null"></td>
                                        <td class="column31 style185 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row24">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style39 s style39" colspan="15">Datos que deben ser llenados
                                            por
                                            el responsable del
                                            area</td>
                                        <td class="column17 style149 null"></td>
                                        <td class="column18 style149 null"></td>
                                        <td class="column19 style149 null"></td>
                                        <td class="column20 style149 null"></td>
                                        <td class="column21 style149 null"></td>
                                        <td class="column22 style149 null"></td>
                                        <td class="column23 style149 null"></td>
                                        <td class="column24 style149 null"></td>
                                        <td class="column25 style149 null"></td>
                                        <td class="column26 style149 null"></td>
                                        <td class="column27 style185 null"></td>
                                        <td class="column28 style149 null"></td>
                                        <td class="column29 style149 null"></td>
                                        <td class="column30 style185 null"></td>
                                        <td class="column31 style185 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row25">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style40 s style40" colspan="3">CONCEPTO</td>
                                        <td class="column5 style41 s style41" colspan="4">CONDICIONES ACTUALES (LLENAR
                                            EN
                                            CAMBIOS Y BAJAS)</td>
                                        <td class="column9 style104 s style105" colspan="8">ALTAS O NUEVAS CONDICIONES
                                        </td>
                                        <td class="column17 style150 null"></td>
                                        <td class="column18 style150 null"></td>
                                        <td class="column19 style151 s style151" colspan="12">En caso de baja anote el
                                            motivo</td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row26">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style42 null"></td>
                                        <td class="column2 style43 s style43" colspan="3">PUESTO</td>
                                        <td class="column5 style44 null style106" colspan="4" id="puesto"></td>
                                        <td class="column9 style44 null style45" colspan="8">
                                            <input type="text" class="form-control"
                                                placeholder="Escribe aquí..."id="area">
                                        </td>
                                        <td class="column17 style152 null"></td>
                                        <td class="column18 style152 null"></td>
                                        <td class="column19 style153 null style153" colspan="12" rowspan="5">
                                            <textarea class="form-control" rows="5" placeholder="Escribe aquí..." id="causabaja"></textarea>
                                        </td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style42 null"></td>

                                    </tr>
                                    <tr class="row27">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style42 null"></td>
                                        <td class="column2 style43 s style43" colspan="3">AREA</td>
                                        <td class="column5 style44 null style106" colspan="4">
                                            <input type="text" class="form-control" placeholder="Escribe aquí..."
                                                id="area">
                                        </td>
                                        <td class="column9 style44 null style45" colspan="8">
                                            <input type="text" class="form-control" placeholder="Escribe aquí..."
                                                id="area">
                                        </td>
                                        <td class="column17 style152 null"></td>
                                        <td class="column18 style152 null"></td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style42 null"></td>

                                    </tr>
                                    <tr class="row28">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style42 null"></td>
                                        <td class="column2 style43 s style43" colspan="3">CONTRATO</td>
                                        <td class="column5 style44 null style106" colspan="4"></td>
                                        <td class="column9 style44 null style45" colspan="8">
                                            <input type="text" class="form-control" placeholder="Escribe aquí..."
                                                id="area">
                                        </td>
                                        <td class="column17 style152 null"></td>
                                        <td class="column18 style152 null"></td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style42 null"></td>

                                    </tr>
                                    <tr class="row29">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style42 null"></td>
                                        <td class="column2 style43 s style43" colspan="3">PREDIO</td>
                                        <td class="column5 style44 null style106" colspan="4" id="predio"></td>
                                        <td class="column9 style44 null style45" colspan="8">
                                            <input type="text" class="form-control" placeholder="Escribe aquí..."
                                                id="area">
                                        </td>
                                        <td class="column17 style152 null"></td>
                                        <td class="column18 style152 null"></td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style42 null"></td>

                                    </tr>
                                    <tr class="row30">
                                        <td class="column0 style7 null"></td>
                                        <td class="column1 style46 null"></td>
                                        <td class="column2 style43 s style43" colspan="3" rowspan="2">SUELDO</td>
                                        <td class="column5 style47 s style47" colspan="2" rowspan="2">ESPECIFICAR
                                            DE
                                            ACUERDO AL TIPO DE
                                            NOMINA</td>
                                        <td class="column7 style48 s">FIJO</td>
                                        <td class="column8 style48 s">VARIABLE</td>
                                        <td class="column9 style107 s style108" colspan="2">AUMENTO</td>
                                        <td class="column11 style107 s style108" colspan="2">EMPLEADO</td>
                                        <td class="column13 style107 s style108" colspan="2">FIJO</td>
                                        <td class="column15 style107 s style154" colspan="2">VARIABLE</td>
                                        <td class="column17 style149 null"></td>
                                        <td class="column18 style149 null"></td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row31">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column7 style49 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column8 style49 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column9 style109 null style110" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column11 style109 null style110" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column13 style111 null style112" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column15 style113 null style155" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column17 style156 null"></td>
                                        <td class="column18 style156 null"></td>
                                        <td class="column19 style156 null"></td>
                                        <td class="column20 style156 null"></td>
                                        <td class="column21 style157 null"></td>
                                        <td class="column22 style157 null"></td>
                                        <td class="column23 style157 null"></td>
                                        <td class="column24 style186 null"></td>
                                        <td class="column25 style149 null"></td>
                                        <td class="column26 style149 null"></td>
                                        <td class="column27 style149 null"></td>
                                        <td class="column28 style149 null"></td>
                                        <td class="column29 style149 null"></td>
                                        <td class="column30 style149 null"></td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row32">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style1 null"></td>
                                        <td class="column7 style1 null"></td>
                                        <td class="column8 style1 null"></td>
                                        <td class="column9 style1 null"></td>
                                        <td class="column10 style1 null"></td>
                                        <td class="column11 style1 null"></td>
                                        <td class="column12 style1 null"></td>
                                        <td class="column13 style1 null"></td>
                                        <td class="column14 style1 null"></td>
                                        <td class="column15 style1 null"></td>
                                        <td class="column16 style1 null"></td>
                                        <td class="column17 style149 null"></td>
                                        <td class="column18 style149 null"></td>
                                        <td class="column19 style149 null"></td>
                                        <td class="column20 style149 null"></td>
                                        <td class="column21 style149 null"></td>
                                        <td class="column22 style149 null"></td>
                                        <td class="column23 style149 null"></td>
                                        <td class="column24 style149 null"></td>
                                        <td class="column25 style149 null"></td>
                                        <td class="column26 style149 null"></td>
                                        <td class="column27 style149 null"></td>
                                        <td class="column28 style149 null"></td>
                                        <td class="column29 style149 null"></td>
                                        <td class="column30 style149 null"></td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row33">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style1 null"></td>
                                        <td class="column7 style1 null"></td>
                                        <td class="column8 style1 null"></td>
                                        <td class="column9 style1 null"></td>
                                        <td class="column10 style1 null"></td>
                                        <td class="column11 style1 null"></td>
                                        <td class="column12 style1 null"></td>
                                        <td class="column13 style1 null"></td>
                                        <td class="column14 style1 null"></td>
                                        <td class="column15 style1 null"></td>
                                        <td class="column16 style1 null"></td>
                                        <td class="column17 style149 null"></td>
                                        <td class="column18 style149 null"></td>
                                        <td class="column19 style149 null"></td>
                                        <td class="column20 style149 null"></td>
                                        <td class="column21 style149 null"></td>
                                        <td class="column22 style149 null"></td>
                                        <td class="column23 style149 null"></td>
                                        <td class="column24 style149 null"></td>
                                        <td class="column25 style149 null"></td>
                                        <td class="column26 style149 null"></td>
                                        <td class="column27 style149 null"></td>
                                        <td class="column28 style149 null"></td>
                                        <td class="column29 style149 null"></td>
                                        <td class="column30 style149 null"></td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row34">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style50 s style50" colspan="15">Datos de afiliacion deben
                                            ser
                                            llenados por
                                            Reclutamiento y Selección</td>
                                        <td class="column17 style158 null"></td>
                                        <td class="column18 style158 null"></td>
                                        <td class="column19 style158 null"></td>
                                        <td class="column20 style158 null"></td>
                                        <td class="column21 style158 null"></td>
                                        <td class="column22 style158 null"></td>
                                        <td class="column23 style158 null"></td>
                                        <td class="column24 style187 null"></td>
                                        <td class="column25 style187 null"></td>
                                        <td class="column26 style187 null"></td>
                                        <td class="column27 style187 null"></td>
                                        <td class="column28 style187 null"></td>
                                        <td class="column29 style149 null"></td>
                                        <td class="column30 style149 null"></td>
                                        <td class="column31 style149 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row35">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style51 s style51" colspan="15">DOMICILIO Y TELEFONO</td>
                                        <td class="column17 style51 s style51" colspan="5">No. DE INFONAVIT</td>
                                        <td class="column22 style51 s style51" colspan="7">REGISTRO FEDERAL DE
                                            CONTRIBUYENTES</td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row36">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style28 null style28" colspan="15" rowspan="3"
                                            id="domicilioytelefono"></td>
                                        <td class="column17 style159 s style159" colspan="5" rowspan="3"></td>
                                        <td class="column22 style160 null style160" colspan="7" rowspan="3"
                                            id="rfc"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row37">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row38">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row39">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style52 s style53" colspan="27">DOMICILIO Y TELEFONO FISCAL
                                        </td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row40">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style54 null style55" colspan="27" rowspan="3"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row41">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row42">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row43">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style1 null"></td>
                                        <td class="column7 style1 null"></td>
                                        <td class="column8 style1 null"></td>
                                        <td class="column9 style1 null"></td>
                                        <td class="column10 style1 null"></td>
                                        <td class="column11 style1 null"></td>
                                        <td class="column12 style1 null"></td>
                                        <td class="column13 style1 null"></td>
                                        <td class="column14 style1 null"></td>
                                        <td class="column15 style1 null"></td>
                                        <td class="column16 style1 null"></td>
                                        <td class="column17 style1 null"></td>
                                        <td class="column18 style1 null"></td>
                                        <td class="column19 style1 null"></td>
                                        <td class="column20 style1 null"></td>
                                        <td class="column21 style1 null"></td>
                                        <td class="column22 style1 null"></td>
                                        <td class="column23 style1 null"></td>
                                        <td class="column24 style188 null"></td>
                                        <td class="column25 style189 null"></td>
                                        <td class="column26 style1 null"></td>
                                        <td class="column27 style1 null"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row44">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style56 s style56" colspan="2" rowspan="2">PLANTA
                                        </td>
                                        <td class="column8 style56 s style56" colspan="3" rowspan="2">EVENTUAL
                                        </td>
                                        <td class="column11 style51 s style51" colspan="2">SEXO</td>
                                        <td class="column13 style56 s style56" colspan="3">HAND KEY</td>
                                        <td class="column16 style161 s style161" colspan="3">NACIONALIDAD</td>
                                        <td class="column19 style51 s style51" colspan="4">FECHA DE NACIMIENTO</td>
                                        <td class="column23 style162 s style191" colspan="5">C.U.R.P.</td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row45">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column11 style33 s style33" rowspan="2">M</td>
                                        <td class="column12 style33 s style33" rowspan="2">F</td>
                                        <td class="column13 style33 s style33" rowspan="2">SI</td>
                                        <td class="column14 style33 s style33" colspan="2" rowspan="2">NO</td>
                                        <td class="column16 style57 s style57" colspan="3" rowspan="3">MEXICANA
                                        </td>
                                        <td class="column19 style33 s style33" rowspan="2">DIA</td>
                                        <td class="column20 style33 s style33" colspan="2" rowspan="2">MES</td>
                                        <td class="column22 style33 s style33" rowspan="2">AÑO</td>
                                        <td class="column23 style57 null style57" colspan="5" rowspan="3"
                                            id="curp"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row46">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style57 null style57" colspan="2" rowspan="2"></td>
                                        <td class="column8 style57 null style57" colspan="3" rowspan="2"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row47">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column11 style57 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column12 style57 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column13 style114 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column14 style115 null style116" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox">
                                            </div>
                                        </td>
                                        <td class="column19 style57 null" id="dianac"></td>
                                        <td class="column20 style57 null style57" colspan="2" id="mesnac"></td>
                                        <td class="column22 style57 null" id="anonac"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style192 null"></td>
                                        <td class="column32 style192 null"></td>
                                        <td class="column33 style195 null"></td>
                                        <td class="column34 style195 null"></td>
                                        <td class="column35 style195 null"></td>
                                        <td class="column36 style195 null"></td>
                                        <td class="column37 style195 null"></td>
                                    </tr>
                                    <tr class="row48">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style1 null"></td>
                                        <td class="column7 style1 null"></td>
                                        <td class="column8 style1 null"></td>
                                        <td class="column9 style1 null"></td>
                                        <td class="column10 style1 null"></td>
                                        <td class="column11 style1 null"></td>
                                        <td class="column12 style1 null"></td>
                                        <td class="column13 style1 null"></td>
                                        <td class="column14 style1 null"></td>
                                        <td class="column15 style1 null"></td>
                                        <td class="column16 style1 null"></td>
                                        <td class="column17 style1 null"></td>
                                        <td class="column18 style1 null"></td>
                                        <td class="column19 style1 null"></td>
                                        <td class="column20 style1 null"></td>
                                        <td class="column21 style1 null"></td>
                                        <td class="column22 style1 null"></td>
                                        <td class="column23 style1 null"></td>
                                        <td class="column24 style193 null"></td>
                                        <td class="column25 style189 null"></td>
                                        <td class="column26 style1 null"></td>
                                        <td class="column27 style1 null"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style192 null"></td>
                                        <td class="column32 style192 null"></td>
                                        <td class="column33 style195 null"></td>
                                        <td class="column34 style195 null"></td>
                                        <td class="column35 style195 null"></td>
                                        <td class="column36 style195 null"></td>
                                        <td class="column37 style195 null"></td>
                                    </tr>
                                    <tr class="row49">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5 style58 s style58" colspan="2">PUESTO NUEVO</td>
                                        <td class="column7 style58 s style58" colspan="9">EN CASO DE SER PUESTO
                                            NUEVO,
                                            REMPLAZA A</td>
                                        <td class="column16 style58 s style58" colspan="4">CORREO ELECTRÓNICO</td>
                                        <td class="column20 style58 s style58" colspan="3">UMF</td>
                                        <td class="column23 style58 s style58" colspan="4">ESTADO CIVIL</td>
                                        <td class="column27 style58 s style58" colspan="3">No. DE AFILIACION DEL
                                            I.M.S.S.
                                        </td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style192 null"></td>
                                        <td class="column32 style192 null"></td>
                                        <td class="column33 style195 null"></td>
                                        <td class="column34 style195 null"></td>
                                        <td class="column35 style195 null"></td>
                                        <td class="column36 style195 null"></td>
                                        <td class="column37 style195 null"></td>
                                    </tr>
                                    <tr class="row50">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5 style59 s style59" rowspan="2">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                SI
                                            </label>
                                        </td>
                                        <td class="column5 style59 s style59" rowspan="2">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                                NO
                                            </label>
                                        </td>
                                        <td class="column7 style60 null style60" colspan="9" rowspan="2">
                                            <input type="text" class="form-control" placeholder="Escribe aquí...">
                                        </td>
                                        <td class="column16 style121 null style121" colspan="4" rowspan="2">
                                            <input type="text" class="form-control" placeholder="Escribe aquí...">
                                        </td>
                                        <td class="column20 style163 null style163" colspan="3" rowspan="2">
                                            <input type="text" class="form-control" placeholder="Escribe aquí...">
                                        </td>
                                        <td class="column23 style164 null style164" colspan="4" rowspan="2">
                                            <input type="text" class="form-control" placeholder="Escribe aquí...">
                                        </td>
                                        <td class="column27 style194 null style194" colspan="3" rowspan="2"
                                            id="nss">
                                        </td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style192 null"></td>
                                        <td class="column32 style192 null"></td>
                                        <td class="column33 style195 null"></td>
                                        <td class="column34 style195 null"></td>
                                        <td class="column35 style195 null"></td>
                                        <td class="column36 style195 null"></td>
                                        <td class="column37 style195 null"></td>
                                    </tr>
                                    <tr class="row51">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style61 null"></td>
                                        <td class="column3 style61 null"></td>
                                        <td class="column4 style62 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style192 null"></td>
                                        <td class="column32 style192 null"></td>
                                        <td class="column33 style195 null"></td>
                                        <td class="column34 style195 null"></td>
                                        <td class="column35 style195 null"></td>
                                        <td class="column36 style195 null"></td>
                                        <td class="column37 style195 null"></td>
                                    </tr>
                                    <tr class="row52">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style63 null style63" colspan="2"></td>
                                        <td class="column4 style63 null"></td>
                                        <td class="column5 style63 null"></td>
                                        <td class="column6 style64 null"></td>
                                        <td class="column7 style64 null"></td>
                                        <td class="column8 style117 null"></td>
                                        <td class="column9 style118 null"></td>
                                        <td class="column10 style64 null"></td>
                                        <td class="column11 style117 null"></td>
                                        <td class="column12 style118 null"></td>
                                        <td class="column13 style119 null"></td>
                                        <td class="column14 style119 null"></td>
                                        <td class="column15 style119 null"></td>
                                        <td class="column16 style119 null"></td>
                                        <td class="column17 style165 null"></td>
                                        <td class="column18 style165 null"></td>
                                        <td class="column19 style165 null"></td>
                                        <td class="column20 style165 null"></td>
                                        <td class="column21 style165 null"></td>
                                        <td class="column22 style165 null"></td>
                                        <td class="column23 style166 null"></td>
                                        <td class="column24 style101 null"></td>
                                        <td class="column25 style101 null"></td>
                                        <td class="column26 style101 null"></td>
                                        <td class="column27 style101 null"></td>
                                        <td class="column28 style101 null"></td>
                                        <td class="column29 style101 null"></td>
                                        <td class="column30 style195 null"></td>
                                        <td class="column31 style195 null"></td>
                                        <td class="column32 style195 null"></td>
                                        <td class="column33 style195 null"></td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                    </tr>
                                    <tr class="row53">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style51 s style51" colspan="26">PRESTACIONES </td>
                                        <td class="column28 style51 s style51" colspan="2">&nbsp;ESCOLARIDAD</td>
                                        <td class="column30 style192 null"></td>
                                        <td class="column31 style192 null"></td>
                                        <td class="column32 style192 null"></td>
                                        <td class="column33 style195 null"></td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                    </tr>
                                    <tr class="row54">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style52 s style71" colspan="4" rowspan="4">SEGURO DE
                                            ACCIDENTES</td>
                                        <td class="column6 style33 s style33" colspan="2" rowspan="2">
                                            Beneficiario
                                        </td>
                                        <td class="column8 style120 null style120" colspan="14" rowspan="2"
                                            id="beneficiario"></td>
                                        <td class="column22 style47 s style47" colspan="4" rowspan="4">
                                            PORCENTAJE
                                        </td>
                                        <td class="column26 style196 n style196" colspan="2" rowspan="4">100%
                                        </td>
                                        <td class="column28 style194 null style194" colspan="2" rowspan="4">
                                        </td>
                                        <td class="column30 style192 null"></td>
                                        <td class="column31 style192 null"></td>
                                        <td class="column32 style192 null"></td>
                                        <td class="column33 style195 null"></td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                    </tr>
                                    <tr class="row55">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row56">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column6 style33 s style33" colspan="2" rowspan="2">Parentezco
                                        </td>
                                        <td class="column8 style121 null style121" colspan="14" rowspan="2"
                                            id="parentezco"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row57">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row58">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5">&nbsp;</td>
                                        <td class="column6">&nbsp;</td>
                                        <td class="column7">&nbsp;</td>
                                        <td class="column8">&nbsp;</td>
                                        <td class="column9">&nbsp;</td>
                                        <td class="column10">&nbsp;</td>
                                        <td class="column11">&nbsp;</td>
                                        <td class="column12">&nbsp;</td>
                                        <td class="column13">&nbsp;</td>
                                        <td class="column14">&nbsp;</td>
                                        <td class="column15">&nbsp;</td>
                                        <td class="column16">&nbsp;</td>
                                        <td class="column17">&nbsp;</td>
                                        <td class="column18">&nbsp;</td>
                                        <td class="column19">&nbsp;</td>
                                        <td class="column20">&nbsp;</td>
                                        <td class="column21">&nbsp;</td>
                                        <td class="column22 style167 null"></td>
                                        <td class="column23 style167 null"></td>
                                        <td class="column24 style167 null"></td>
                                        <td class="column25 style167 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row59">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5">&nbsp;</td>
                                        <td class="column6">&nbsp;</td>
                                        <td class="column7">&nbsp;</td>
                                        <td class="column8">&nbsp;</td>
                                        <td class="column9">&nbsp;</td>
                                        <td class="column10">&nbsp;</td>
                                        <td class="column11">&nbsp;</td>
                                        <td class="column12">&nbsp;</td>
                                        <td class="column13">&nbsp;</td>
                                        <td class="column14">&nbsp;</td>
                                        <td class="column15">&nbsp;</td>
                                        <td class="column16">&nbsp;</td>
                                        <td class="column17">&nbsp;</td>
                                        <td class="column18">&nbsp;</td>
                                        <td class="column19">&nbsp;</td>
                                        <td class="column20">&nbsp;</td>
                                        <td class="column21">&nbsp;</td>
                                        <td class="column22">&nbsp;</td>
                                        <td class="column23">&nbsp;</td>
                                        <td class="column24">&nbsp;</td>
                                        <td class="column25">&nbsp;</td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row60">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style72 s style122" colspan="4">NOMBRE Y FIRMA</td>
                                        <td class="column9 style72 s style122" colspan="6">NOMBRE Y FIRMA</td>
                                        <td class="column15 style123 s style123" colspan="6">NOMBRE Y FIRMA</td>
                                        <td class="column21 style123 s style123" colspan="6">NOMBRE Y FIRMA</td>
                                        <td class="column27 style1 null"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row61">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5 style74 null style74" colspan="4" rowspan="2"></td>
                                        <td class="column9 style124 null style129" colspan="6" rowspan="2"></td>
                                        <td class="column15 style74 null style74" colspan="6" rowspan="2"></td>
                                        <td class="column21 style74 null style74" colspan="6" rowspan="2"></td>
                                        <td class="column27 style1 null"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row62">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column27 style1 null"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row63">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style75 null"></td>
                                        <td class="column3 style75 null"></td>
                                        <td class="column4 style76 null"></td>
                                        <td class="column5 style77 s style130" colspan="4">SOLICITANTE</td>
                                        <td class="column9 style77 s style130" colspan="6">RESPONSABLE DE AREA</td>
                                        <td class="column15 style131 s style131" colspan="6">RECLUTAMIENTO</td>
                                        <td class="column21 style131 s style131" colspan="6">DIRECCION GENERAL</td>
                                        <td class="column27 style1 null"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column31 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                    <tr class="row64">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style197 null"></td>
                                        <td class="column3 style97 null"></td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5 style97 null"></td>
                                        <td class="column6 style97 null"></td>
                                        <td class="column7 style97 null"></td>
                                        <td class="column8 style97 null"></td>
                                        <td class="column9 style97 null"></td>
                                        <td class="column10 style97 null"></td>
                                        <td class="column11 style97 null"></td>
                                        <td class="column12 style97 null"></td>
                                        <td class="column13 style97 null"></td>
                                        <td class="column14 style97 null"></td>
                                        <td class="column15 style97 null"></td>
                                        <td class="column16 style97 null"></td>
                                        <td class="column17 style97 null"></td>
                                        <td class="column18 style97 null"></td>
                                        <td class="column19 style97 null"></td>
                                        <td class="column20 style97 null"></td>
                                        <td class="column21 style97 null"></td>
                                        <td class="column22 style97 null"></td>
                                        <td class="column23 style198 null"></td>
                                        <td class="column24 style193 null"></td>
                                        <td class="column25 style189 null"></td>
                                        <td class="column26 style1 null"></td>
                                        <td class="column27 style1 null"></td>
                                        <td class="column28 style1 null"></td>
                                        <td class="column29 style1 null"></td>
                                        <td class="column30 style1 null"></td>
                                        <td class="column32 style1 null"></td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <button class="btn btn-primary "onclick="generarPDF()">Generar PDF</button>
                    </div>
                </div>
            </div>
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

        .tabpre {
            width: auto;
            overflow-x: auto;
        }
    </style>
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.debug.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"
        integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"
        integrity="sha512-BNaRQnYJYiPSqHHDb58B0yaPfCu+Wgds8Gp/gU33kqBtgNS4tSPHuGibyoeqMV/TJlSKda6FXzoEyYGjTe+vXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {




            let dataJson;
            $.blockUI({
                message: 'Cargando...'
            });
            $.ajax({
                url: "generallist",
                method: "GET",
                dataType: "JSON",
                data: {},
                success: function(data) {


                    dataJson = reemplazarValoresVacios(data);

                    var table = $('#prealtatabla').DataTable({
                        destroy: true,
                        scrollX: true,
                        scrollCollapse: true,
                        language: {
                            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
                            "lengthMenu": "Mostrar los _MENU_ registros",
                            "zeroRecords": "No existe ese registro",
                            "info": "Mostrar página _PAGE_ de _PAGES_",
                            "infoEmpty": "No encontrado",
                            "infoFiltered": "(filtrado de _MAX_ registros en total)",
                            "sSearch": "Buscar:",
                            "sEmptyTable": "No se encontraron alertas por reportar",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast": "Último",
                                "sNext": "Siguiente",
                                "sPrevious": "Anterior"
                            }
                        },
                        dom: 'Blfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf'
                        ],
                        destroy: true,
                        processing: true,
                        sort: true,
                        paging: true,
                    });
                    dataJson.forEach(function(val) {
                        moper = '<button class="btn btn-info" onClick="moperAlta(\'' + val.id +
                            '\')">Previo</button>';
                        var row = table.row.add([
                            val.id,
                            val.nejecutivo,
                            val.fechaalta,
                            val.nss,
                            val.apaterno,
                            val.amaterno,
                            val.nombre,
                            val.correo,
                            val.fechaalta2,
                            val.fechabaja,
                            val.status,
                            val.salariomensual,
                            val.puesto,
                            val.centrodecostos,
                            val.cuenta,
                            val.predio,
                            val.curp,
                            val.rfc,
                            val.fechanac,
                            val.lnac,
                            val.estcivil,
                            val.escolaridad,
                            val.tel,
                            val.cel,
                            val.calle,
                            val.numero,
                            val.manzana,
                            val.col,
                            val.cp,
                            val.munic,
                            val.causabaja,
                            val.beneficiario,
                            val.parentesco,
                            val.num_cuenta_bancario,
                            val.banco,
                            val.salario,
                            moper
                        ]).draw().node();
                    });

                    $.unblockUI();

                },
                error: function(xhr, status, error) {
                    console.log(
                        error); // Muestra cualquier error en la consola para depuración

                }
            });
        });


        function reemplazarValoresVacios(obj) {
            for (var key in obj) {
                if (obj.hasOwnProperty(key)) {
                    if (typeof obj[key] === "object" && obj[key] !== null) {
                        // Si el valor es otro objeto, realizar la recursión y actualizar el valor en el objeto actual
                        obj[key] = reemplazarValoresVacios(obj[key]);
                    } else if (obj[key] === "" || obj[key] === null) {
                        // Si el valor es una cadena vacía, reemplazar por un guion y actualizar el valor en el objeto actual
                        obj[key] = "-";
                    }
                }
            }
            return obj; // Devolver el objeto actualizado
        }

        function moperAlta(id) {


            $.ajax({
                url: "obtenerEmpleadoGeneral",
                method: "GET",
                dataType: "JSON",
                data: {
                    "id": id
                },
                success: function(data) {

                    // Obtener la fecha actual
                    const today = new Date();

                    // Obtener el nombre del día y del mes en formato largo
                    const longDay = getLongDayName(today.getDay());
                    const longMonth = getLongMonthName(today.getMonth());

                    // Obtener el día, año y hora
                    const day = today.getDate();
                    const year = today.getFullYear();

                    // Construir la fecha en formato largo
                    const fechaLarga = longDay + ', ' + longMonth + ' ' + day + ', ' + year;

                    // Mostrar la fecha en el elemento "fechaActual"
                    document.getElementById('fechaActual').textContent = fechaLarga;

                    // Obtener la fecha actual
                    const currentDate = new Date();

                    // Obtener la semana actual
                    const currentWeek = getWeekNumber(currentDate);

                    $('#currentweek').text(currentWeek);
                    $('#idempleado').text(data.id);
                    nombre = data.nombre + " " + data.apaterno + " " + data.amaterno;
                    $('#nombrecompleto').text(nombre);


                    var arregloFechaingreso = data["fechaalta"].split("-");
                    var diaingreso = arregloFechaingreso[2];
                    var mesingreso = arregloFechaingreso[1];
                    var anoingreso = arregloFechaingreso[0];

                    $('#diaingreso').text(diaingreso);
                    $('#mesingreso').text(mesingreso);
                    $('#anoingreso').text(anoingreso);

                    if (data["fechabaja"] != null) {
                        var arregloFechabaja = data["fechabaja"].split("-");
                        var diabaja = arregloFechabaja[2];
                        var mesbaja = arregloFechabaja[1];
                        var anobaja = arregloFechabaja[0];
                    }

                    $('#diabaja').text(diabaja);
                    $('#mesbaja').text(mesbaja);
                    $('#anobaja').text(anobaja);



                    var arregloFechanac = data["fechanac"].split("-");
                    var dianac = arregloFechanac[2];
                    var mesnac = arregloFechanac[1];
                    var anonac = arregloFechanac[0];


                    $('#dianac').text(dianac);
                    $('#mesnac').text(mesnac);
                    $('#anonac').text(anonac);

                    $('#causabaja').val(data.causabaja);
                    $('#puesto').text(data.puesto);
                    $('#predio').text(data.predio);


                    domicilioytelefono = data.calle + ", " + data.col + ", " + data.munic + ", " + data.cp +
                        ", " + data.tel;
                    $('#domicilioytelefono').text(domicilioytelefono);
                    $('#rfc').text(data.rfc);
                    $('#beneficiario').text(data.beneficiario);
                    $('#parentezco').text(data.parentezco);

                    $('#curp').text(data.curp);
                    $('#nss').text(data.nss);




                    console.log(data);

                }
            });




            $('#modalmoperalta').modal('show');
        }

        function generarPDF() {
            // Obtener la fecha actual
            const today = new Date();

            // Obtener el día, año y hora
            const day = today.getDate();
            const year = today.getFullYear();

            mopername = "MOPER - " + $('#nombrecompleto').text() + " - " + day.toString() + " - " + year.toString() +
                ".pdf";
            const pdf = new jsPDF();

            // Obtener el contenido del cuerpo HTML
            const divContent = document.querySelector('#moperbody');

            // Convertir el contenido del cuerpo a una imagen utilizando html2canvas
            html2canvas(divContent).then(canvas => {
                const imgData = canvas.toDataURL('image/jpeg', 1.0);

                // Agregar la imagen al PDF
                pdf.addImage(imgData, 'JPEG', 15, 15, 180, 0);

                // Descargar el PDF con el nombre "datos_usuario.pdf"
                pdf.save(mopername);
            });
        }


        // Función para obtener el nombre del día en formato largo
        function getLongDayName(dayNumber) {
            const days = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
            return days[dayNumber];
        }

        // Función para obtener el nombre del mes en formato largo
        function getLongMonthName(monthNumber) {
            const months = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre',
                'Octubre', 'Noviembre', 'Diciembre'
            ];
            return months[monthNumber];
        }

        function getWeekNumber(date) {
            // Copia la fecha proporcionada para no modificar la original
            const copiedDate = new Date(date);

            // Establece la fecha al primer día del año actual
            copiedDate.setMonth(0, 1);

            // Obtiene el día de la semana (0 = domingo, 1 = lunes, ..., 6 = sábado) del primer día del año actual
            let firstDayOfWeek = copiedDate.getDay();

            // Si el primer día del año actual no es domingo, ajusta la fecha para el domingo anterior
            if (firstDayOfWeek > 0) {
                copiedDate.setDate(1 - firstDayOfWeek);
            }

            // Obtiene la diferencia de días entre la fecha proporcionada y el primer día del año actual
            let diffInDays = Math.floor((date - copiedDate) / (1000 * 60 * 60 * 24));

            // Calcula el número de semana sumando 1 (ya que la primera semana del año es la número 1)
            let weekNumber = Math.ceil((diffInDays + 1) / 7);

            return weekNumber;
        }
    </script>
@stop
