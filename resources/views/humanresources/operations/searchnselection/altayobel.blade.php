@extends('adminlte::page')

@section('title', 'PreAlta')

@section('content_header')
    <h1>Altas Yobel</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Lista de altas en YOBEL</h1>
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
                        <th>Colonia</th>
                        <th>Codigo Postal</th>
                        <th>Municipio</th>
                        <th>Causa de baja</th>
                        <th>Beneficiario</th>
                        <th>Parentezco</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Las filas de la tabla se generarán dinámicamente con JavaScript -->
                </tbody>
            </table>
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

    <script>
        $(document).ready(function() {
            let dataJson;
            $.blockUI({ message: 'Cargando...' });
            $.ajax({
                url: "yobellist",
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
                        var row = table.row.add([
                            val.id,
                            val.nejecutivo,
                            val.fechaalta,
                            val.nss,
                            val.apaterno,
                            val.amaterno,
                            val.nombre,
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
                            val.col,
                            val.cp,
                            val.munic,
                            val.causabaja,
                            val.beneficiario,
                            val.parentezco,
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
    </script>
@stop
