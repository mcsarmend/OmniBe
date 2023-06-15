@extends('adminlte::page')

@section('title', 'Configuraciones')

@section('content_header')

    <h1>Cuestionario para delimitar una Vacante</h1>
@stop
@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="container">
                <div class="progress-bar">
                    <div class="progress"></div>
                </div>

                <form id="form-pasos" style="width: 121%">
                    <fieldset class="paso">
                        <h2 class="">Cuestionario</h2>
                        <label for="fecha_solicitud">Fecha de Solicitud:</label>
                        <input type="date" id="fecha_solicitud" name="fecha_solicitud"
                            class="form-control campo-requerido" readonly>
                        <br>
                        <button type="button" class="siguiente btn btn-primary">Siguiente</button>
                    </fieldset>

                    <fieldset class="paso">
                        <h2>1.- Datos del puesto</h2>
                        <label for="puesto">Puesto Solicitado:</label>
                        <input type="text" id="puesto" name="puesto" class="form-control campo-requerido">

                        <label for="area_departamento">Área / Departamento:</label>
                        <input type="text" id="area_departamento" name="area_departamento"
                            class="form-control campo-requerido">

                        <label for="zona_trabajo">Zona de Trabajo:</label>
                        <input type="text" id="zona_trabajo" name="zona_trabajo" class="form-control campo-requerido">

                        <label for="vacantes">No. de Vacantes:</label>
                        <input type="number" id="vacantes" name="vacantes" class="form-control campo-requerido">

                        <label for="nivel_puesto">Nivel de Puesto:</label>
                        <input type="number" id="nivel_puesto" name="nivel_puesto" class="form-control campo-requerido">
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="input-container">
                                    <input class="form-check-input" type="checkbox" id="gerencia_alto">
                                    <label class="form-check-label" for="check-lunes">Gerencia de alto nivel</label>
                                    <span class="info-span">Son los puestos que están relacionados con la toma de decisiones
                                        y planeación estratégica de la organización</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-container">
                                    <input class="form-check-input" type="checkbox" id="gerencia_medio">
                                    <label class="form-check-label" for="check-lunes">Gerencia de medio nivel</label>
                                    <span class="info-span">Son los puestos que organizan, dirigen, controlan y toman
                                        decisiones para el logro de objetivos de la organización</span>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <div class="input-container">
                                        <input class="form-check-input" type="checkbox" id="mandos_medios">
                                        <label class="form-check-label" for="check-lunes">Mandos medios</label>
                                        <span class="info-span">Son los puestos que están directamente interactuando con los
                                            niveles operativos y tienen la función de administrar y controlar los procesos
                                            de la organización</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="col">
                                    <div class="input-container">
                                        <input class="form-check-input" type="checkbox" id="operativos">
                                        <label class="form-check-label" for="check-lunes">operativos</label>
                                        <span class="info-span">Son los puestos que están directamente relacionados con las
                                            actividades operativas de la organización</span>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <label for="salario">Salario mensual:</label>
                        <input type="text" id="salario" name="salario" class="form-control campo-requerido">

                        <label for="prestaciones">Prestaciones:</label>
                        <input type="text" id="prestaciones" name="prestaciones" class="form-control campo-requerido">

                        <label for="horarios">Horario(s):</label>
                        <div class="row">
                            <div class="col">
                                <input type="time" name="horainicio" class="form-control campo-requerido" min="12:00"
                                    max="18:00" step="600">
                            </div>
                            <div class="col">
                                <input type="time" name="horafin" class="form-control campo-requerido" min="12:00"
                                    max="18:00" step="600">
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check-lunes">
                                    <label class="form-check-label" for="check-lunes">Lunes</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check-martes">
                                    <label class="form-check-label" for="check-martes">Martes</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check-miercoles">
                                    <label class="form-check-label" for="check-miercoles">Miércoles</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check-jueves">
                                    <label class="form-check-label" for="check-jueves">Jueves</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check-viernes">
                                    <label class="form-check-label" for="check-viernes">Viernes</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check-sabado">
                                    <label class="form-check-label" for="check-sabado">Sábado</label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="check-domingo">
                                    <label class="form-check-label" for="check-domingo">Domingo</label>
                                </div>
                            </div>
                        </div>


                        <br>
                        <button type="button" class="anterior btn btn-primary">Anterior</button>
                        <button type="button" class="siguiente btn btn-primary">Siguiente</button>
                    </fieldset>

                    <fieldset class="paso">
                        <h2>2.- Vacante solicitada por:</h2>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="reemplazo_definitivo"
                                name="reemplazo_definitivo">
                            <label class="form-check-label" for="reemplazo_definitivo">Reemplazo Definitivo</label>
                        </div>


                        <select name="" id="" class="form-select">
                            <option value="">Seleccione una opción</option>
                            <option value="">Nueva creación</option>
                            <option value="">Renuncia</option>
                            <option value="">Termino de contrato</option>
                            <option value="">Promoción/Ascenso</option>
                            <option value="">Otro</option>
                        </select>
                        <br>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="reemplazo_temporal"
                                name="reemplazo_temporal">
                            <label class="form-check-label" for="reemplazo_temporal">Reemplazo Temporal</label>
                        </div>

                        <select name="" id="" class="form-select">
                            <option value="">Seleccione una opción</option>
                            <option value="">Permiso del titular</option>
                            <option value="">Incapacidad</option>
                            <option value="">Maternidad</option>
                            <option value="">Incremento de producción</option>
                            <option value="">Otro</option>
                        </select>
                        <br>
                        <button type="button" class="anterior btn btn-primary">Anterior</button>
                        <button type="button" class="siguiente btn btn-primary">Siguiente</button>
                    </fieldset>
                    <fieldset class="paso">
                        <h2>3.- Formación Académica</h2>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="primaria" name="primaria">
                                <label class="form-check-label" for="primaria">Primaria</label>
                            </div>

                            <div class="row formacion-academica">
                                <div class="col">
                                    <label for="carrera_especialidad">Carrera / Especialidad:</label>
                                    <input type="text" id="carrera_especialidad" name="carrera_especialidad"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="institucion_egreso">Institución de Egreso:</label>
                                    <input type="text" id="institucion_egreso" name="institucion_egreso"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="motivo">Motivo:</label>
                                    <input type="text" id="motivo" name="motivo"
                                        class="form-control campo-requerido">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="primaria" name="primaria">
                                <label class="form-check-label" for="primaria">Secundaria</label>
                            </div>

                            <div class="row formacion-academica">
                                <div class="col">
                                    <label for="carrera_especialidad">Carrera / Especialidad:</label>
                                    <input type="text" id="carrera_especialidad" name="carrera_especialidad"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="institucion_egreso">Institución de Egreso:</label>
                                    <input type="text" id="institucion_egreso" name="institucion_egreso"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="motivo">Motivo:</label>
                                    <input type="text" id="motivo" name="motivo"
                                        class="form-control campo-requerido">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="primaria" name="primaria">
                                <label class="form-check-label" for="primaria">Preparatoria</label>
                            </div>

                            <div class="row formacion-academica">
                                <div class="col">
                                    <label for="carrera_especialidad">Carrera / Especialidad:</label>
                                    <input type="text" id="carrera_especialidad" name="carrera_especialidad"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="institucion_egreso">Institución de Egreso:</label>
                                    <input type="text" id="institucion_egreso" name="institucion_egreso"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="motivo">Motivo:</label>
                                    <input type="text" id="motivo" name="motivo"
                                        class="form-control campo-requerido">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="primaria" name="primaria"
                                    class="form-control campo-requerido">
                                <label class="form-check-label" for="primaria">Licenciatura</label>
                            </div>

                            <div class="row formacion-academica">
                                <div class="col">
                                    <label for="carrera_especialidad">Carrera / Especialidad:</label>
                                    <input type="text" id="carrera_especialidad" name="carrera_especialidad"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="institucion_egreso">Institución de Egreso:</label>
                                    <input type="text" id="institucion_egreso" name="institucion_egreso"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="motivo">Motivo:</label>
                                    <input type="text" id="motivo" name="motivo"
                                        class="form-control campo-requerido">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="primaria" name="primaria">
                                <label class="form-check-label" for="primaria">Maestria</label>
                            </div>

                            <div class="row formacion-academica">
                                <div class="col">
                                    <label for="carrera_especialidad">Carrera / Especialidad:</label>
                                    <input type="text" id="carrera_especialidad" name="carrera_especialidad"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="institucion_egreso">Institución de Egreso:</label>
                                    <input type="text" id="institucion_egreso" name="institucion_egreso"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="motivo">Motivo:</label>
                                    <input type="text" id="motivo" name="motivo"
                                        class="form-control campo-requerido">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="primaria" name="primaria">
                                <label class="form-check-label" for="primaria">Doctorado</label>
                            </div>

                            <div class="row formacion-academica">
                                <div class="col">
                                    <label for="carrera_especialidad">Carrera / Especialidad:</label>
                                    <input type="text" id="carrera_especialidad" name="carrera_especialidad"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="institucion_egreso">Institución de Egreso:</label>
                                    <input type="text" id="institucion_egreso" name="institucion_egreso"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="motivo">Motivo:</label>
                                    <input type="text" id="motivo" name="motivo"
                                        class="form-control campo-requerido">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="primaria" name="primaria">
                                <label class="form-check-label" for="primaria">Otro (Especifique)</label>
                            </div>

                            <div class="row formacion-academica">
                                <div class="col">
                                    <label for="carrera_especialidad">Carrera / Especialidad:</label>
                                    <input type="text" id="carrera_especialidad" name="carrera_especialidad"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="institucion_egreso">Institución de Egreso:</label>
                                    <input type="text" id="institucion_egreso" name="institucion_egreso"
                                        class="form-control campo-requerido">
                                </div>
                                <div class="col">
                                    <label for="motivo">Motivo:</label>
                                    <input type="text" id="motivo" name="motivo"
                                        class="form-control campo-requerido">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="anterior btn btn-primary">Anterior</button>
                        <button type="button" class="siguiente btn btn-primary">Siguiente</button>
                    </fieldset>

                    <fieldset class="paso">
                        <h2>4.- Datos generales</h2>
                        <div class="row">
                            <div class="col">
                                <label for="genero">Género:</label>
                                <select name="" id="" class="form-select">
                                    <option value="">Indistinto</option>
                                    <option value="">Hombre</option>
                                    <option value="">Mujer</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="rango_edad">Rango Edad:</label>
                                <input type="number" id="rango_edad_1" name="rango_edad_1"
                                    class="form-control campo-requerido" min="18" max="99">
                                <input type="number" id="rango_edad_2" name="rango_edad_2"
                                    class="form-control campo-requerido" min="18" max="99">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="estado_civil">Estado Civil:</label>
                                <select name="" id="" class="form-select">
                                    <option value="">Soltero</option>
                                    <option value="">Casado</option>
                                    <option value="">Divorciado</option>
                                    <option value="">Viudo</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="apariencia_importante">¿Considera importante la apariencia del
                                    candidato?</label>
                                <select name="apariencia_importante" id="apariencia_importante" class="form-select">
                                    <option value="">Si</option>
                                    <option value="">No</option>
                                </select>
                            </div>
                            <div class="col">
                                <label for="razon_apariencia">¿Por qué?</label>
                                <textarea id="razon_apariencia" name="razon_apariencia" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>
                        <button type="button" class="anterior btn btn-primary">Anterior</button>
                        <button type="button" class="siguiente btn btn-primary">Siguiente</button>

                    </fieldset>
                    <fieldset class="paso">
                        <h2>5.- Experiencia</h2>
                        <div class="row">
                            <div class="col">
                                <label for="funciones_puesto">Indique las funciones y tiempo de experiencia que debe tener
                                    el candidato</label>
                                <textarea id="funciones_puesto" name="funciones_puesto" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <label for="funciones_puesto">Mencione si requiere que los candidatos provengan de alguna
                                empresa o sector específico</label>
                            <div class="col">
                                <label for="" class="">Sector empresarial</label>
                                <textarea id="sector_empresarial" name="sector_empresarial" class="form-control campo-requerido"></textarea>
                            </div>
                            <div class="col">
                                <label for="" class="">Nombre de la empresa</label>
                                <textarea id="nombre_empresa" name="nombre_empresa" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>
                        <br>
                        <button type="button" class="anterior btn btn-primary">Anterior</button>
                        <button type="button" class="siguiente btn btn-primary">Siguiente</button>
                    </fieldset>
                    <fieldset class="paso">
                        <h2>6.- Habilidades</h2>
                        <h3>Forma de aptitud específica para una actividad puntual sea de indole física, mental o social
                        </h3>
                        <div class="row">
                            <div class="col">
                                <label for="habilidades">Mencione de manera específica las habilidades que debe tener el
                                    candidato (trabajo en equipo, liderazgo, entre otros)</label>
                                <textarea id="habilidades" name="habilidades" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>
                        <button type="button" class="anterior btn btn-primary">Anterior</button>
                        <button type="button" class="siguiente btn btn-primary">Siguiente</button>

                    </fieldset>
                    <fieldset class="paso">
                        <h2>7.- Personalidad</h2>
                        <h3>Conjunto de rasgos emocionales, cognitivos y comportamentales</h3>
                        <div class="row">
                            <div class="col">
                                <label for="caracteristicas_fisicas">Características físicas (talla, altura, tez, entre
                                    otros)</label>
                                <textarea id="caracteristicas_fisicas" name="caracteristicas_fisicas" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="personalidad">Personalidad (proactivo, analítico, creativo, entre
                                    otros)</label>
                                <textarea id="personalidad" name="personalidad" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>



                        <div>
                            <h5>De las 5 fases que se mencionan a continuación, indique cuál de ellas tiene mayor
                                importancia para la vacante solicitada, señalando de mayor a menor (+ 5, 4, 3, 2, 1 -)
                                respectivamente</h5>
                            <div class="row">
                                <div class="col">
                                    <label for="formacion_academica_ord">Formación académica :</label>
                                </div>
                                <div class="col"><input type="number" id="formacion_academica_ord"
                                        name="formacion_academica_ord" class="form-control campo-requerido"
                                        min="1" max="5"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="generales_ord">Generales :</label>
                                </div>
                                <div class="col"><input type="number" id="generales_ord" name="generales_ord"
                                        class="form-control campo-requerido" min="1" max="5"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="experiencia_ord">Experiencia :</label>
                                </div>
                                <div class="col"><input type="number" id="experiencia_ord" name="experiencia_ord"
                                        class="form-control campo-requerido" min="1" max="5"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="habilidades_ord">Habilidades :</label>
                                </div>
                                <div class="col"><input type="number" id="habilidades_ord" name="habilidades_ord"
                                        class="form-control campo-requerido" min="1" max="5"></div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <label for="personalidad_ord">Personalidad :</label>
                                </div>
                                <div class="col"><input type="number" id="personalidad_ord" name="personalidad_ord"
                                        class="form-control campo-requerido" min="1" max="5"></div>
                            </div>
                        </div>

                        <button type="button" class="anterior btn btn-primary">Anterior</button>
                        <button type="button" class="siguiente btn btn-primary">Siguiente</button>

                    </fieldset>
                    <fieldset class="paso">
                        <h2>8.- Requisitos adicionales</h2>
                        <div class="row">
                            <div class="col">
                                <label for="disponibilidad_viajar">Disponibilidad para viajar</label>
                                <Select class="form-select">
                                    <option value="" class="form-control campo-requerido">Si</option>
                                    <option value="" class="form-control campo-requerido">No</option>
                                </Select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="vivir_cerca">Vivir cerca del lugar de trabajo</label>
                                <Select class="form-select">
                                    <option value="" class="form-control campo-requerido">Si</option>
                                    <option value="" class="form-control campo-requerido">No</option>
                                </Select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="idioma_indispensable">Idioma indispensable</label>
                                <textarea id="idioma_indispensable" name="idioma_indispensable" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="idioma_deseado">Idioma deseado</label>
                                <textarea id="idioma_deseado" name="idioma_deseado" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>


                        <button type="button" class="anterior btn btn-primary">Anterior</button>
                        <button type="button" class="siguiente btn btn-primary">Siguiente</button>

                    </fieldset>





                    <fieldset class="paso">
                        <h2>9.- Ultima sección</h2>
                        <br>
                        <div class="row">
                            <div class="col">
                                <label for="solicita">Solicita</label>
                                <textarea id="solicita" name="solicita" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label for="autoriza">Autoriza</label>
                                <textarea id="autoriza" name="autoriza" class="form-control campo-requerido"></textarea>
                            </div>
                        </div>


                        <button type="button" class="anterior btn btn-primary">Anterior</button>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </fieldset>

                </form>
            </div>
        </div>

    </div>
