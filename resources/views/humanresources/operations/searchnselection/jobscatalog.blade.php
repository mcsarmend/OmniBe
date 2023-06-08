@extends('adminlte::page')

@section('title', 'Catalogo de puestos')

@section('content_header')
    <h1>Catalogo de puestos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Aqui se verán las descripciones de puesto</h1>
        </div>
        <div class="card-body">
            <table id="tablapuestos" class="table table-hover" style="">
                <thead>
                    <tr>
                        <th>Codigonomina</th>
                        <th>Nombre</th>
                        <th>Abreviatura</th>
                        <th>Cuenta</th>
                        <th>Abreviatura4</th>
                        <th>Numeracion</th>
                        <th>Codigo interno</th>
                        <th>Detalle</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              </button>
            </div>
            <div class="modal-body">
              ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal" onClick="$('#myModal').modal('hide');">Cerrar</button>
            </div>
          </div>
        </div>
      </div>


@stop

@section('css')
    <style></style>
@stop

@section('js')
    <script>
        $(document).ready(function() {

            $.ajax({
                url: "infostalls",
                method: "GET",
                dataType: "JSON",
                data: {},
                success: function(data) {
                    $('#tablapuestos').DataTable({
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
                        filter: true,
                        data: data,
                        columns: [
                            {title: "codigo_nomina"},
                            {title: "nombre"},
                            {title: "abreviatura"},
                            {title: "cuenta"},
                            {title: "abreviatura4"},
                            {title: "numeracion"},
                            {title: "codigo_interno"},
                            {title: "Acciones",
                                render: function(data, type, row) {
                                    return '<button class="btn btn-info btn-abrir-modal">detalle</button>';
                                }
                            }
                        ]
                    });
                },
                error: function(xhr, status, error) {
                    console.log(error); // Muestra cualquier error en la consola para depuración
                }
            });

            $('#tablapuestos').on('click', '.btn-abrir-modal', function() {
                $('#myModal').modal('show');
            });

        });
    </script>
@stop
