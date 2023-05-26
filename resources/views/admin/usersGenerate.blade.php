@php($register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register'))
@extends('adminlte::page')

@section('title', 'Generar usuario')

@section('content_header')
    <h1>Modulo para generar usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">En este panel podrás crear el usuario que necesites</h1>
        </div>
        <div class="card-body">

            <!-- Modal -->
            <div class="modal fade" id="modalCrearUsuarios" tabindex="-1" aria-labelledby="modalCrearUsuariosLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCrearUsuariosLabel">Generar Usuario</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <div class="form-row">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="name" name="name" required>
                            </div>

                            <div class="form-row">
                                <label for="nombre">Apellido Paterno:</label>
                                <input type="text" id="lastname" name="lastname" required>
                            </div>

                            <div class="form-row">
                                <label for="nombre">Apellido Materno:</label>
                                <input type="text" id="seccondlastname" name="seccondlastname" required>
                            </div>

                            <div class="form-row">
                                <label for="area">Área:</label>
                                <select id="area" name="area" required class="form-select">
                                    <option value="1">Administración</option>
                                    <option value="2">Almacén</option>
                                    <option value="3">Cash Flow </option>
                                    <option value="4">Comunicación</option>
                                    <option value="5">Desarrollo Organizacional</option>
                                    <option value="6">Nómina</option>
                                    <option value="7">Super Administrador</option>
                                </select>
                            </div>

                            <div class="form-row">
                                <label for="email">Correo electrónico:</label>
                                <input type="text" id="email" name="email" required>
                            </div>

                            <div class="form-row">
                                <div class="password-input-container">
                                    <label for="password">Contraseña:</label>
                                    <input type="password" id="password" name="password" required>
                                    <button type="button" id="toggleButton" class="password-toggle-btn"
                                        onclick="togglePasswordVisibility()">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>


                            <button type="button" class="btn btn-primary">Generar usuario</button>
                        </div>
                    </div>
                </div>
            </div>

            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCrearUsuarios">
                Abrir Generar Usuario
            </button>
            <br>
            <h2> Tabla de usuarios</h2>
            <table id="tablaUsuarios">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo Electrónico</th>
                        <th>Área</th>
                        <th>Editar datos</th>
                        <th>Editar permisos</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>John</td>
                        <td>Doe</td>
                        <td>Smith</td>
                        <td>johndoe@example.com</td>
                        <td>Administración</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#editModal">Editar datos</button></td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#editPermissionsModal">Editar Permisos</button></td>
                        <td><button class="btn btn-danger delete-button" data-id="1">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>Jane</td>
                        <td>Smith</td>
                        <td>Doe</td>
                        <td>janesmith@example.com</td>
                        <td>Desarrollo Organizacional</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#editModal">Editar datos</button></td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#editPermissionsModal">Editar Permisos</button></td>
                        <td><button class="btn btn-danger delete-button" data-id="1">Eliminar</button></td>
                    </tr>
                    <tr>
                        <td>Robert</td>
                        <td>Johnson</td>
                        <td>Davis</td>
                        <td>robertjohnson@example.com</td>
                        <td>Sistemas</td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#editModal">Editar datos</button></td>
                        <td><button class="btn btn-primary" data-toggle="modal" data-target="#editPermissionsModal">Editar Permisos</button>                        </td>
                        <td><button class="btn btn-danger delete-button" data-id="1">Eliminar</button></td>
                    </tr>
                </tbody>
            </table>


            <!-- Modal edit -->
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Editar Usuario</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre"><br><br>
                                <label for="apellidoPaterno">Apellido Paterno:</label>
                                <input type="text" id="apellidoPaterno" name="apellidoPaterno"><br><br>
                                <label for="apellidoMaterno">Apellido Materno:</label>
                                <input type="text" id="apellidoMaterno" name="apellidoMaterno"><br><br>
                                <label for="correo">Correo Electrónico:</label>
                                <input type="text" id="correo" name="correo"><br><br>
                                <div class="form-row">
                                    <label for="area">Área:</label>
                                    <select id="area" name="area" required class="form-select">
                                        <option value="1">Administración</option>
                                        <option value="2">Almacén</option>
                                        <option value="3">Cash Flow </option>
                                        <option value="4">Comunicación</option>
                                        <option value="5">Desarrollo Organizacional</option>
                                        <option value="6">Nómina</option>
                                        <option value="7">Super Administrador</option>
                                    </select>
                                </div>
                                <div class="form-row">
                                    <div class="password-input-container">
                                        <label for="password">Contraseña:</label>
                                        <input type="password" id="password" name="password" required>
                                        <button type="button" id="toggleButton" class="password-toggle-btn"
                                            onclick="togglePasswordVisibility()">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Guardar Cambios</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal Permissions -->
            <div class="modal fade" id="editPermissionsModal" tabindex="-1" role="dialog" aria-labelledby="editPermissionsModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-xl" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editPermissionsModalLabel">Editar Permisos</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <h2>Área de Sistemas</h2>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="gestion_usuarios">
                                  Tickets
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="configuracion_sistema">
                                  Calendario
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="respaldo_informacion">
                                  Bitacora de temperaturas
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="respaldo_informacion">
                                  Consulta MOPER
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="respaldo_informacion">
                                  Generación de documentos
                                </label><br>

                                <h2>Área de Desarrollo Organizacional</h2>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="capacitacion_personal">
                                  Capacitación del Personal
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="evaluacion_desempeno">
                                  Evaluación de Desempeño
                                </label><br>

                                <h2>Área de Nóminas</h2>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="generar_nomina">
                                  Generar Nómina
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="ajustes_salarios">
                                  Ajustes de Salarios
                                </label><br>

                                <h2>Área de Cash Flow</h2>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="autorizar_pagos">
                                  Autorizar Pagos
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="control_gastos">
                                  Control de Gastos
                                </label><br>

                                <h2>Área de Comunicación</h2>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="crear_publicaciones">
                                  Crear Publicaciones
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="enviar_mensajes">
                                  Enviar Mensajes
                                </label><br>

                                <h2>Área de Administración</h2>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="aprobar_presupuestos">
                                  Aprobar Presupuestos
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="administrar_recursos">
                                  Administrar Recursos
                                </label><br>

                                <h2>Área de Almacén</h2>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="control_inventario">
                                  Control de Inventario
                                </label><br>
                                <label>
                                  <input type="checkbox" name="permisos[]" value="gestion_proveedores">
                                  Gestión de Proveedores
                                </label><br>

                                <br>
                              </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary">Guardar Permisos</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>

    </div>
@stop

@section('css')

    <style>
        .password-input-container {
            position: relative;
            display: inline-block;
        }

        .password-toggle-btn {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            background-color: transparent;
            border: none;
            cursor: pointer;
        }

        .form-row {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .form-row label {
            width: 150px;
            text-align: right;
            margin-right: 10px;
        }


        #tablaUsuarios {
            width: 100%;
        }
    </style>
@stop

@section('js')

    <script>
        $(document).ready(function() {
            pass = generarpassword();
            $("#password").val(pass);
            $('#tablaUsuarios').DataTable();
            $('select[name="tablaUsuarios_length"]').css('padding-right', '1.5rem');


            $('.delete-button').on('click', function() {
                var id = $(this).data('id');

                Swal.fire({
                    title: '¿Estás seguro?',
                    text: 'Esta acción no se puede deshacer',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Aquí puedes realizar la acción de eliminación utilizando AJAX o enviar una solicitud al servidor
                        // Para este ejemplo, mostraremos un mensaje de éxito después de 1 segundo
                        setTimeout(function() {
                            Swal.fire(
                                'Eliminado',
                                'El registro ha sido eliminado.',
                                'success'
                            );
                        }, 1000);
                    }
                });
            });


        });


        function togglePasswordVisibility() {
            var passwordInput = document.getElementById("password");
            var toggleButton = document.getElementById("toggleButton");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>';
            } else {
                passwordInput.type = "password";
                toggleButton.innerHTML = '<i class="fas fa-eye"></i>';
            }
        }

        function generarpassword() {
            var caracteres = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()';
            var password = '';

            for (var i = 0; i < 8; i++) {
                var indice = Math.floor(Math.random() * caracteres.length);
                password += caracteres.charAt(indice);
            }

            return password;
        }
    </script>

@stop