@stop

@section('css')

    <style>
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .progress-bar {
            background-color: #f0f0f0;
            height: 10px;
            margin-bottom: 20px;
            width: 121%;
        }

        .progress {
            background-color: #007bff;
            height: 100%;
            width: 0;
            transition: width 0.3s ease;
        }

        fieldset {
            display: none;
        }

        fieldset.visible {
            display: block;
        }

        button {
            margin-top: 10px;
        }

        button.anterior {
            margin-right: 10px;
        }

        .info-span {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            color: #333;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            z-index: 1;
        }

        .input-container {
            position: relative;
        }

        .input-container:hover .info-span {
            display: block;
        }

        .campo-requerido {
            border-color: red;
        }
    </style>

@stop

@section('js')

    <script>
        $(document).ready(function() {


            var currentDate = new Date().toISOString().split('T')[0];
            $('#fecha_solicitud').val(currentDate);
            var $form = $('#form-pasos');
            var $pasos = $form.find('.paso');
            var currentStep = 0;

            function mostrarPaso(paso) {
                $pasos.removeClass('visible');
                $pasos.eq(paso).addClass('visible');
                var progressWidth = ((paso + 1) / $pasos.length) * 100 + '%';
                $('.progress').css('width', progressWidth);
            }

            function siguientePaso() {
                if (currentStep < $pasos.length - 1) {
                    if (validarCamposLlenos()) {
                        currentStep++;
                        mostrarPaso(currentStep);
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Completa todos los campos antes de pasar al siguiente paso.',
                            confirmButtonText: 'OK'
                        });
                    }
                }
            }

            function pasoAnterior() {
                if (currentStep > 0) {
                    currentStep--;
                    mostrarPaso(currentStep);
                }
            }

            $form.find('.siguiente').click(function() {
                siguientePaso();
            });

            $form.find('.anterior').click(function() {
                pasoAnterior();
            });

            $form.submit(function(event) {
                event.preventDefault();
                alert('Formulario enviado');
            });

            mostrarPaso(currentStep);

            $("#sortButton").on("click", function() {
                var wordList = $("#wordList");
                var listItems = wordList.children("li");

                listItems.sort(function(a, b) {
                    return $(a).text().localeCompare($(b).text());
                });

                wordList.empty().append(listItems);
            });


            function validarCamposLlenos() {
                var camposVacios = $pasos.eq(currentStep).find('.campo-requerido').filter(function() {
                    var campo = $(this);
                    if (campo.is('textarea') || campo.is('select') || campo.is('input[type="text"]')) {
                        if (campo.val() === '') {
                            campo.addClass('campo-requerido');
                            return true;
                        } else {
                            campo.removeClass('campo-requerido');
                            return false;
                        }
                    } else if (campo.is(':checkbox')) {
                        return !campo.is(':checked');
                    }
                });

                return camposVacios.length === 0;
            }

        });
    </script>
@stop
