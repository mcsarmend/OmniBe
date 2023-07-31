@extends('adminlte::page')

@section('title', 'PreAlta')

@section('content_header')
    <h1>PreAlta</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Lista de candidatos pre alta</h1>
        </div>
        <div class="card-body">
            <table id="prealtatabla" class="table table-hover tabpre" style="width: 600px; overflow-x: auto;">
                <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDO PATERNO</th>
                        <th>APELLIDO MATERNO</th>
                        <th>CORREO</th>
                        <th>CURP</th>
                        <th>RFC</th>
                        <th>CALLE</th>
                        <th>NÚMERO</th>
                        <th>MANZANA</th>
                        <th>COLONIA</th>
                        <th>MUNICIPIO</th>
                        <th>ESTADO</th>
                        <th>CÓDIGO POSTAL</th>
                        <th>FECHA DE ENVÍO</th>
                        <th>EJECUTIVO DE CUENTA</th>
                        <th>NSS</th>
                        <th>INFONAVIT</th>
                        <th>FONACOT</th>
                        <th>FECHA NACIMIENTO</th>
                        <th>LUGAR NACIMIENTO</th>
                        <th>ESTADO CIVIL</th>
                        <th>ESCOLARIDAD</th>
                        <th>GENERO</th>
                        <th>CELULAR</th>
                        <th>TELEFONO CASA</th>
                        <th>TELEFONO CONTACTO</th>
                        <th>YOBEL</th>
                        <th>GENERAL</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Las filas de la tabla se generarán dinámicamente con JavaScript -->
                </tbody>
            </table>
        </div>


        {{-- MODAL YOBEL --}}


        <div class="modal fade" id="modalEmpleadoYobel" tabindex="-1" aria-labelledby="modalEmpleadoYobelLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <!-- Agregamos la clase modal-lg -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEmpleadoYobelLabel">Formulario de Registro de Empleado YOBEL</h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <h5 id="idempleadoyobel"></h5>
                        <br>
                        <form class="mt-3" id="formulario_yobel">
                            <div class="row">
                                <!-- Dividimos el formulario en dos columnas -->
                                <!-- Primera columna -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Correo:</label>
                                        <input type="text" class="form-control" id="correo" name="correo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telcontacto">Teléfono de contacto:</label>
                                        <input type="text" class="form-control" id="telcontacto" name="telcontacto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="calle">Calle:</label>
                                        <input type="text" class="form-control" id="calle" name="calle" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="colonia">Colonia:</label>
                                        <input type="text" class="form-control" id="colonia" name="colonia" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cp">Código postal:</label>
                                        <input type="text" class="form-control" id="cp" name="cp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fonacot">Fonacot:</label>
                                        <input type="text" class="form-control" id="fonacot"
                                            name="fonacot" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="genero">Genero:</label>
                                        <input type="text" class="form-control" id="genero" name="genero"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="fecha_envio">Fecha de envío:</label>
                                        <input type="date" class="form-control" id="fecha_envio" name="fecha_envio"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="reclutador">Ejecutivo de cuenta:</label>
                                        <input type="text" class="form-control" id="reclutador" name="reclutador"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="centro_costos">Centro de costos:</label>
                                        <input type="text" class="form-control" id="centro_costos" name="centro_costos"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="salario">Salario mensual:</label>
                                        <input type="number" class="form-control" id="salario" name="salario" required>
                                    </div>
                                </div>
                                <!-- Segunda columna -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="apaterno">Apellido paterno:</label>
                                        <input type="text" class="form-control" id="apaterno" name="apaterno" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="celular">Celular:</label>
                                        <input type="text" class="form-control" id="celular" name="celular"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="curp">CURP:</label>
                                        <input type="text" class="form-control" id="curp" name="curp"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="numero">Número:</label>
                                        <input type="text" class="form-control" id="numero" name="numero"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="municipio">Municipio:</label>
                                        <input type="text" class="form-control" id="municipio" name="municipio"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nss">NSS:</label>
                                        <input type="text" class="form-control" id="nss" name="nss"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                        <input type="date" class="form-control" id="fecha_nacimiento"
                                            name="fecha_nacimiento" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="escolaridad">Escolaridad:</label>
                                        <input type="text" class="form-control" id="escolaridad" name="escolaridad"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_alta">Fecha de alta:</label>
                                        <input type="date" class="form-control" id="fecha_alta" name="fecha_alta"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="beneficiario">Beneficiario:</label>
                                        <input type="text" class="form-control" id="beneficiario" name="beneficiario"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="puesto">Puesto:</label>
                                        <div class="form-group">
                                            <select class="form-control" id="puesto" name="puesto">
                                                <option value="ANALISTA DE OPERACIONES" >Analista de operaciones</option>
                                                <option value="ASISTENTE DE DIRECCIÓN" >Asistente de dirección</option>
                                                <option value="AUDITOR DE INVENTARIOS" >Auditor de inventarios</option>
                                                <option value="AUXILIAR ADMINISTRATIVO" >Auxiliar administrativo</option>
                                                <option value="AUXILIAR DE ALMACÉN" >Auxiliar de almacén</option>
                                                <option value="AUXILIAR DE COMPRAS" >Auxiliar de compras</option>
                                                <option value="AUXILIAR DE LIMPIEZA" >Auxiliar de limpieza</option>
                                                <option value="AUXILIAR DE MANTENIMIENTO" >Auxiliar de mantenimiento</option>
                                                <option value="AUXILIAR DE OPERACIONES" >Auxiliar de operaciones</option>
                                                <option value="CHOFER PARTICULAR" >Chofer particular</option>
                                                <option value="GERENTE DE OPERACIONES" >Gerente de operaciones</option>
                                                <option value="MANTENIMIENTO" >Mantenimiento</option>
                                                <option value="MONITORISTA" >Monitorista</option>
                                                <option value="OPERADOR DE MONTACARGAS" >Operador de montacargas</option>
                                                <option value="RECURSOS HUMANOS" >Recursos humanos</option>
                                                <option value="SUPERVISOR DE OPERACIONES" >Supervisor de operaciones</option>

                                            </select>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="banco">Banco:</label>
                                        <input type="text" class="form-control" id="banco" name="banco"
                                            required>
                                    </div>

                                </div>
                                <!-- Tercera columna -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="amaterno">Apellido Materno:</label>
                                        <input type="text" class="form-control" id="amaterno" name="amaterno"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telcasa">Teléfono de casa:</label>
                                        <input type="text" class="form-control" id="telcasa" name="telcasa"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="rfc">RFC:</label>
                                        <input type="text" class="form-control" id="rfc" name="rfc"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="manzana">Manzana:</label>
                                        <input type="text" class="form-control" id="manzana" name="manzana"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado">Estado:</label>
                                        <input type="text" class="form-control" id="estado" name="estado"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="infonavit">Infonavit:</label>
                                        <input type="text" class="form-control" id="infonavit" name="infonavit"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lugar_nacimiento">Lugar de nacimiento:</label>
                                        <input type="text" class="form-control" id="lugar_nacimiento"
                                            name="lugar_nacimiento" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado_civil">Estado civil:</label>
                                        <input type="text" class="form-control" id="estado_civil" name="estado_civil"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="fecha_entrevista">Fecha de Entrevista:</label>
                                        <input type="date" class="form-control" id="fecha_entrevista" name="fecha_entrevista"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="parentesco">Parentesco:</label>
                                        <input type="text" class="form-control" id="parentesco" name="parentesco"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cuenta">Cuenta:</label>
                                        <input type="text" class="form-control" id="cuenta" name="cuenta"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cuenta_bancaria">Número de Cuenta Bancario:</label>
                                        <input type="text" class="form-control" id="cuenta_bancaria"
                                            name="cuenta_bancaria" required>
                                    </div>


                                </div>
                            </div> <!-- Fin de la división en dos columnas -->

                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- MODAL EMPLEADOS GENERAL --}}


        <div class="modal fade" id="modalEmpleadosGeneral" tabindex="-1" aria-labelledby="modalEmpleadosGeneralLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <!-- Agregamos la clase modal-lg -->
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalEmpleadosGeneralLabel">Formulario de Registro de Empleado GENERAL
                        </h5>

                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        <h5 id="idempleado_general"></h5>
                        <br>
                        <form class="mt-3" id="formulario_general">
                            <div class="row">
                                <!-- Dividimos el formulario en dos columnas -->
                                <!-- Primera columna -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre_general" name="nombre" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="correo">Correo:</label>
                                        <input type="text" class="form-control" id="correo_general" name="correo" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telcontacto">Teléfono de contacto:</label>
                                        <input type="text" class="form-control" id="telcontacto_general" name="telcontacto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="calle">Calle:</label>
                                        <input type="text" class="form-control" id="calle_general" name="calle" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="colonia">Colonia:</label>
                                        <input type="text" class="form-control" id="colonia_general" name="colonia" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cp">Código postal:</label>
                                        <input type="text" class="form-control" id="cp_general" name="cp" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fonacot">Fonacot:</label>
                                        <input type="text" class="form-control" id="fonacot_general"
                                            name="fonacot" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="genero">Genero:</label>
                                        <input type="text" class="form-control" id="genero_general" name="genero"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="fecha_envio">Fecha de envío:</label>
                                        <input type="date" class="form-control" id="fecha_envio_general" name="fecha_envio"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="reclutador">Ejecutivo de cuenta:</label>
                                        <input type="text" class="form-control" id="reclutador_general" name="reclutador"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="centro_costos">Centro de costos:</label>
                                        <input type="text" class="form-control" id="centro_costos_general" name="centro_costos"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="salario">Salario mensual:</label>
                                        <input type="number" class="form-control" id="salario_general" name="salario" required>
                                    </div>
                                </div>
                                <!-- Segunda columna -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="apaterno">Apellido paterno:</label>
                                        <input type="text" class="form-control" id="apaterno_general" name="apaterno" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="celular">Celular:</label>
                                        <input type="text" class="form-control" id="celular_general" name="celular"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="curp">CURP:</label>
                                        <input type="text" class="form-control" id="curp_general" name="curp"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="numero">Número:</label>
                                        <input type="text" class="form-control" id="numero_general" name="numero"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="municipio">Municipio:</label>
                                        <input type="text" class="form-control" id="municipio_general" name="municipio"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="nss">NSS:</label>
                                        <input type="text" class="form-control" id="nss_general" name="nss"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                                        <input type="date" class="form-control" id="fecha_nacimiento_general"
                                            name="fecha_nacimiento" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="escolaridad">Escolaridad:</label>
                                        <input type="text" class="form-control" id="escolaridad_general" name="escolaridad"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="fechaalta">Fecha de alta:</label>
                                        <input type="date" class="form-control" id="municipio_general" name="municipio"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="beneficiario">Beneficiario:</label>
                                        <input type="text" class="form-control" id="beneficiario_general" name="beneficiario"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="puesto">Puesto:</label>
                                        <div class="form-group">
                                            <select class="form-control" id="puesto_general" name = "puesto">
                                                <option value="ANALISTA DE OPERACIONES" >Analista de operaciones</option>
                                                <option value="ASISTENTE DE DIRECCIÓN" >Asistente de dirección</option>
                                                <option value="AUDITOR DE INVENTARIOS" >Auditor de inventarios</option>
                                                <option value="AUXILIAR ADMINISTRATIVO" >Auxiliar administrativo</option>
                                                <option value="AUXILIAR DE ALMACÉN" >Auxiliar de almacén</option>
                                                <option value="AUXILIAR DE COMPRAS" >Auxiliar de compras</option>
                                                <option value="AUXILIAR DE LIMPIEZA" >Auxiliar de limpieza</option>
                                                <option value="AUXILIAR DE MANTENIMIENTO" >Auxiliar de mantenimiento</option>
                                                <option value="AUXILIAR DE OPERACIONES" >Auxiliar de operaciones</option>
                                                <option value="CHOFER PARTICULAR" >Chofer particular</option>
                                                <option value="GERENTE DE OPERACIONES" >Gerente de operaciones</option>
                                                <option value="MANTENIMIENTO" >Mantenimiento</option>
                                                <option value="MONITORISTA" >Monitorista</option>
                                                <option value="OPERADOR DE MONTACARGAS" >Operador de montacargas</option>
                                                <option value="RECURSOS HUMANOS" >Recursos humanos</option>
                                                <option value="SUPERVISOR DE OPERACIONES" >Supervisor de operaciones</option>

                                            </select>
                                          </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="banco">Banco:</label>
                                        <input type="text" class="form-control" id="banco_general" name="banco"
                                            required>
                                    </div>

                                </div>
                                <!-- Tercera columna -->
                                <div class="col">
                                    <div class="form-group">
                                        <label for="amaterno">Apellido Materno:</label>
                                        <input type="text" class="form-control" id="amaterno_general" name="amaterno"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="telcasa">Teléfono de casa:</label>
                                        <input type="text" class="form-control" id="telcasa_general" name="telcasa"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="rfc">RFC:</label>
                                        <input type="text" class="form-control" id="rfc_general" name="rfc"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="manzana">Manzana:</label>
                                        <input type="text" class="form-control" id="manzana_general" name="manzana"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado">Estado:</label>
                                        <input type="text" class="form-control" id="estado_general" name="estado"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="infonavit">Infonavit:</label>
                                        <input type="text" class="form-control" id="infonavit_general" name="infonavit"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="lugar_nacimiento">Lugar de nacimiento:</label>
                                        <input type="text" class="form-control" id="lugar_nacimiento_general"
                                            name="lugar_nacimiento" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="estado_civil">Estado civil:</label>
                                        <input type="text" class="form-control" id="estado_civil_general" name="estado_civil"
                                            required>
                                    </div>

                                    <div class="form-group">
                                        <label for="fecha_entrevista">Fecha de Entrevista:</label>
                                        <input type="date" class="form-control" id="fecha_entrevista_general" name="fecha_entrevista"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="parentesco">Parentesco:</label>
                                        <input type="text" class="form-control" id="parentesco_general" name="parentesco"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cuenta">Cuenta:</label>
                                        <input type="text" class="form-control" id="cuenta_general" name="cuenta"
                                            required>
                                    </div>
                                    <div class="form-group">
                                        <label for="cuenta_bancaria">Número de Cuenta Bancario:</label>
                                        <input type="text" class="form-control" id="cuenta_bancaria_general"
                                            name="cuenta_bancaria" required>
                                    </div>


                                </div>
                            </div> <!-- Fin de la división en dos columnas -->

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
    </style>
