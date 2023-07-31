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
                        <th>Estado</th>
                        <th>Causa de baja</th>
                        <th>Beneficiario</th>
                        <th>Parentesco</th>
                        <th>Numero de cuenta bancario</th>
                        <th>Banco</th>
                        <th>Salario</th>
                        <th>MOPER ALTA</th>
                        <th>EDITAR</th>
                        <th>ELIMINAR</th>

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
                                <col class="col38">
                                <col class="col39">
                                <col class="col40">
                                <col class="col41">
                                <col class="col42">
                                <col class="col43">
                                <col class="col44">
                                <col class="col45">
                                <col class="col46">
                                <col class="col47">
                                <col class="col48">
                                <col class="col49">
                                <col class="col50">
                                <col class="col51">
                                <col class="col52">
                                <col class="col53">
                                <col class="col54">
                                <col class="col55">
                                <col class="col56">
                                <col class="col57">
                                <col class="col58">
                                <col class="col59">
                                <col class="col60">
                                <col class="col61">
                                <col class="col62">
                                <col class="col63">
                                <col class="col64">
                                <col class="col65">
                                <col class="col66">
                                <col class="col67">
                                <col class="col68">
                                <col class="col69">
                                <col class="col70">
                                <col class="col71">
                                <col class="col72">
                                <col class="col73">
                                <col class="col74">
                                <col class="col75">
                                <col class="col76">
                                <col class="col77">
                                <col class="col78">
                                <col class="col79">
                                <col class="col80">
                                <col class="col81">
                                <col class="col82">
                                <col class="col83">
                                <col class="col84">
                                <col class="col85">
                                <col class="col86">
                                <col class="col87">
                                <col class="col88">
                                <col class="col89">
                                <col class="col90">
                                <col class="col91">
                                <col class="col92">
                                <col class="col93">
                                <col class="col94">
                                <tbody>
                                    <tr class="row5">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style2 null"></td>
                                        <td class="column3 style2 null"></td>
                                        <td class="column4 style2 null"></td>
                                        <td class="column5 style2 null"></td>
                                        <td class="column6 style2 null"></td>
                                        <td class="column7 style2 null"></td>
                                        <td class="column8 style2 null"></td>
                                        <td class="column9 style2 null"></td>
                                        <td class="column10 style2 null"></td>
                                        <td class="column11 style2 null"></td>
                                        <td class="column12 style2 null"></td>
                                        <td class="column13 style2 null"></td>
                                        <td class="column14 style2 null"></td>
                                        <td class="column15 style2 null"></td>
                                        <td class="column16 style2 null"></td>
                                        <td class="column17 style2 null"></td>
                                        <td class="column18 style2 null"></td>
                                        <td class="column19 style2 null"></td>
                                        <td class="column20 style2 null"></td>
                                        <td class="column21 style2 null"></td>
                                        <td class="column22 style2 null"></td>
                                        <td class="column23 style2 null"></td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row6">
                                        <td class="column0 style5 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5">&nbsp;</td>
                                        <td class="column6">&nbsp;</td>
                                        <td class="column7 style59 null style59" colspan="2" rowspan="6">
                                        <td class="column5 style8 null style16" colspan="3" rowspan="6">
                                            <div style="position: relative;"><img
                                                    style="position: absolute; z-index: 1; left: -160px; top: -45px; width: 124px; height: 90px;"
                                                    src="{{ asset('assets/images/logo3.png') }}" border="0" /></div>
                                        </td>
                                        <td class="column9 style60 s style60" colspan="8" rowspan="2">BE GROUP</td>
                                        <td class="column17 style7 null"></td>
                                        <td class="column18">&nbsp;</td>
                                        <td class="column19">&nbsp;</td>
                                        <td class="column20">&nbsp;</td>
                                        <td class="column21">&nbsp;</td>
                                        <td class="column22">&nbsp;</td>
                                        <td class="column23">&nbsp;</td>
                                        <td class="column24 style7 null"></td>
                                        <td class="column25 style7 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row7">
                                        <td class="column0 style3 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5">&nbsp;</td>
                                        <td class="column6">&nbsp;</td>
                                        <td class="column17 style8 null"></td>
                                        <td class="column18 style9 null"></td>
                                        <td class="column19 style9 null"></td>
                                        <td class="column20 style9 null"></td>
                                        <td class="column21 style9 null"></td>
                                        <td class="column22 style9 null"></td>
                                        <td class="column23 style9 null"></td>
                                        <td class="column24 style10 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row8">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style1 null"></td>
                                        <td class="column9 style61 s style61" colspan="8" rowspan="2">Movimiento de
                                            personal</td>
                                        <td class="column17 style8 null"></td>
                                        <td class="column18 style9 null"></td>
                                        <td class="column19 style9 null"></td>
                                        <td class="column20 style9 null"></td>
                                        <td class="column21 style9 null"></td>
                                        <td class="column22 style9 null"></td>
                                        <td class="column23 style9 null"></td>
                                        <td class="column24 style10 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row9">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style1 null"></td>
                                        <td class="column17 style8 null"></td>
                                        <td class="column18 style9 null"></td>
                                        <td class="column19 style9 null"></td>
                                        <td class="column20 style9 null"></td>
                                        <td class="column21 style9 null"></td>
                                        <td class="column22 style9 null"></td>
                                        <td class="column23 style9 null"></td>
                                        <td class="column24 style10 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row10">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style1 null"></td>
                                        <td class="column9 style62 s style62" colspan="3" rowspan="2">CÓDIGO:
                                            <br />
                                            F-MPER-RH/18
                                        </td>
                                        <td class="column12 style63 s style63" colspan="3" rowspan="2">
                                            VERSIÓN:02</td>
                                        <td class="column15 style62 s style63" colspan="2" rowspan="2">PÁGINA:
                                            <br />
                                            Página 1 de 1
                                        </td>
                                        <td class="column17 style8 null"></td>
                                        <td class="column18 style10 null"></td>
                                        <td class="column19 style10 null"></td>
                                        <td class="column20 style10 null"></td>
                                        <td class="column21 style10 null"></td>
                                        <td class="column22 style10 null"></td>
                                        <td class="column23 style10 null"></td>
                                        <td class="column24 style10 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row11">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style1 null"></td>
                                        <td class="column3 style1 null"></td>
                                        <td class="column4 style1 null"></td>
                                        <td class="column5 style1 null"></td>
                                        <td class="column6 style1 null"></td>
                                        <td class="column17 style8 null"></td>
                                        <td class="column18 style2 null"></td>
                                        <td class="column19 style2 null"></td>
                                        <td class="column20 style2 null"></td>
                                        <td class="column21 style2 null"></td>
                                        <td class="column22 style2 null"></td>
                                        <td class="column23 style2 null"></td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row12">
                                        <td class="column0 style11 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style13 null"></td>
                                        <td class="column3 style13 null"></td>
                                        <td class="column4 style13 null"></td>
                                        <td class="column5 style13 null"></td>
                                        <td class="column6 style14 null"></td>
                                        <td class="column7 style14 null"></td>
                                        <td class="column8 style14 null"></td>
                                        <td class="column9 style14 null"></td>
                                        <td class="column10 style14 null"></td>
                                        <td class="column11">&nbsp;</td>
                                        <td class="column12 style13 null"></td>
                                        <td class="column13 style13 null"></td>
                                        <td class="column14 style13 null"></td>
                                        <td class="column15 style15 null"></td>
                                        <td class="column16">&nbsp;</td>
                                        <td class="column17">&nbsp;</td>
                                        <td class="column18">&nbsp;</td>
                                        <td class="column19">&nbsp;</td>
                                        <td class="column20">&nbsp;</td>
                                        <td class="column21">&nbsp;</td>
                                        <td class="column22">&nbsp;</td>
                                        <td class="column23">&nbsp;</td>
                                        <td class="column24 style16 null"></td>
                                        <td class="column25 style17 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row13">
                                        <td class="column0 style3 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style18 null"></td>
                                        <td class="column3 style18 null"></td>
                                        <td class="column4 style18 null"></td>
                                        <td class="column5 style18 null"></td>
                                        <td class="column6 style19 null style19" colspan="2"></td>
                                        <td class="column8 style20 null style20" colspan="6"></td>
                                        <td class="column14 style18 null"></td>
                                        <td class="column15 style21 null"></td>
                                        <td class="column16 style64 s style64" colspan="2">FECHA</td>
                                        <td class="column18 style65 null style65" colspan="6" id="fechaActual">
                                        </td>
                                        <td class="column24 style22 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row14">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style18 null"></td>
                                        <td class="column3 style18 null"></td>
                                        <td class="column4 style18 null"></td>
                                        <td class="column5 style18 null"></td>
                                        <td class="column6 style23 null"></td>
                                        <td class="column7 style23 null"></td>
                                        <td class="column8 style23 null"></td>
                                        <td class="column9 style23 null"></td>
                                        <td class="column10 style23 null"></td>
                                        <td class="column11 style1 null"></td>
                                        <td class="column12 style18 null"></td>
                                        <td class="column13 style18 null"></td>
                                        <td class="column14 style18 null"></td>
                                        <td class="column15 style24 null"></td>
                                        <td class="column16 style24 null"></td>
                                        <td class="column17 style24 null"></td>
                                        <td class="column18 style25 null"></td>
                                        <td class="column19 style25 null"></td>
                                        <td class="column20 style25 null"></td>
                                        <td class="column21 style25 null"></td>
                                        <td class="column22 style25 null"></td>
                                        <td class="column23 style25 null"></td>
                                        <td class="column24 style22 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row15">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3">&nbsp;</td>
                                        <td class="column4">&nbsp;</td>
                                        <td class="column5 style18 null"></td>
                                        <td class="column6 style26 s style26" colspan="8">Seleccione una opcion</td>
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
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row16">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style21 null"></td>
                                        <td class="column3 style21 null"></td>
                                        <td class="column4 style21 null"></td>
                                        <td class="column5 style9 null"></td>
                                        <td class="column6 style64 s style64" colspan="2" rowspan="2">BE Group
                                        </td>
                                        <td class="column8 style66 null style66" colspan="2" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred" checked>
                                            </div>
                                        </td>
                                        <td class="column10 style9 null"></td>
                                        <td class="column11 style2 null"></td>
                                        <td class="column12 style64 s style64" colspan="3" rowspan="2">CLIENTE
                                        </td>
                                        <td class="column15 style66 null style66" colspan="3" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column18 style18 null"></td>
                                        <td class="column19 style18 null"></td>
                                        <td class="column20 style18 null"></td>
                                        <td class="column21 style18 null"></td>
                                        <td class="column22 style18 null"></td>
                                        <td class="column23 style18 null"></td>
                                        <td class="column24 style27 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row17">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1 style1 null"></td>
                                        <td class="column2 style21 null"></td>
                                        <td class="column3 style21 null"></td>
                                        <td class="column4 style21 null"></td>
                                        <td class="column5 style9 null"></td>
                                        <td class="column10 style9 null"></td>
                                        <td class="column11 style2 null"></td>
                                        <td class="column18 style1 null"></td>
                                        <td class="column19 style1 null"></td>
                                        <td class="column20 style1 null"></td>
                                        <td class="column21 style1 null"></td>
                                        <td class="column22 style1 null"></td>
                                        <td class="column23 style1 null"></td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row18">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2">&nbsp;</td>
                                        <td class="column3 style28 null style28" colspan="3"></td>
                                        <td class="column6 style29 null"></td>
                                        <td class="column7 style29 null"></td>
                                        <td class="column8 style30 null style30" colspan="3"></td>
                                        <td class="column11 style2 null"></td>
                                        <td class="column12">&nbsp;</td>
                                        <td class="column13 style30 null style30" colspan="3"></td>
                                        <td class="column16 style31 null"></td>
                                        <td class="column17 style31 null"></td>
                                        <td class="column18 style31 null"></td>
                                        <td class="column19 style31 null"></td>
                                        <td class="column20 style31 null"></td>
                                        <td class="column21 style30 null style30" colspan="3"></td>
                                        <td class="column24 style32 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row19">
                                        <td class="column0 style33 null"></td>
                                        <td class="column1 style33 null"></td>
                                        <td class="column2 style67 s style67" colspan="2">SEMANA</td>
                                        <td class="column4 style68 s style68" colspan="2"># EMPLEADO</td>
                                        <td class="column6 style67 s style67" colspan="6">NOMBRE(Apellido Paterno,
                                            Materno Nombre(S)</td>
                                        <td class="column12 style67 s style67" colspan="6">FECHA DE INGRESO</td>
                                        <td class="column18 style67 s style67" colspan="6">FECHA DE BAJA</td>
                                        <td class="column24 style34 null"></td>
                                        <td class="column25 style35 null"></td>
                                        <td class="column26 style33 null"></td>
                                        <td class="column27 style33 null"></td>
                                        <td class="column28 style33 null"></td>
                                        <td class="column29 style33 null"></td>
                                        <td class="column30 style33 null"></td>
                                        <td class="column31 style33 null"></td>
                                        <td class="column32 style33 null"></td>
                                        <td class="column33 style33 null"></td>
                                        <td class="column34 style33 null"></td>
                                        <td class="column35 style33 null"></td>
                                        <td class="column36 style33 null"></td>
                                        <td class="column37 style33 null"></td>
                                        <td class="column38 style33 null"></td>
                                        <td class="column39 style33 null"></td>
                                        <td class="column40 style33 null"></td>
                                        <td class="column41 style33 null"></td>
                                        <td class="column42 style33 null"></td>
                                        <td class="column43 style33 null"></td>
                                        <td class="column44 style33 null"></td>
                                        <td class="column45 style33 null"></td>
                                        <td class="column46 style33 null"></td>
                                        <td class="column47 style33 null"></td>
                                        <td class="column48 style33 null"></td>
                                        <td class="column49 style33 null"></td>
                                        <td class="column50 style33 null"></td>
                                        <td class="column51 style33 null"></td>
                                        <td class="column52 style33 null"></td>
                                        <td class="column53 style33 null"></td>
                                        <td class="column54 style33 null"></td>
                                        <td class="column55 style33 null"></td>
                                        <td class="column56 style33 null"></td>
                                        <td class="column57 style33 null"></td>
                                        <td class="column58 style33 null"></td>
                                        <td class="column59 style33 null"></td>
                                        <td class="column60 style33 null"></td>
                                        <td class="column61 style33 null"></td>
                                        <td class="column62 style33 null"></td>
                                        <td class="column63 style33 null"></td>
                                        <td class="column64 style33 null"></td>
                                        <td class="column65 style33 null"></td>
                                        <td class="column66 style33 null"></td>
                                        <td class="column67 style33 null"></td>
                                        <td class="column68 style33 null"></td>
                                        <td class="column69 style33 null"></td>
                                        <td class="column70 style33 null"></td>
                                        <td class="column71 style33 null"></td>
                                        <td class="column72 style33 null"></td>
                                        <td class="column73 style33 null"></td>
                                        <td class="column74 style33 null"></td>
                                        <td class="column75 style33 null"></td>
                                        <td class="column76 style33 null"></td>
                                        <td class="column77 style33 null"></td>
                                        <td class="column78 style33 null"></td>
                                        <td class="column79 style33 null"></td>
                                        <td class="column80 style33 null"></td>
                                        <td class="column81 style33 null"></td>
                                        <td class="column82 style33 null"></td>
                                        <td class="column83 style33 null"></td>
                                        <td class="column84 style33 null"></td>
                                        <td class="column85 style33 null"></td>
                                        <td class="column86 style33 null"></td>
                                        <td class="column87 style33 null"></td>
                                        <td class="column88 style33 null"></td>
                                        <td class="column89 style33 null"></td>
                                        <td class="column90 style33 null"></td>
                                        <td class="column91 style33 null"></td>
                                        <td class="column92 style33 null"></td>
                                        <td class="column93 style33 null"></td>
                                        <td class="column94 style33 null"></td>
                                    </tr>
                                    <tr class="row20">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style69 null style69" colspan="2" rowspan="2"
                                            id="currentweek"></td>
                                        <td class="column4 style69 null style69" colspan="2" rowspan="2">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp" id="idempleado"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column6 style69 null style69" colspan="6" rowspan="2">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp" id="nombrecompleto"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column12 style70 s style70" colspan="2">DIA</td>
                                        <td class="column14 style70 s style70" colspan="2">MES</td>
                                        <td class="column16 style70 s style70" colspan="2">AÑO</td>
                                        <td class="column18 style70 s style70" colspan="2">DIA</td>
                                        <td class="column20 style70 s style70" colspan="2">MES</td>
                                        <td class="column22 style70 s style70" colspan="2">AÑO</td>
                                        <td class="column24 style37 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row21">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column12 style71 null style71" colspan="2" id="diaingreso"></td>
                                        <td class="column14 style71 null style71" colspan="2" id="mesingreso"></td>
                                        <td class="column16 style71 null style71" colspan="2" id="anoingreso"></td>
                                        <td class="column18 style72 null style72" colspan="2" id="diabaja"></td>
                                        <td class="column20 style72 null style72" colspan="2" id="mesbaja"></td>
                                        <td class="column22 style72 null style72" colspan="2" id="anobaja"></td>
                                        <td class="column24 style38 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row22">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style31 null"></td>
                                        <td class="column3 style31 null"></td>
                                        <td class="column4 style31 null"></td>
                                        <td class="column5 style31 null"></td>
                                        <td class="column6 style31 null"></td>
                                        <td class="column7 style31 null"></td>
                                        <td class="column8 style31 null"></td>
                                        <td class="column9 style31 null"></td>
                                        <td class="column10 style31 null"></td>
                                        <td class="column11 style31 null"></td>
                                        <td class="column12 style29 null"></td>
                                        <td class="column13 style29 null"></td>
                                        <td class="column14 style31 null"></td>
                                        <td class="column15 style31 null"></td>
                                        <td class="column16 style31 null"></td>
                                        <td class="column17 style31 null"></td>
                                        <td class="column18 style31 null"></td>
                                        <td class="column19 style31 null"></td>
                                        <td class="column20 style31 null"></td>
                                        <td class="column21 style31 null"></td>
                                        <td class="column22 style31 null"></td>
                                        <td class="column23 style31 null"></td>
                                        <td class="column24 style32 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row23">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style39 s">Seleccione una opcion</td>
                                        <td class="column3 style15 null"></td>
                                        <td class="column4 style15 null"></td>
                                        <td class="column5 style15 null"></td>
                                        <td class="column6 style15 null"></td>
                                        <td class="column7 style15 null"></td>
                                        <td class="column8 style15 null"></td>
                                        <td class="column9 style15 null"></td>
                                        <td class="column10 style15 null"></td>
                                        <td class="column11 style15 null"></td>
                                        <td class="column12 style15 null"></td>
                                        <td class="column13 style15 null"></td>
                                        <td class="column14 style15 null"></td>
                                        <td class="column15 style15 null"></td>
                                        <td class="column16 style15 null"></td>
                                        <td class="column17 style15 null"></td>
                                        <td class="column18 style15 null"></td>
                                        <td class="column19 style15 null"></td>
                                        <td class="column20 style15 null"></td>
                                        <td class="column21 style15 null"></td>
                                        <td class="column22 style15 null"></td>
                                        <td class="column23 style15 null"></td>
                                        <td class="column24 style40 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row24">
                                        <td class="column0 style41 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style64 s style64" colspan="4">ALTA</td>
                                        <td class="column6 style64 s style64" colspan="3">CAMBIO POR</td>
                                        <td class="column9 style64 s style64" colspan="5">PERMISO</td>
                                        <td class="column14 style64 s style64" colspan="6">BAJA POR</td>
                                        <td class="column20 style64 s style64" colspan="4">CAMBIO DE SALARIO</td>
                                        <td class="column24 style42 null"></td>
                                        <td class="column25 style27 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row25">
                                        <td class="column0 style43 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style73 s style73" colspan="2" rowspan="2">INGRESO
                                        </td>
                                        <td class="column4 style73 s style73" colspan="2" rowspan="2">REINGRESO
                                        </td>
                                        <td class="column6 style74 s style74" rowspan="2">PROMOCION</td>
                                        <td class="column7 style74 s style74" rowspan="2">TIPO DE NOMINA</td>
                                        <td class="column8 style74 s style74" rowspan="2">TRANSFERENCIA</td>
                                        <td class="column9 style74 s style74" colspan="2" rowspan="2">C/GOCE DE
                                            SUELDO</td>
                                        <td class="column11 style74 s style74" colspan="3" rowspan="2">S/GOCE DE
                                            SUELDO</td>
                                        <td class="column14 style73 s style73" colspan="2" rowspan="2">RENUNCIA
                                        </td>
                                        <td class="column16 style75 s style75" colspan="2" rowspan="2">
                                            TERMINACION DE CONTRATO</td>
                                        <td class="column18 style73 s style73" colspan="2" rowspan="2">OTROS
                                        </td>
                                        <td class="column20 style76 null style76" colspan="4" rowspan="3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column24 style45 null"></td>
                                        <td class="column25 style46 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row26">
                                        <td class="column0 style43 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style45 null"></td>
                                        <td class="column25 style46 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row27">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style77 null style77" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column4 style77 null style77" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column6 style78 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column7 style78 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column8 style78 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column9 style77 null style77" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column11 style77 null style77" colspan="3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column14 style77 null style77" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column16 style77 null style77" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column18 style79 null style79" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column24 style45 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row28">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style47 null"></td>
                                        <td class="column3 style47 null"></td>
                                        <td class="column4 style47 null"></td>
                                        <td class="column5 style47 null"></td>
                                        <td class="column6 style13 null"></td>
                                        <td class="column7 style13 null"></td>
                                        <td class="column8 style13 null"></td>
                                        <td class="column9 style47 null"></td>
                                        <td class="column10 style47 null"></td>
                                        <td class="column11 style47 null"></td>
                                        <td class="column12 style47 null"></td>
                                        <td class="column13 style47 null"></td>
                                        <td class="column14 style47 null"></td>
                                        <td class="column15 style47 null"></td>
                                        <td class="column16 style47 null"></td>
                                        <td class="column17 style47 null"></td>
                                        <td class="column18 style47 null"></td>
                                        <td class="column19 style47 null"></td>
                                        <td class="column20 style48 null"></td>
                                        <td class="column21 style48 null"></td>
                                        <td class="column22 style48 null"></td>
                                        <td class="column23 style48 null"></td>
                                        <td class="column24 style45 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row29">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style13 s">Responsable de área</td>
                                        <td class="column3 style49 null"></td>
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
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row30">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style80 s style80" colspan="3">CONCEPTO</td>
                                        <td class="column5 style80 s style80" colspan="8">CONDICIONES ACTUALES
                                            (LLENAR EN CAMBIOS Y BAJAS)</td>
                                        <td class="column13 style80 s style80" colspan="11">ALTAS O NUEVAS CONDICIONES
                                        </td>
                                        <td class="column24 style42 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row31">
                                        <td class="column0 style50 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style81 s style81" colspan="3">PUESTO</td>
                                        <td class="column5 style82 null style82" colspan="8">
                                            <div class="form-control backinp2">
                                                <input type="text" class="form-control backinp2"
                                                    placeholder="Escribe aquí...">
                                            </div>
                                        </td>
                                        <td class="column13 style82 null style82" colspan="11">
                                            <div class="form-control backinp2">
                                                <input type="text" class="form-control backinp2" id="puesto"
                                                    placeholder="Escribe aquí...">
                                            </div>
                                        </td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style52 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row32">
                                        <td class="column0 style50 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style81 s style81" colspan="3">AREA</td>
                                        <td class="column5 style82 null style82" colspan="8">
                                            <div class="form-control backinp2">
                                                <input type="text" class="form-control backinp2"
                                                    placeholder="Escribe aquí...">
                                            </div>
                                        </td>
                                        <td class="column13 style82 null style82" colspan="11">
                                            <div class="form-control backinp2">
                                                <input type="text" class="form-control backinp2"
                                                    placeholder="Escribe aquí...">
                                            </div>
                                        </td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style52 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row33">
                                        <td class="column0 style50 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style81 s style81" colspan="3">CONTRATO</td>
                                        <td class="column5 style82 null style82" colspan="8">
                                            <div class="form-control backinp2">
                                                <input type="text" class="form-control backinp2"
                                                    placeholder="Escribe aquí...">
                                            </div>
                                        </td>
                                        <td class="column13 style82 null style82" colspan="11">
                                            <div class="form-control backinp2">
                                                <input type="text" class="form-control backinp2"
                                                    placeholder="Escribe aquí...">
                                            </div>
                                        </td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style52 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row34">
                                        <td class="column0 style50 null"></td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style81 s style81" colspan="3">PREDIO</td>
                                        <td class="column5 style82 null style82" colspan="8">
                                            <div class="form-control backinp2">
                                                <input type="text" class="form-control backinp2"
                                                    placeholder="Escribe aquí...">
                                            </div>
                                        </td>
                                        <td class="column13 style82 null style82" colspan="11">
                                            <div class="form-control backinp2">
                                                <input type="text" class="form-control backinp2"
                                                    placeholder="Escribe aquí...">
                                            </div>
                                        </td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style52 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row35">
                                        <td class="column0 style50 null"></td>
                                        <td class="column1 style50 null"></td>
                                        <td class="column2 style81 s style81" colspan="3" rowspan="2">SUELDO
                                        </td>
                                        <td class="column5 style83 s style83" colspan="2" rowspan="2">
                                            ESPECIFICAR DE ACUERDO AL TIPO DE NOMINA</td>
                                        <td class="column7 style84 s">FIJO</td>
                                        <td class="column8 style84 s">VARIABLE</td>
                                        <td class="column9 style85 null style85" colspan="4" rowspan="2"></td>
                                        <td class="column13 style86 s style86" colspan="3">AUMENTO</td>
                                        <td class="column16 style84 s">EMPLEADO</td>
                                        <td class="column17 style86 s style86" colspan="2">FIJO</td>
                                        <td class="column19 style86 s style86" colspan="2">VARIABLE</td>
                                        <td class="column21 style87 n style87" colspan="3" rowspan="2">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp" id="sueldo"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column24 style53 null"></td>
                                        <td class="column25 style52 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row36">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column7 style88 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column8 style88 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column13 style87 null style87" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column15 style89 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column16 style90 null">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column17 style91 null style91" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column19 style91 null style91" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column24 style53 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row37">
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
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row38">
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
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row39">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style54 s style54" colspan="5">En caso de baja anote el
                                            motivo</td>
                                        <td class="column7 style49 null"></td>
                                        <td class="column8 style49 null"></td>
                                        <td class="column9 style49 null"></td>
                                        <td class="column10 style49 null"></td>
                                        <td class="column11 style49 null"></td>
                                        <td class="column12 style49 null"></td>
                                        <td class="column13 style49 null"></td>
                                        <td class="column14 style49 null"></td>
                                        <td class="column15 style49 null"></td>
                                        <td class="column16 style49 null"></td>
                                        <td class="column17 style49 null"></td>
                                        <td class="column18 style49 null"></td>
                                        <td class="column19 style49 null"></td>
                                        <td class="column20 style49 null"></td>
                                        <td class="column21 style49 null"></td>
                                        <td class="column22 style49 null"></td>
                                        <td class="column23 style49 null"></td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row40">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style92 null style92" colspan="22" rowspan="5">
                                            <div class="form-group">
                                                <textarea class="form-control" id="causabaja" rows="5" placeholder="Escribe aquí" id="causabaja"></textarea>
                                            </div>
                                        </td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row41">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row42">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row43">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row44">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row45">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style49 null"></td>
                                        <td class="column3 style49 null"></td>
                                        <td class="column4 style49 null"></td>
                                        <td class="column5 style49 null"></td>
                                        <td class="column6 style49 null"></td>
                                        <td class="column7 style49 null"></td>
                                        <td class="column8 style49 null"></td>
                                        <td class="column9 style49 null"></td>
                                        <td class="column10 style49 null"></td>
                                        <td class="column11 style49 null"></td>
                                        <td class="column12 style49 null"></td>
                                        <td class="column13 style49 null"></td>
                                        <td class="column14 style49 null"></td>
                                        <td class="column15 style49 null"></td>
                                        <td class="column16 style49 null"></td>
                                        <td class="column17 style49 null"></td>
                                        <td class="column18 style49 null"></td>
                                        <td class="column19 style49 null"></td>
                                        <td class="column20 style49 null"></td>
                                        <td class="column21 style49 null"></td>
                                        <td class="column22 style49 null"></td>
                                        <td class="column23 style49 null"></td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row46">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style55 s style55" colspan="22">Llenado por Reclutamiento
                                        </td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row47">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style93 s style93" colspan="10">DOMICILIO Y TELEFONO ACTUAL
                                        </td>
                                        <td class="column12 style93 s style93" colspan="12">DOMICILIO Y TELEFONO
                                            FISCAL</td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row48">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style94 null style94" colspan="10" rowspan="5">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2"
                                                    id="domicilioytelefono" placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column12 style95 null style95" colspan="12" rowspan="5">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id = "domicilioytelefonofiscal"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row49">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row50">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style52 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row51">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row52">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row53">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style54 null style54" colspan="15"></td>
                                        <td class="column17 style49 null"></td>
                                        <td class="column18 style49 null"></td>
                                        <td class="column19 style49 null"></td>
                                        <td class="column20 style49 null"></td>
                                        <td class="column21 style49 null"></td>
                                        <td class="column22 style49 null"></td>
                                        <td class="column23 style49 null"></td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row54">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style93 s style93" colspan="5">No. DE INFONAVIT</td>
                                        <td class="column7 style93 s style93" colspan="5">No. DE FONACOT</td>
                                        <td class="column12 style93 s style93" colspan="5">RFC</td>
                                        <td class="column17 style93 s style93" colspan="7">CURP</td>
                                        <td class="column24 style56 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row55">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style95 s style95" colspan="5" rowspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id="infonavit"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column7 style96 null style96" colspan="5" rowspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id="fonacot"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column12 style96 null style96" colspan="5" rowspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id="rfc"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column17 style95 null style95" colspan="7" rowspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id="curp"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column24 style32 s">&nbsp;</td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row56">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style32 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row57">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style32 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row58">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style32 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row59">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style97 s style97" colspan="2" rowspan="2">PLANTA
                                        </td>
                                        <td class="column4 style97 s style97" colspan="2" rowspan="2">EVENTUAL
                                        </td>
                                        <td class="column6 style93 s style93" colspan="2">SEXO</td>
                                        <td class="column8 style97 s style97" colspan="3">HAND KEY</td>
                                        <td class="column11 style98 s style98" colspan="3">NACIONALIDAD</td>
                                        <td class="column14 style93 s style93" colspan="3">FECHA DE NACIMIENTO</td>
                                        <td class="column17 style93 s style93" colspan="7">ESCOLARIDAD</td>
                                        <td class="column24 style57 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row60">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column6 style99 s style99" rowspan="2">M</td>
                                        <td class="column7 style99 s style99" rowspan="2">F</td>
                                        <td class="column8 style99 s style99" rowspan="2">SI</td>
                                        <td class="column9 style99 s style99" colspan="2" rowspan="2">NO</td>
                                        <td class="column11 style92 null style92" colspan="3" rowspan="4">
                                            MEXICANA</td>
                                        <td class="column14 style99 s style99" rowspan="2">DIA</td>
                                        <td class="column15 style99 s style99" rowspan="2">MES</td>
                                        <td class="column16 style99 s style99" rowspan="2">AÑO</td>
                                        <td class="column17 style100 s style100" colspan="4" rowspan="2">
                                            PREPARATORIA</td>
                                        <td class="column21 style101 s style101" colspan="3">ESPECIALIDAD</td>
                                        <td class="column24 style7 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row61">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style92 null style92" colspan="2" rowspan="3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column4 style92 null style92" colspan="2" rowspan="3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column21 style102 s style102" colspan="3">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column24 style7 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row62">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column6 style92 null style92" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column7 style92 s style92" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column8 style92 null style92" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column9 style92 null style92" colspan="2" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column14 style103 null style103" rowspan="2" id="dianac">
                                        </td>
                                        <td class="column15 style103 null style103" rowspan="2" id="mesnac">
                                        </td>
                                        <td class="column16 style96 null style96" rowspan="2" id="anonac"></td>
                                        <td class="column17 style101 s style101" colspan="2">TITULADA</td>
                                        <td class="column19 style101 s style101" colspan="2">PASANTE</td>
                                        <td class="column21 style101 s style101" colspan="2">TRUNCA</td>
                                        <td class="column23 style104 s">&nbsp;</td>
                                        <td class="column24 style7 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row63">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column17 style102 null style102" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column19 style102 s style102" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column21 style102 s style102" colspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column23 style104 null"></td>
                                        <td class="column24 style7 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row64">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style105 s style105" colspan="4">PUESTO NUEVO</td>
                                        <td class="column6 style105 s style105" colspan="2">EN CASO DE SER PUESTO
                                            NUEVO, REMPLAZA A</td>
                                        <td class="column8 style105 s style105" colspan="4">CORREO ELECTRÓNICO</td>
                                        <td class="column12 style105 s style105" colspan="2">UMF</td>
                                        <td class="column14 style105 s style105" colspan="4">ESTADO CIVIL</td>
                                        <td class="column18 style105 s style105" colspan="6">No. DE AFILIACION DEL
                                            I.M.S.S.</td>
                                        <td class="column24 style57 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row65">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style99 s style99" colspan="2" rowspan="2">SI</td>
                                        <td class="column4 style99 s style99" colspan="2" rowspan="2">NO</td>
                                        <td class="column6 style99 s style99" colspan="2" rowspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2"
                                                    id="nombrecompleto" placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column8 style106 null style106" colspan="4" rowspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id="correo"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column12 style107 null style107" colspan="2" rowspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2"
                                                    id="nombrecompleto" placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column14 style108 null style108" colspan="4" rowspan="2">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2"
                                                    id="estado_civil" placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column18 style109 null style109" colspan="6" rowspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id="nss"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column24 style58 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row66">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style58 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row67">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style92 null style92" colspan="2" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column4 style92 null style92" colspan="2" rowspan="2">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checksegescred">
                                            </div>
                                        </td>
                                        <td class="column14 style99 s style99" colspan="4">No. DE HIJOS</td>
                                        <td class="column24 style58 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row68">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column14 style110 null style110" colspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2"
                                                    id="nombrecompleto" placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column24 style58 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row69">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style98 s style98" colspan="15">
                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRESTACIONES
                                        </td>
                                        <td class="column17 style105 s style105" colspan="7">CUENTA BANCO</td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row70">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style111 s style111" colspan="2" rowspan="4">SEGURO
                                            DE ACCIDENTES</td>
                                        <td class="column4 style99 s style99" colspan="2" rowspan="2">
                                            Beneficiario</td>
                                        <td class="column6 style112 null style112" colspan="8" rowspan="2">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id="beneficiario"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column14 style113 s style113" colspan="2" rowspan="4">
                                            PORCENTAJE</td>
                                        <td class="column16 style114 n style114" rowspan="4">100%</td>
                                        <td class="column17 style96 null style96" colspan="7" rowspan="4">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id="banco"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column24 style2 s">&nbsp;</td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row71">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row72">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column4 style99 s style99" colspan="2" rowspan="2">Parentezco
                                        </td>
                                        <td class="column6 style108 null style108" colspan="8" rowspan="2">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp2" id="parentesco"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row73">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row74">
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
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row75">
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
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row76">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style115 s style115" colspan="5">NOMBRE Y FIRMA</td>
                                        <td class="column7 style115 s style115" colspan="5">NOMBRE Y FIRMA</td>
                                        <td class="column12 style115 s style115" colspan="6">NOMBRE Y FIRMA</td>
                                        <td class="column18 style115 s style115" colspan="6">NOMBRE Y FIRMA</td>
                                        <td class="column24 style32 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row77">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style116 null style116" colspan="5" rowspan="3">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp3" id="nombrefirma"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column7 style117 null style117" colspan="5" rowspan="3">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp3" id="nejecutivo"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column12 style117 null style117" colspan="6" rowspan="3">
                                            <div class="form-group">
                                                <input type="text" class="form-control backinp3" id="nejecutivo"
                                                    placeholder="Escribe aquí">
                                            </div>
                                        </td>
                                        <td class="column18 style117 null style117" colspan="6" rowspan="3">
                                        </td>
                                        <td class="column24 style7 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row78">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style7 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row79">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column24 style7 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row80">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style64 s style64" colspan="5">SOLICITANTE</td>
                                        <td class="column7 style64 s style64" colspan="5">RESPONSABLE DE AREA</td>
                                        <td class="column12 style64 s style64" colspan="6">CAPITAL HUMANO</td>
                                        <td class="column18 style64 s style64" colspan="6">DIRECCION GENERAL</td>
                                        <td class="column24 style57 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
                                    </tr>
                                    <tr class="row81">
                                        <td class="column0">&nbsp;</td>
                                        <td class="column1">&nbsp;</td>
                                        <td class="column2 style2 null"></td>
                                        <td class="column3 style2 null"></td>
                                        <td class="column4 style2 null"></td>
                                        <td class="column5 style2 null"></td>
                                        <td class="column6 style2 null"></td>
                                        <td class="column7 style2 null"></td>
                                        <td class="column8 style2 null"></td>
                                        <td class="column9 style2 null"></td>
                                        <td class="column10 style2 null"></td>
                                        <td class="column11 style2 null"></td>
                                        <td class="column12 style2 null"></td>
                                        <td class="column13 style2 null"></td>
                                        <td class="column14 style2 null"></td>
                                        <td class="column15 style2 null"></td>
                                        <td class="column16 style2 null"></td>
                                        <td class="column17 style2 null"></td>
                                        <td class="column18 style2 null"></td>
                                        <td class="column19 style2 null"></td>
                                        <td class="column20 style2 null"></td>
                                        <td class="column21 style2 null"></td>
                                        <td class="column22 style2 null"></td>
                                        <td class="column23 style2 null"></td>
                                        <td class="column24 style2 null"></td>
                                        <td class="column25 style2 null"></td>
                                        <td class="column26">&nbsp;</td>
                                        <td class="column27">&nbsp;</td>
                                        <td class="column28">&nbsp;</td>
                                        <td class="column29">&nbsp;</td>
                                        <td class="column30">&nbsp;</td>
                                        <td class="column31">&nbsp;</td>
                                        <td class="column32">&nbsp;</td>
                                        <td class="column33">&nbsp;</td>
                                        <td class="column34">&nbsp;</td>
                                        <td class="column35">&nbsp;</td>
                                        <td class="column36">&nbsp;</td>
                                        <td class="column37">&nbsp;</td>
                                        <td class="column38">&nbsp;</td>
                                        <td class="column39">&nbsp;</td>
                                        <td class="column40">&nbsp;</td>
                                        <td class="column41">&nbsp;</td>
                                        <td class="column42">&nbsp;</td>
                                        <td class="column43">&nbsp;</td>
                                        <td class="column44">&nbsp;</td>
                                        <td class="column45">&nbsp;</td>
                                        <td class="column46">&nbsp;</td>
                                        <td class="column47">&nbsp;</td>
                                        <td class="column48">&nbsp;</td>
                                        <td class="column49">&nbsp;</td>
                                        <td class="column50">&nbsp;</td>
                                        <td class="column51">&nbsp;</td>
                                        <td class="column52">&nbsp;</td>
                                        <td class="column53">&nbsp;</td>
                                        <td class="column54">&nbsp;</td>
                                        <td class="column55">&nbsp;</td>
                                        <td class="column56">&nbsp;</td>
                                        <td class="column57">&nbsp;</td>
                                        <td class="column58">&nbsp;</td>
                                        <td class="column59">&nbsp;</td>
                                        <td class="column60">&nbsp;</td>
                                        <td class="column61">&nbsp;</td>
                                        <td class="column62">&nbsp;</td>
                                        <td class="column63">&nbsp;</td>
                                        <td class="column64">&nbsp;</td>
                                        <td class="column65">&nbsp;</td>
                                        <td class="column66">&nbsp;</td>
                                        <td class="column67">&nbsp;</td>
                                        <td class="column68">&nbsp;</td>
                                        <td class="column69">&nbsp;</td>
                                        <td class="column70">&nbsp;</td>
                                        <td class="column71">&nbsp;</td>
                                        <td class="column72">&nbsp;</td>
                                        <td class="column73">&nbsp;</td>
                                        <td class="column74">&nbsp;</td>
                                        <td class="column75">&nbsp;</td>
                                        <td class="column76">&nbsp;</td>
                                        <td class="column77">&nbsp;</td>
                                        <td class="column78">&nbsp;</td>
                                        <td class="column79">&nbsp;</td>
                                        <td class="column80">&nbsp;</td>
                                        <td class="column81">&nbsp;</td>
                                        <td class="column82">&nbsp;</td>
                                        <td class="column83">&nbsp;</td>
                                        <td class="column84">&nbsp;</td>
                                        <td class="column85">&nbsp;</td>
                                        <td class="column86">&nbsp;</td>
                                        <td class="column87">&nbsp;</td>
                                        <td class="column88">&nbsp;</td>
                                        <td class="column89">&nbsp;</td>
                                        <td class="column90">&nbsp;</td>
                                        <td class="column91">&nbsp;</td>
                                        <td class="column92">&nbsp;</td>
                                        <td class="column93">&nbsp;</td>
                                        <td class="column94">&nbsp;</td>
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


        <div class="modal fade" id="modaleditar" tabindex="-1" aria-labelledby="modaleditarLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <!-- Agregamos la clase modal-lg -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modaleditarLabel">EDITAR</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <form class="mt-3" id="formulario_editar">
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="id">Empleado id:</label>
                                        <input type="text" class="form-control" id="id" name="id"
                                            readonly required>
                                    </div>
                                    <div class="form-group">
                                        <label for="puesto">Puesto:</label>
                                        <div class="form-group">
                                            <select class="form-control" id="puesto_general" name="puesto">
                                                <option value="ANALISTA DE OPERACIONES">Analista de operaciones</option>
                                                <option value="ASISTENTE DE DIRECCIÓN">Asistente de dirección</option>
                                                <option value="AUDITOR DE INVENTARIOS">Auditor de inventarios</option>
                                                <option value="AUXILIAR ADMINISTRATIVO">Auxiliar administrativo</option>
                                                <option value="AUXILIAR DE ALMACÉN">Auxiliar de almacén</option>
                                                <option value="AUXILIAR DE COMPRAS">Auxiliar de compras</option>
                                                <option value="AUXILIAR DE LIMPIEZA">Auxiliar de limpieza</option>
                                                <option value="AUXILIAR DE MANTENIMIENTO">Auxiliar de mantenimiento
                                                </option>
                                                <option value="AUXILIAR DE OPERACIONES">Auxiliar de operaciones</option>
                                                <option value="CHOFER PARTICULAR">Chofer particular</option>
                                                <option value="GERENTE DE OPERACIONES">Gerente de operaciones</option>
                                                <option value="MANTENIMIENTO">Mantenimiento</option>
                                                <option value="MONITORISTA">Monitorista</option>
                                                <option value="OPERADOR DE MONTACARGAS">Operador de montacargas</option>
                                                <option value="RECURSOS HUMANOS">Recursos humanos</option>
                                                <option value="SUPERVISOR DE OPERACIONES">Supervisor de operaciones
                                                </option>
                                                <option value="SUPERVISOR DE CALL CENTER">Supervisor de Call Center
                                                </option>
                                                <option value="AUXILIAR ADMINISTRATIVO">Auxiliar Administrativo</option>
                                                <option value="MINERIA DE DATOS">Mineria de datos</option>
                                                <option value="GESTOR DE COBRANZA">Gestor de cobranza</option>
                                                <option value="DIRECCIÓN GENERAL">Dirección general</option>
                                                <option value="DIRECCIÓN DE OPERACIONES">Dirección de operaciones</option>
                                                <option value="COORDINACION DE DESARROLLO ORGANIZACIONAL">Coordinación de
                                                    desarrollo organzacional</option>
                                                <option value="AUXILIAR CONTABLE">Auxiliar contable</option>
                                                <option value="AUXILIAR DE NOMINA">Auxiliar de nómina</option>
                                                <option value="JEFE DE CALL CENTER">Jefe de Call Center</option>
                                                <option value="MEDIOS DE COMUNICACION">Medios de comunicación</option>
                                                <option value="EJECUTIVA DE CUENTA">Ejecutiva de cuenta</option>
                                                <option value="GUARDIA DE SEGURIDAD">Guardia de seguridad</option>
                                                <option value="SISTEMAS">SISTEMAS</option>
                                                <option value="ASISTE DE DIRECCION">Asisten te de dirección</option>
                                                <option value="COORDINADOR DE OPERACIONES">Coordinador de operaciones
                                                </option>

                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="centrocostos">Centro de costos:</label>
                                        <select class="form-control" id="centrocostos" name="centrocostos">
                                            <option value="000001 ADMINISTRACION">000001 Administración</option>
                                            <option value="000002 GUADALAJARA">000001 Guadalajara</option>
                                            <option value="000003 MONTERREY">000003 Monterrey</option>
                                            <option value="000009 QUERETARO">000009 Queretaro</option>
                                            <option value="000014 TELMEX">000014 Telmex</option>
                                            <option value="000020 TORRE DE CONTROL">000020 Torre de Control</option>
                                            <option value="000023 EQUIPO AMARILLO">000023 Equipo Amarillo</option>
                                            <option value="000058 EQUIPO AZUL 1">000058 Equipo Azul 1</option>
                                            <option value="000060 EQUIPO ROJO">000060 Equipo Rojo</option>
                                            <option value="000061 EQUIPO VERDE">000061 Equipo Verde</option>
                                            <option value="000065 EQUIPO NARANJA">000065 Equipo Naranja</option>
                                            <option value="000070 JJ">000070 JJ</option>
                                            <option value="000071 SAN LUIS POTOSI">000071 San Luis Potosi</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="sueldo">Sueldo:</label>
                                        <input type="number" class="form-control" id="sueldo" name="sueldo"
                                            required>
                                    </div>
                                </div>

                            </div>
                            <h2>Dirección Fiscal</h2>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="calle_fiscal">Calle, Número y Colonia:</label>
                                        <input type="text" class="form-control" id="calle_fiscal"
                                            name="calle_fiscal" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cp_fiscal">Codigo postal:</label>
                                        <input type="number" class="form-control" id="cp_fiscal" name="cp_fiscal"
                                            required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="municipio_fiscal">Municipio:</label>
                                        <input type="text" class="form-control" id="municipio_fiscal"
                                            name="municipio_fiscal" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="telefono_fiscal">Número telefónico:</label>
                                        <input type="text" class="form-control" id="telefono_fiscal"
                                            name="telefono_fiscal" required>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="entidad_federativa">Entidad Federativa:</label>
                                        <input type="text" class="form-control" id="entidad_federativa"
                                            name="entidad_federativa" required>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Enviar</button>

                        </form>

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

        ..form-control input {
            width: 100%;
            /* Opcional: Establece el ancho del input al 100% del div */
            font-size: 14px;
            /* Ajusta el tamaño del texto según tus necesidades */
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
                        editar = '<button class="btn btn-warning" onClick="editargeneral(\'' +
                            val.id +
                            '\')">Editar</button>';
                        eliminar =
                            '<button class="btn btn-danger" onClick="eliminargeneral(\'' + val
                            .id +
                            '\')">Eliminar</button>';
                        var row = table.row.add([
                            val.id,
                            val.nejecutivo,
                            val.fechaalta,
                            val.nss,
                            val.apaterno,
                            val.amaterno,
                            val.nombre,
                            val.correo,
                            val.fechaalta,
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
                            val.estado,
                            val.causabaja,
                            val.beneficiario,
                            val.parentesco,
                            val.num_cuenta_bancario,
                            val.banco,
                            val.salario,
                            moper,
                            editar,
                            eliminar
                        ]).draw().node();
                    });

                    $.unblockUI();

                },
                error: function(xhr, status, error) {
                    console.log(
                        error); // Muestra cualquier error en la consola para depuración

                }
            });


            $('#formulario_editar').submit(function(event) {
                event.preventDefault(); // Evita el envío del formulario por defecto

                var formData = $(this).serialize(); // Serializa los datos del formulario

                Swal.fire({
                    title: '¡Se editará el registro! ',
                    //         html: warningMessage,
                    showDenyButton: true,
                    confirmButtonText: 'Enviar',
                    denyButtonText: `No enviar`,

                }).then((result) => {

                    if (result.isConfirmed) {

                        $.ajax({
                            url: "editarempleadogeneral",
                            method: "POST",
                            dataType: "JSON",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            type: 'POST', // Utiliza el método HTTP POST
                            data: formData, // Envía los datos del formulario
                            success: function(response) {
                                Swal.fire(
                                    '¡Gracias por esperar!',
                                    response["success"],
                                    'success'
                                )
                                $('#modalEmpleadoYobel').modal('hide');
                                setTimeout(function() {
                                    window.location.reload(true);
                                }, 4000);

                            },
                            error: function(error) {
                                // Se ejecuta cuando hay un error en la solicitud
                                console.log('Error en la solicitud');
                                console.log(error);
                            }
                        });


                    } else if (result.isDenied) {
                        Swal.fire({
                            icon: 'info',
                            title: 'No se asigna empleado',
                            text: "No se realiza la asignación en yobel del empleado",
                        });
                    }
                })
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
                    $('#idempleado').val(data.id);
                    nombre = data.apaterno + " " + data.amaterno + " " + data.nombre;
                    $('#nombrecompleto').val(nombre);
                    $('#nombrefirma').val(nombre);
                    $('#nejecutivo').val(data.nejecutivo);

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
                    $('#puesto').val(data.puesto);
                    $('#sueldo').val(data.salario);
                    $('#predio').text(data.predio);


                    domicilioytelefono = data.calle + ", " + data.col + ", " + data.munic + ", " + data.estado +
                        ", " + data.cp +
                        ", " + data.telcasa;
                    $('#domicilioytelefono').val(domicilioytelefono);


                    domicilioytelefonofiscal = data.calle_fiscal + ", " + data.cp_fiscal + ", " + data.municipio_fiscal + ", " + data.estado +
                        ", " + data.cp + ", " + data.telefono_fiscal;
                    $('#domicilioytelefonofiscal').val(domicilioytelefonofiscal);


                    $('#rfc').val(data.rfc);
                    $('#infonavit').val(data.infonavit);
                    $('#fonacot').val(data.fonacot);
                    $('#correo').val(data.correo);
                    $('#estcivil').val(data.estcivil);
                    $('#beneficiario').val(data.beneficiario);
                    $('#parentesco').val(data.parentesco);
                    $('#banco').val(data.banco);

                    $('#curp').val(data.curp);
                    $('#nss').val(data.nss);




                    console.log(data);

                }
            });




            $('#modalmoperalta').modal('show');
        }

        function editargeneral(id) {
            $('#modaleditar').modal('show');

            $.ajax({
                url: "obtenerEmpleadoGeneral",
                method: "GET",
                dataType: "JSON",
                data: {
                    "id": id
                },
                success: function(data) {
                    $('#id').val(data.id);
                    $('#puesto').val(data.puesto);
                    $('#centrocostos').val(data.predio);
                    $('#sueldo').val(data.salario);
                    $('#calle_fiscal').val(data.calle_fiscal);
                    $('#cp_fiscal').val(data.cp_fiscal);
                    $('#municipio_fiscal').val(data.municipio_fiscal);
                    $('#entidad_federativa').val(data.entidad_federativa);
                    $('#telefono_fiscal').val(data.telefono_fiscal);
                }
            });

        }

        function eliminargeneral(id) {
            Swal.fire({
                title: '¡Se eliminará el registro! ',
                //         html: warningMessage,
                showDenyButton: true,
                confirmButtonText: 'Eliminar',
                denyButtonText: `No eliminar`,

            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "eliminarempleadogeneral",
                        method: "POST",
                        dataType: "JSON",
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        type: 'POST', // Utiliza el método HTTP POST
                        data: {
                            "id": id
                        }, // Envía los datos del formulario
                        success: function(response) {
                            Swal.fire(
                                '¡Gracias por esperar!',
                                response["success"],
                                'success'
                            )

                            setTimeout(function() {
                                window.location.reload(true);
                            }, 4000);

                        },
                        error: function(error) {
                            // Se ejecuta cuando hay un error en la solicitud
                            console.log('Error en la solicitud');
                            console.log(error);
                        }
                    });


                } else if (result.isDenied) {
                    Swal.fire({
                        icon: 'info',
                        title: 'Sin cambios',
                        text: "No se elimina registro de la base general",
                    });
                }
            });
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
