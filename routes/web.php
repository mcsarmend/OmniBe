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
        return redirect('/login');
    }
})->middleware('auth');


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
Route::get('capitalhumano/operaciones/busquedayseleccion/infostalls', [humanresourcesController::class, 'infostalls']);





// clientes
Route::get('clientes/cuestionario', [clientsController::class, 'cuestionario'])->middleware('auth');





require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