@stop

@section('js')
    <script>
        $(document).ready(function() {

            $.ajax({
                url: "preuplist",
                method: "GET",
                dataType: "JSON",
                data: {},
                success: function(data) {

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



                    data.forEach(function(val) {
                        completeName = val.name + ' ' + val.lname + ' ' + val.sname;
                        botonYobel =
                            '<button class="btn btn-info" onClick="asignationYobel(\'' + val
                            .cryptedid + '\',\'' + completeName + '\')">Asignar</button>';
                        botonGeneral =
                            '<button class="btn btn-info" onClick="asignationGeneral(\'' + val
                            .cryptedid + '\',\'' + completeName + '\')">Asignar</button>';
                        var row = table.row.add([
                            val.name,
                            val.lname,
                            val.sname,
                            val.email,
                            val.curp,
                            val.rfc,
                            val.street,
                            val.streetnum,
                            val.apple,
                            val.col,
                            val.town,
                            val.state,
                            val.cp,
                            val.application_date,
                            val.recrutier,
                            val.nss,
                            val.infonavit,
                            val.fonacot,
                            val.fecha_nac,
                            val.lugar_nac,
                            val.estado_civil,
                            val.escolaridad,
                            val.genero,
                            val.celular,
                            val.telcasa,
                            val.telcontacto,
                            botonYobel,
                            botonGeneral
                        ]).draw().node();


                    });

                },
                error: function(xhr, status, error) {
                    console.log(error); // Muestra cualquier error en la consola para depuración
                }
            });


        });

        function asignationYobel(id, completeName) {

            $.ajax({
                url: "obtenerEmpleadoPrealta",
                method: "GET",
                dataType: "JSON",
                data: {
                    "id": id,
                    "tipo": "yobel"
                },
                success: function(data) {
                    console.log(data);
                    $('#nombre').val(data.nombre);
                    $('#correo').val(data.correo);
                    $('#calle').val(data.calle);
                    $('#colonia').val(data.colonia);
                    $('#fecha_envio').val(data.fecha_envio);
                    $('#fecha_nacimiento').val(data.fecha_nacimiento);
                    $('#escolaridad').val(data.escolaridad);
                    $('#apaterno').val(data.apaterno);
                    $('#curp').val(data.curp);
                    $('#numero').val(data.numero);
                    $('#municipio').val(data.municipio);
                    $('#reclutador').val(data.reclutador);
                    $('#lugar_nacimiento').val(data.lugar_nacimiento);
                    $('#genero').val(data.genero);
                    $('#amaterno').val(data.amaterno);
                    $('#rfc').val(data.rfc);
                    $('#manzana').val(data.manzana);
                    $('#estado').val(data.estado);
                    $('#cp').val(data.cp);
                    $('#nss').val(data.nss);
                    $('#infonavit').val(data.infonavit);
                    $('#fonacot').val(data.fonacot);
                    $('#estado_civil').val(data.estado_civil);
                    $('#celular').val(data.celular);
                    $('#telcasa').val(data.telcasa);
                    $('#telcontacto').val(data.telcontacto);
                    $('#idempleadoyobel').text("Numero de que se asignará: " + data.idnuevoempleado);
                }
            });



            $('#modalEmpleadoYobel').modal('show');




        }



        $('#formulario_yobel').submit(function(event) {
            event.preventDefault(); // Evita el envío del formulario por defecto

            var formData = $(this).serialize(); // Serializa los datos del formulario

            Swal.fire({
                title: '¡Se enviarán los datos del formulario YOBEL! ',
                //         html: warningMessage,
                showDenyButton: true,
                confirmButtonText: 'Enviar',
                denyButtonText: `No enviar`,

            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "asignarEmpleadoYobel",
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
        $('#formulario_general').submit(function(event) {
            event.preventDefault(); // Evita el envío del formulario por defecto

            var formData = $(this).serialize(); // Serializa los datos del formulario

            Swal.fire({
                title: '¡Se enviarán los datos del formulario a la base general!',
                //         html: warningMessage,
                showDenyButton: true,
                confirmButtonText: 'Enviar',
                denyButtonText: `No enviar`,

            }).then((result) => {

                if (result.isConfirmed) {

                    $.ajax({
                        url: "asignarEmpleadoGeneral",
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
                            // $('#modalEmpleadoYobel').modal('hide');
                            // setTimeout(function() {
                            //     window.location.reload(true);
                            // }, 4000);

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

        function asignationGeneral(id, completeName) {

            $.ajax({
                url: "obtenerEmpleadoPrealta",
                method: "GET",
                dataType: "JSON",
                data: {
                    "id": id,
                    "tipo": "general"
                },
                success: function(data) {
                    console.log(data);
                    $('#nombre_general').val(data.nombre);
                    $('#correo_general').val(data.correo);
                    $('#calle_general').val(data.calle);
                    $('#colonia_general').val(data.colonia);
                    $('#fecha_envio_general').val(data.fecha_envio);
                    $('#fecha_nacimiento_general').val(data.fecha_nacimiento);
                    $('#escolaridad_general').val(data.escolaridad);
                    $('#apaterno_general').val(data.apaterno);
                    $('#curp_general').val(data.curp);
                    $('#numero_general').val(data.numero);
                    $('#municipio_general').val(data.municipio);
                    $('#reclutador_general').val(data.reclutador);
                    $('#lugar_nacimiento_general').val(data.lugar_nacimiento);
                    $('#genero_general').val(data.genero);
                    $('#amaterno_general').val(data.amaterno);
                    $('#rfc_general').val(data.rfc);
                    $('#manzana_general').val(data.manzana);
                    $('#estado_general').val(data.estado);
                    $('#cp_general').val(data.cp);
                    $('#nss_general').val(data.nss);
                    $('#infonavit_general').val(data.infonavit);
                    $('#fonacot_general').val(data.fonacot);
                    $('#estado_civil_general').val(data.estado_civil);
                    $('#celular_general').val(data.celular);
                    $('#telcasa_general').val(data.telcasa);
                    $('#telcontacto_general').val(data.telcontacto);

                    $('#idempleado_general').text("Numero de que se asignará: " + data.idnuevoempleado);
                }
            });




            $('#modalEmpleadosGeneral').modal('show');



        }
    </script>
@stop
