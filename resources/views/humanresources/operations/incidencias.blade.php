@extends('adminlte::page')

@section('title', 'Incidencias')

@section('content_header')
    <h1>Incidencias</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h1 class="card-title">Apartado para generar incidencias por archivo</h1>
        </div>

        <div class="card-body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#activosmodal">Ver
                Activos</button>
            <div class="row">
                <div class="col">
                    <h4>ED</h4>
                    <form id="form_ed">
                        <div class="input-group mb-3">
                            <div class="custom-file" style="display: contents;">
                                <input type="file" class="custom-file-input" id="exceled" accept=".xlsx, .xls">
                                <label class="cfp custom-file-label-ed" for="exceled">Seleccionar archivo...</label>

                            </div>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <h4>BG</h4>
                    <form id="form_bg">
                        <div class="input-group mb-3">
                            <div class="custom-file" style=" display: contents;">
                                <input type="file" class="custom-file-input" id="excelbg" accept=".xlsx, .xls">
                                <label class="cfp custom-file-label-bg" for="excelbg">Seleccionar archivo...</label>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col">
                    <h4>YOBEL</h4>
                    _<form id="form_yobel">
                        <div class="input-group mb-3">
                            <div class="custom-file" style=" display: contents;">
                                <input type="file" class="custom-file-input" id="excelyobel" accept=".xlsx, .xls">
                                <label class="cfp custom-file-label-yobel" for="excelyobel">Seleccionar archivo...</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="p-2 m-2">
                <button class="btn btn-primary" onclick="generarIncidencias()">Generar incidencias</button>
            </div>

        </div>

        <div class="p-3">
            <table id="miTabla" class="table table-striped table-bordered" style="width:100%; ">
                <thead>
                    <tr>
                        <th>Cuenta</th>
                        <th>ID de Usuario</th>
                        <th>Nombre</th>
                        <th>Entrada</th>
                        <th>Retardos</th>
                        <th>Salida</th>
                        <th>Horas Trabajadas</th>
                        <th>Tiempo Extra</th>
                        <th>Hora fin</th>
                        <th>Horas Extra</th>
                        <th>Fecha</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Los datos se insertarán aquí dinámicamente -->
                </tbody>
            </table>
        </div>




    </div>

    <div class="modal fade" id="activosmodal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="width: 130%">
                <!-- Cabecera del Modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Activos</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Contenido del Modal -->
                <div class="modal-body modalAnexo">
                    <div class="p-3">
                        <table id="tablahistoricopromecap" class="table table-striped table-bordered" style="width:100%; ">
                            <thead>
                                <tr>
                                    <th>ID Empleado</th>
                                    <th>Nombre</th>
                                    <th>Entrada_LV</th>
                                    <th>Salida_LV</th>
                                    <th>Horas_LV</th>
                                    <th>Entrada_S</th>
                                    <th>Salida_S</th>
                                    <th>Horas_S</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Los datos se insertarán aquí dinámicamente -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Pie del Modal -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
@stop

