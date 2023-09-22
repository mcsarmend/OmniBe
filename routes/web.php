<?php

use App\Http\Controllers\humanresourcesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\adminsettingsController;
use App\Http\Controllers\labelledController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\clientsController;
use App\Http\Controllers\statusController;
use App\Http\Controllers\systemsController;
use App\Http\Controllers\siteController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return view('/welcome');
    }

});


Route::get('/dashboard', function () {
    if (Auth::check()) {
        return view('/dashboard');
    } else {
        return redirect('/login');
    }
})->middleware(['auth']);

// Configuraciones
Route::get('admin/userGenerate',[adminsettingsController::class, 'usersGenerate'])->middleware(['auth']);

//Sistemas
Route::get('systems/tickets',[systemsController::class, 'tickets'])->middleware(['auth']);
Route::get('systems/calendar',[systemsController::class, 'calendar'])->middleware(['auth']);
Route::get('systems/binnacle_temperatures',[systemsController::class, 'binnacle_temperatures'])->middleware(['auth']);
Route::get('systems/query_moper',[systemsController::class, 'query_moper'])->middleware(['auth']);
Route::get('systems/documents_generate',[systemsController::class, 'documents_generate'])->middleware(['auth']);




//Reportes
Route::get('reportes/recuperacioncartera', [reportController::class, 'recuperacioncartera'])->middleware('auth');
Route::get('reportes/sesioncartera', [reportController::class, 'sesioncartera'])->middleware('auth');
Route::get('reportes/fondeadores', [reportController::class, 'fondeadores'])->middleware('auth');


//Estatus
Route::get('estatus/importantes', [statusController::class, 'importantes'])->middleware('auth');
Route::get('estatus/avisos', [statusController::class, 'avisos'])->middleware('auth');
Route::get('estatus/informacion', [statusController::class, 'informacion'])->middleware('auth');

// capitalhumano/operaciones/busquedayseleccion/catalogodepuestos

Route::get('capitalhumano/operaciones/busquedayseleccion/catalogodepuestos', [humanresourcesController::class, 'catalogodepuestos'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/estatusvacantes', [humanresourcesController::class, 'estatusvacantes'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/reporterotacion', [humanresourcesController::class, 'reporterotacion'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/prealta', [humanresourcesController::class, 'prealta'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/altayobel', [humanresourcesController::class, 'altayobel'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/altageneral', [humanresourcesController::class, 'altageneral'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/infostalls', [humanresourcesController::class, 'infostalls'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/preuplist', [humanresourcesController::class, 'preuplist'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/yobellist', [humanresourcesController::class, 'yobellist'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/generallist', [humanresourcesController::class, 'generallist'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/obtenerEmpleadoYobel', [humanresourcesController::class, 'obtenerEmpleadoYobel'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/obtenerEmpleadoGeneral', [humanresourcesController::class, 'obtenerEmpleadoGeneral'])->middleware('auth');
Route::get('capitalhumano/operaciones/busquedayseleccion/obtenerEmpleadoPrealta', [humanresourcesController::class, 'obtenerEmpleadoPrealta'])->middleware('auth');
Route::post('capitalhumano/operaciones/busquedayseleccion/asignarEmpleadoYobel', [humanresourcesController::class, 'asignarEmpleadoYobel']);
Route::post('capitalhumano/operaciones/busquedayseleccion/asignarEmpleadoGeneral', [humanresourcesController::class, 'asignarEmpleadoGeneral']);
Route::post('capitalhumano/operaciones/busquedayseleccion/eliminarempleadoyobel', [humanresourcesController::class, 'eliminarempleadoyobel']);
Route::post('capitalhumano/operaciones/busquedayseleccion/eliminarempleadogeneral', [humanresourcesController::class, 'eliminarempleadogeneral']);
Route::post('capitalhumano/operaciones/busquedayseleccion/editarempleadoyobel', [humanresourcesController::class, 'editarempleadoyobel']);
Route::post('capitalhumano/operaciones/busquedayseleccion/editarempleadogeneral', [humanresourcesController::class, 'editarempleadogeneral']);


Route::get('capitalhumano/operaciones/incidencias', [humanresourcesController::class, 'incidencias']);
Route::get('capitalhumano/operaciones/horariosempleados', [humanresourcesController::class, 'horariosempleados']);



// clientes
Route::get('clientes/cuestionario', [clientsController::class, 'cuestionario'])->middleware('auth');



//Site
Route::get('/servicios', [siteController::class, 'servicios'])->name('servicios');
Route::get('/bi', [siteController::class, 'bi'])->name('bi');
Route::get('/contacto', [siteController::class, 'contacto'])->name('contacto');
Route::get('/formulario', [siteController::class, 'formulario'])->name('formulario');
Route::post('/enviar_datos', [siteController::class, 'enviar_datos']);



require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
