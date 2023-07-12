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
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>
                        <th>CURP</th>
                        <th>RFC</th>
                        <th>Calle</th>
                        <th>Número</th>
                        <th>Manzana</th>
                        <th>Colonia</th>
                        <th>Municipio</th>
                        <th>Estado</th>
                        <th>Fecha de envio</th>
                        <th>Reclutador</th>
                        <th>Asignar</th>
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
    <script>
        $(document).ready(function() {

            $.ajax({
                url: "preuplist",
                method: "GET",
                dataType: "JSON",
                data: {},
                success: function(data) {

                    var table =  $('#prealtatabla').DataTable({
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
                        boton = '<button class="btn btn-info" onClick="asignation(\'' + val
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
                            val.application_date,
                            val.recrutier,
                            boton
                        ]).draw().node();


                    });

                },
                error: function(xhr, status, error) {
                    console.log(error); // Muestra cualquier error en la consola para depuración
                }
            });


        });

        function asignation(id, completeName) {

            warningMessage = '<p>' + completeName + '</p>';


            Swal.fire({
                title: '¡Se realizará la la siguiente de la siguiente persona!',
                html: warningMessage,
                showDenyButton: true,
                confirmButtonText: 'Enviar',
                denyButtonText: `No enviar`,
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Alta realizada correctamente'
                    });
                } else if (result.isDenied) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'No se realiza alta'
                    });
                }
            })



        }
    </script>
@stop