@section('css')

    <style>
        .col {
            text-align: center;
            /* Centra el contenido de cada columna */
        }

        .col form {
            display: inline-block;
            /* Hace que los formularios se muestren en línea uno al lado del otro */
            margin-top: 10px;
            /* Espacio superior entre h4 y el formulario */
        }

        .form-style {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .tabpre {
            width: auto;
            overflow-x: auto;
        }

        .cfp {
            text-decoration: underline;
            cursor: pointer;
        }
    </style>
@stop

@section('js')
    <!-- Incluir Buttons -->
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.3/xlsx.full.min.js"></script>
    <script>
        $(document).ready(function() {
            var listaactivos;
            // SECCION ED
            var form_ed = document.getElementById('form_ed');
            var fileInput_ed = document.getElementById('exceled');
            var fileInputLabel_ed = document.querySelector('.custom-file-label-ed');
            // SECCION BG
            var form_bg = document.getElementById('form_bg');
            var fileInput_bg = document.getElementById('excelbg');
            var fileInputLabel_bg = document.querySelector('.custom-file-label-bg');
            // SECCION YOBEL
            var form_yobel = document.getElementById('form_yobel');
            var fileInput_yobel = document.getElementById('excelyobel');
            var fileInputLabel_yobel = document.querySelector('.custom-file-label-yobel');

            cargar_ed(form_ed, fileInput_ed, fileInputLabel_ed);
            cargar_bg(form_bg, fileInput_bg, fileInputLabel_bg);
            cargar_yobel(form_yobel, fileInput_yobel, fileInputLabel_yobel);

            traeractivos();

        });


        async function generarIncidencias() {
            var datosbg = [];
            var datosed = [];
            var datosyobel = [];
            var form_ed = document.getElementById('form_ed');
            var fileInput_ed = document.getElementById('exceled');
            var fileInputLabel_ed = document.querySelector('.custom-file-label-ed');
            // SECCION BG
            var form_bg = document.getElementById('form_bg');
            var fileInput_bg = document.getElementById('excelbg');
            var fileInputLabel_bg = document.querySelector('.custom-file-label-bg');
            // SECCION YOBEL
            var form_yobel = document.getElementById('form_yobel');
            var fileInput_yobel = document.getElementById('excelyobel');
            var fileInputLabel_yobel = document.querySelector('.custom-file-label-yobel');

            const filebg = fileInput_bg.files[0];
            const fileed = fileInput_ed.files[0];
            const fileyobel = fileInput_yobel.files[0];

            if (filebg == undefined && fileed == undefined && fileyobel == undefined) {
                Swal.fire({
                    icon: 'error',
                    title: 'No se ha seleccionado ningún archivo',
                });
            } else {
                // SECCION DE BG
                datosbg = await generardatabg(filebg);
                // SECCION ED
                datosed = await generardata(fileed, "ed");
                //SECCION YOBEL
                datosyobel = await generardata(fileyobel, "yobel");

                const dataincidencias = [
                    ...datosbg,
                    ...datosed,
                    ...datosyobel
                ];

                dataincidencias.forEach(element => {
                    // horario = listaactivos[element.["ID de Usuario"]];
                    id = parseInt(element["ID de Usuario"]);
                    const horario = listaactivos.filter((elemento) => elemento.id_empleado === id);
                    diaSemana = obtenerDiaSemana(element.Fecha);
                    if (diaSemana === "Sábado") {

                    } else {

                    }
                });

                // Se crea la tabla
                creartabla(dataincidencias);
            }
        }

        function obtenerDiaSemana(fechaStr) {
            // Dividir la cadena en día, mes y año
            const partes = fechaStr.split("-");

            // Crear un objeto de fecha
            const fecha = new Date(partes[2], partes[1] - 1, partes[0]);

            // Días de la semana en texto
            const diasSemana = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];

            // Obtener el día de la semana como texto
            const diaSemanaTexto = diasSemana[fecha.getDay()];

            return diaSemanaTexto;
        }

        function convertirCadenaAFecha(fechaString) {
            const partes = fechaString.split(/[\s/:]+/);
            const dia = parseInt(partes[0], 10);
            const mes = parseInt(partes[1], 10) - 1;
            const anio = parseInt(partes[2], 10);
            const hora = parseInt(partes[3], 10);
            const minutos = parseInt(partes[4], 10);
            const segundos = parseInt(partes[5], 10);
            const ampm = partes[6];

            if (ampm === "p. m." && hora < 12) {
                hora += 12;
            }

            return new Date(anio, mes, dia, hora, minutos, segundos);
        }

        async function generardata(file, tipo) {
            return new Promise((resolve, reject) => {
                if (!file) {
                    resolve([]); // Si no hay archivo, resolvemos con un arreglo vacío
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    const d = e.target.result;
                    const workbook = XLSX.read(d, {
                        type: 'binary'
                    });
                    const sheetName = workbook.SheetNames[0]; // Nombre de la primera hoja
                    const worksheet = workbook.Sheets[sheetName];

                    const originalData = XLSX.utils.sheet_to_json(worksheet);

                    // Ordenar los registros por fecha y hora
                    originalData.sort((a, b) => {
                        return new Date(a.Tiempo) - new Date(b.Tiempo);
                    });

                    // Objeto para almacenar los registros agrupados
                    const groupedData = {};

                    // Recorrer los registros y agrupar por fecha e ID de Usuario
                    originalData.forEach((registro) => {
                        const fecha = registro.Tiempo.split(' ')[0];
                        const numero = registro["Número"];

                        if (!groupedData[fecha]) {
                            groupedData[fecha] = {};
                        }

                        if (!groupedData[fecha][numero]) {
                            groupedData[fecha][numero] = {
                                "ID de Usuario": numero,
                                Nombre: registro.Nombre,
                                Fecha: fecha,
                                Entrada: registro.Tiempo,
                                Salida: registro.Tiempo,
                                Horafin:null,
                                HorasTrabajadas: 0,
                                TiempoExtra: false,
                                Cuenta:null,
                                Retardo: false
                            };
                        } else {
                            groupedData[fecha][numero].Salida = registro.Tiempo;
                        }
                    });

                    // Calcular las horas trabajadas, tiempo extra y retardos
                    Object.keys(groupedData).forEach((fecha) => {
                        Object.keys(groupedData[fecha]).forEach((idUsuario) => {
                            const registro = groupedData[fecha][idUsuario];
                            const entrada = convertirCadenaAFecha(registro.Entrada);
                            const salida = convertirCadenaAFecha(registro.Salida);
                            const horasTrabajadas = (salida - entrada) / (1000 * 60 * 60);
                            registro.HorasTrabajadas = convertirHorasAHMS(horasTrabajadas);
                            const id = parseInt(idUsuario);
                            const horario = listaactivos.find((elemento) => elemento
                                .id_empleado === id);


                            if (horario) {
                                registro.Nombre = horario.nombre;
                                registro.Horafin=horario.salida_lv;
                                registro.Cuenta= tipo;
                                const diaSemana = obtenerDiaSemana(fecha);
                                let r = false; // Inicializa r como falso

                                if (diaSemana === "Sábado") {
                                    // SOLO SABADO
                                    if (tipo == "yobel") {
                                        if (horario.entrada_s === null) {
                                            r = validarEntrada(registro.Entrada.substr(11,
                                                8), horario.entrada_lv, id);
                                        } else {
                                            r = validarEntrada(registro.Entrada.substr(11,
                                                8), horario.entrada_s, id);
                                        }
                                    } else {
                                        //CASO ED
                                        if (horario.entrada_s === null) {
                                            //valida entrada
                                            r = validarEntrada(registro.Entrada.substr(11,
                                                8), horario.entrada_lv, id);
                                            // Valida horas extra
                                        } else {
                                            // Valida entrada
                                            ent = sumarminutos(horario.entrada_lv, 10);
                                            r = validarEntrada(registro.Entrada.substr(11,
                                                8), ent, id);
                                        }
                                    }
                                    // Validar horas extra
                                    if (id == 11446) {
                                        console.log("text");
                                    }
                                    sal = sumarminutos(horario.salida_lv, 45);
                                    registroSalida = obtenerHoraEnFormato(salida);
                                    tex = validarEntrada(registroSalida, sal, id);

                                    if (tex) {
                                        t = obtenertextra(registroSalida, sal);
                                        registro.TiempoExtra = true;
                                        registro.HorasExtra = t;
                                    } else {
                                        registro.HorasExtra = '00:00:00';
                                    }

                                } else {
                                    // DE LUNES A VIERNES
                                    if (tipo == "yobel") {
                                        r = validarEntrada(registro.Entrada.substr(11, 8),
                                            horario.entrada_lv, id);
                                    } else {
                                        ent = sumarminutos(horario.entrada_lv, 10);
                                        r = validarEntrada(registro.Entrada.substr(11, 8),
                                            ent, id);

                                    }

                                    // Validar horas extra
                                    if (id == 11446) {
                                        console.log("text");
                                    }
                                    sal = sumarminutos(horario.salida_lv, 45);
                                    registroSalida = obtenerHoraEnFormato(salida);
                                    tex = validarEntrada(registroSalida, sal, id);

                                    if (tex) {
                                        t = obtenertextra(registroSalida, sal);
                                        registro.TiempoExtra = true;
                                        registro.HorasExtra = t;
                                    } else {
                                        registro.HorasExtra = '00:00:00';
                                    }

                                }

                                // Asigna el resultado a registro.Retardo
                                registro.Retardo = r;
                            } else {
                                registro.Cuenta= "No Activo";
                                registro.TiempoExtra = false;
                                registro.HorasExtra = "-";
                                // Si no se encuentra el horario, asigna Retardo como falso
                                registro.Retardo = false;
                            }
                        });
                    });

                    // Convertir el objeto agrupado en un array
                    const finalData = [];
                    Object.keys(groupedData).forEach((fecha) => {
                        Object.keys(groupedData[fecha]).forEach((idUsuario) => {
                            finalData.push(groupedData[fecha][idUsuario]);
                        });
                    });
                    const filteredData = finalData.filter((registro) => registro["ID de Usuario"] !==
                        undefined);

                    // Cuando los datos estén listos, resolvemos la Promesa con filteredData
                    resolve(filteredData);
                };

                reader.onerror = function(e) {
                    reject(e); // En caso de error, rechazamos la Promesa
                };

                reader.readAsBinaryString(file);
            });
        }

        function convertirCadenaAFecha(fechaStr) {
            const partes = fechaStr.split(' '); // Dividir la cadena en fecha y hora

            if (partes.length !== 3) {
                // Verificar si la cadena tiene el formato esperado
                return null; // Devolver null si el formato no es válido
            }

            const fechaParte = partes[0];
            const horaParte = partes[1];
            const amPmParte = partes[2];

            const [dia, mes, año] = fechaParte.split('/');
            let [hora, minutos] = horaParte.split(':');

            // Ajustar la hora si es PM
            if (amPmParte === 'p. m.') {
                hora = parseInt(hora, 10) + 12;
            }

            // Crear un objeto Date
            const fechaHora = new Date(año, mes - 1, dia, hora, minutos);

            return fechaHora;
        }

        function convertirCadenaAFecha(fechaString) {
            const partes = fechaString.split(/[\s/:]+/);
            const dia = parseInt(partes[0], 10);
            const mes = parseInt(partes[1], 10) - 1;
            const anio = parseInt(partes[2], 10);
            var hora = parseInt(partes[3], 10);
            const minutos = parseInt(partes[4], 10);
            const segundos = parseInt(partes[5], 10);
            const ampm = fechaString.substr(20, 25);

            if (ampm === "p. m." && hora < 12) {
                hora += 12;
            }

            return new Date(anio, mes, dia, hora, minutos, segundos);
        }

        async function generardatabg(file) {
            return new Promise((resolve, reject) => {
                if (!file) {
                    resolve([]); // Si no hay archivo, resolvemos con un arreglo vacío
                    return;
                }

                const reader = new FileReader();

                reader.onload = function(e) {
                    const d = e.target.result;
                    const workbook = XLSX.read(d, {
                        type: 'binary'
                    });
                    const sheetName = workbook.SheetNames[0]; // Nombre de la primera hoja
                    const worksheet = workbook.Sheets[sheetName];

                    const originalData = XLSX.utils.sheet_to_json(worksheet);

                    // Ordenar los registros por fecha y hora
                    originalData.sort((a, b) => {
                        return new Date(a.Tiempo) - new Date(b.Tiempo);
                    });

                    // Objeto para almacenar los registros agrupados
                    const groupedData = {};

                    // Recorrer los registros y agrupar por fecha e ID de Usuario
                    originalData.forEach((registro) => {
                        const fecha = registro.Tiempo.split(' ')[0];
                        const idUsuario = registro["ID de Usuario"];

                        if (!groupedData[fecha]) {
                            groupedData[fecha] = {};
                        }

                        if (!groupedData[fecha][idUsuario]) {
                            groupedData[fecha][idUsuario] = {
                                "ID de Usuario": numero,
                                Nombre: registro.Nombre,
                                Fecha: fecha,
                                Entrada: registro.Tiempo,
                                Salida: registro.Tiempo,
                                Horafin:null,
                                HorasTrabajadas: 0,
                                TiempoExtra: false,
                                Cuenta:null,
                                Retardo: false
                            };
                        } else {
                            groupedData[fecha][idUsuario].Salida = registro.Tiempo;
                        }
                    });


                    // Calcular las horas trabajadas, tiempo extra y retardos
                    Object.keys(groupedData).forEach((fecha) => {
                        Object.keys(groupedData[fecha]).forEach((idUsuario) => {
                            const registro = groupedData[fecha][idUsuario];
                            const entrada = new Date(registro.Entrada);
                            const salida = new Date(registro.Salida);
                            const horasTrabajadas = (salida - entrada) / (1000 * 60 * 60);

                            const id = parseInt(idUsuario);

                            // Utiliza .find() en lugar de .filter() para encontrar el horario correspondiente
                            const horario = listaactivos.find((elemento) => elemento
                                .id_empleado === id);
                            registro.HorasTrabajadas = convertirHorasAHMS(horasTrabajadas);

                            // Evita comparar con 'undefined' y agrega un chequeo de nulidad
                            if (horario) {
                                registro.Nombre = horario.nombre;
                                registro.Horafin=horario.salida_lv;
                                registro.Cuenta= "bg";
                                const diaSemana = obtenerDiaSemana(fecha);
                                let r = false; // Inicializa r como falso

                                if (diaSemana === "Sábado") {
                                    if (horario.entrada_s === null) {
                                        r = validarEntrada(registro.Entrada.substr(11, 8),
                                            horario.entrada_lv, id);
                                    } else {
                                        r = validarEntrada(registro.Entrada.substr(11, 8),
                                            horario.entrada_s, id);
                                    }
                                } else {
                                    r = validarEntrada(registro.Entrada.substr(11, 8),
                                        horario.entrada_lv, id);
                                }

                                // Asigna el resultado a registro.Retardo
                                registro.Retardo = r;
                            } else {
                                // Si no se encuentra el horario, asigna Retardo como falso
                                registro.Cuenta= "No Activo";
                                registro.Retardo = false;
                            }
                        });
                    });


                    // Convertir el objeto agrupado en un array
                    const finalData = [];
                    Object.keys(groupedData).forEach((fecha) => {
                        Object.keys(groupedData[fecha]).forEach((idUsuario) => {
                            finalData.push(groupedData[fecha][idUsuario]);
                        });
                    });
                    const filteredData = finalData.filter((registro) => registro["ID de Usuario"] !==
                        undefined);

                    // Resolvemos la Promesa con filteredData
                    resolve(filteredData);
                };

                reader.onerror = function(e) {
                    reject(e); // En caso de error, rechazamos la Promesa
                };

                reader.readAsBinaryString(file);
            });
        }

        function validarEntrada(hora1, hora2, id) {
            try {
                const [horas1, minutos1, segundos1] = hora1.split(':').map(Number);
                const [horas2, minutos2, segundos2] = hora2.split(':').map(Number);

                if (horas1 < horas2 || (horas1 === horas2 && minutos1 < minutos2) || (horas1 === horas2 && minutos1 ===
                        minutos2 && segundos1 < segundos2)) {
                    return false; // La hora1 es menor que hora2
                } else {
                    return true; // La hora1 es mayor o igual que hora2
                }
            } catch (error) {
                console.log(error);
            }



        }

        function creartabla(data) {
            $('#miTabla').DataTable({
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
                    "sEmptyTable": "No se encontraron registros",
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
                    'excel'
                ],
                destroy: true,
                processing: true,
                sort: true,
                paging: true,
                data: data,
                columns: [
                    { data: 'Cuenta' },
                    { data: 'ID de Usuario' },
                    { data: 'Nombre' },
                    { data: 'Entrada' },
                    { data: 'Retardo' },
                    { data: 'Salida' },
                    { data: 'HorasTrabajadas' },
                    { data: 'TiempoExtra' },
                    { data: 'Horafin' },
                    { data: 'HorasExtra' },
                    { data: 'Fecha' }
                ]
            });
        }

        function obtenertextra(hora1, hora2) {
            // Parsea las horas, minutos y segundos de ambas cadenas de tiempo
            const [h1, m1, s1] = hora1.split(':').map(Number);
            const [h2, m2, s2] = hora2.split(':').map(Number);

            // Realiza la resta de los segundos, minutos y horas
            let segundos = s1 - s2;
            let minutos = m1 - m2;
            let horas = h1 - h2;

            // Manejo de acarreo de los componentes
            if (segundos < 0) {
                segundos += 60;
                minutos--;
            }
            if (minutos < 0) {
                minutos += 60;
                horas--;
            }
            if (horas < 0) {
                horas += 24; // Suponiendo que las horas son en formato de 24 horas
            }

            // Formatea el resultado en el formato HH:MM:SS
            const resultado =
                `${horas.toString().padStart(2, '0')}:${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;

            return resultado;
        }

        function restarHoras(tiempoOriginal, horasARestar) {
            // Separar las horas, minutos y segundos
            const partes = tiempoOriginal.split(':');
            const horas = parseInt(partes[0], 10);
            const minutos = parseInt(partes[1], 10);
            const segundos = parseInt(partes[2], 10);

            // Restar las horas especificadas
            const nuevasHoras = horas - horasARestar;

            // Asegurarse de que las horas no sean negativas
            const horasRestantes = nuevasHoras >= 0 ? nuevasHoras : 0;

            // Crear una cadena en formato 'HH:MM:SS' para el resultado
            return `${horasRestantes.toString().padStart(2, '0')}:${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;
        }

        function obtenerHoraEnFormato(fecha) {
            var horas = fecha.getHours();
            var minutos = fecha.getMinutes();
            var segundos = fecha.getSeconds();

            var formatoHora =
                `${horas.toString().padStart(2, '0')}:${minutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;

            return formatoHora;
        }


        function sumarminutos(tiempoOriginal, minutossumar) {
            // Separar las horas, minutos y segundos
            const partes = tiempoOriginal.split(':');
            const horas = parseInt(partes[0], 10);
            const minutos = parseInt(partes[1], 10);
            const segundos = parseInt(partes[2], 10);

            // Restar las horas especificadas
            const nuevosMinutos = minutos + minutossumar;

            // Crear una cadena en formato 'HH:MM:SS' para el resultado
            return `${horas.toString().padStart(2, '0')}:${nuevosMinutos.toString().padStart(2, '0')}:${segundos.toString().padStart(2, '0')}`;
        }

        function convertirHorasAHMS(horas) {
            const signo = horas < 0 ? "-" : "";
            horas = Math.abs(horas);

            const horasInt = Math.floor(horas);
            const minutos = Math.floor((horas - horasInt) * 60);
            const segundos = Math.floor(((horas - horasInt) * 60 - minutos) * 60);

            const horasStr = horasInt.toString().padStart(2, "0");
            const minutosStr = minutos.toString().padStart(2, "0");
            const segundosStr = segundos.toString().padStart(2, "0");

            return `${signo}${horasStr}:${minutosStr}:${segundosStr}`;
        }

        function cargar_ed(form_ed, fileInput_ed, fileInputLabel_ed) {

            // Actualizar la etiqueta del archivo seleccionado
            fileInput_ed.addEventListener('change', () => {
                name = fileInput_ed.files[0]?.name;
                if (name.substring(name.length - 3, name.length) == 'xls' || name.substring(name.length - 4,
                        name
                        .length) == 'xlsx') {
                    fileInputLabel_ed.textContent = fileInput_ed.files[0]?.name ||
                        'Seleccionar archivo';
                } else {
                    fileInput_ed.value = "";
                    Swal.fire({
                        icon: 'error',
                        title: 'El archivo no es un excel',
                    });

                }
            });
        }

        function cargar_bg(form_bg, fileInput_bg, fileInputLabel_bg) {

            // Actualizar la etiqueta del archivo seleccionado
            fileInput_bg.addEventListener('change', () => {
                name = fileInput_bg.files[0]?.name;
                if (name.substring(name.length - 3, name.length) == 'xls' || name.substring(name.length - 4,
                        name
                        .length) == 'xlsx') {
                    fileInputLabel_bg.textContent = fileInput_bg.files[0]?.name ||
                        'Seleccionar archivo';
                } else {
                    fileInput_bg.value = "";
                    Swal.fire({
                        icon: 'error',
                        title: 'El archivo no es un excel',
                    });

                }
            });
        }

        function cargar_yobel(form_yobel, fileInput_yobel, fileInputLabel_yobel) {

            // Actualizar la etiqueta del archivo seleccionado
            fileInput_yobel.addEventListener('change', () => {
                name = fileInput_yobel.files[0]?.name;
                if (name.substring(name.length - 3, name.length) == 'xls' || name.substring(name.length - 4,
                        name
                        .length) == 'xlsx') {
                    fileInputLabel_yobel.textContent = fileInput_yobel.files[0]?.name ||
                        'Seleccionar archivo';
                } else {
                    fileInput_yobel.value = "";
                    Swal.fire({
                        icon: 'error',
                        title: 'El archivo no es un excel',
                    });

                }
            });
        }

        function traeractivos() {
            $.ajax({
                url: "horariosempleados",
                method: "GET",
                dataType: "JSON",
                data: {
                    /* date: dateVal */
                },
                success: function(aforocalcpromecap) {
                    listaactivos = aforocalcpromecap;
                    $('#tablahistoricopromecap').DataTable({
                        destroy: true,
                        scrollCollapse: true,
                        language: {
                            "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json",
                            "lengthMenu": "Mostrar los _MENU_ registros",
                            "zeroRecords": "No existe ese registro",
                            "info": "Mostrar página _PAGE_ de _PAGES_",
                            "infoEmpty": "No encontrado",
                            "infoFiltered": "(filtrado de _MAX_ registros en total)",
                            "sSearch": "Buscar:",
                            "sEmptyTable": "No se encontraron registros",
                            "sLoadingRecords": "Cargando...",
                            "oPaginate": {
                                "sFirst": "Primero",
                                "sLast": "Último",
                                "sNext": "Siguiente",
                                "sPrevious": "Anterior"
                            }
                        },
                        dom: 'Blfrtip',
                        buttons: [],
                        destroy: true,
                        processing: true,
                        sort: true,
                        paging: true,
                        autoWidth: true,
                        data: aforocalcpromecap,
                        columns: [{
                                data: 'id_empleado'
                            },
                            {
                                data: 'nombre'
                            },
                            {
                                data: 'entrada_lv'
                            },
                            {
                                data: 'salida_lv'
                            },
                            {
                                data: 'horas_lv'
                            },
                            {
                                data: 'entrada_s'
                            },
                            {
                                data: 'salida_s'
                            },
                            {
                                data: 'horas_s'
                            }
                        ]
                    });
                }
            });
        }
    </script>
@stop
