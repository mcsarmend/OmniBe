<?php

namespace App\Http\Controllers;

use App\Models\empleados_yobel;
use App\Models\empleados_general;
use App\Models\prealta;
use App\Models\stalls;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class humanresourcesController extends Controller
{
    public function catalogodepuestos()
    {
        return view('humanresources.operations.searchnselection.jobscatalog');
    }
    public function estatusvacantes()
    {
        return view('humanresources.operations.searchnselection.vacancystatus');
    }
    public function reporterotacion()
    {
        return view('humanresources.operations.searchnselection.rotationreport');
    }
    public function prealta()
    {
        return view('humanresources.operations.searchnselection.preup');
    }
    public function altayobel()
    {
        return view('humanresources.operations.searchnselection.altayobel');
    }
    public function altageneral()
    {
        return view('humanresources.operations.searchnselection.altageneral');
    }
    public function infostalls()
    {

        $posts = stalls::all();
        $data = [];
        foreach ($posts as $post) {
            $tmp = [];
            array_push($tmp, $post->codigo_nomina);
            array_push($tmp, $post->nombre);
            array_push($tmp, $post->abreviatura);
            array_push($tmp, $post->cuenta);
            array_push($tmp, $post->abreviatura4);
            array_push($tmp, $post->numeracion);
            array_push($tmp, $post->codigo_interno);
            array_push($data, $tmp);
        }
        return $data;
    }

    public function preuplist()
    {
        $posts = prealta::all();
        $data = [];
        foreach ($posts as $post) {

            $nestedData['name'] = $post->name;
            $nestedData['lname'] = $post->lname;
            $nestedData['sname'] = $post->sname;
            $nestedData['email'] = $post->email;
            $nestedData['curp'] = $post->curp;
            $nestedData['rfc'] = $post->rfc;
            $nestedData['street'] = $post->street;
            $nestedData['streetnum'] = $post->streetnum;
            $nestedData['apple'] = $post->apple;
            $nestedData['col'] = $post->col;
            $nestedData['town'] = $post->town;
            $nestedData['state'] = $post->state;
            $nestedData['cp'] = $post->cp;
            $nestedData['application_date'] = $post->application_date;
            $nestedData['recrutier'] = $post->recrutier;
            $nestedData['nss'] = $post->nss;
            $nestedData['infonavit'] = $post->infonavit;
            $nestedData['fonacot'] = $post->fonacot;
            $nestedData['fecha_nac'] = $post->fecha_nac;
            $nestedData['lugar_nac'] = $post->lugar_nac;
            $nestedData['estado_civil'] = $post->estado_civil;
            $nestedData['escolaridad'] = $post->escolaridad;
            $nestedData['genero'] = $post->genero;
            $nestedData['celular'] = $post->celular;
            $nestedData['telcasa'] = $post->telcasa;
            $nestedData['telcontacto'] = $post->telcontacto;
            $nestedData['cryptedid'] = Crypt::encrypt($post->id);

            $data[] = $nestedData;
        }

        return $data;
    }
    public function yobellist()
    {
        $posts = empleados_yobel::all();
        $data = [];
        foreach ($posts as $post) {
            $nestedData['id'] = $post->id;
            $nestedData['nejecutivo'] = $post->nejecutivo;
            $nestedData['fechaalta'] = $post->fechaalta;
            $nestedData['nss'] = $post->nss;
            $nestedData['infonavit'] = $post->infonavit;
            $nestedData['fonacot'] = $post->fonacot;
            $nestedData['apaterno'] = $post->apaterno;
            $nestedData['amaterno'] = $post->amaterno;
            $nestedData['nombre'] = $post->nombre;
            $nestedData['correo'] = $post->correo;
            $nestedData['fechaalta2'] = $post->fechaalta2;
            $nestedData['fechabaja'] = $post->fechabaja;
            $nestedData['status'] = $post->status;
            $nestedData['salariomensual'] = $post->salariomensual;
            $nestedData['puesto'] = $post->puesto;
            $nestedData['centrodecostos'] = $post->centrodecostos;
            $nestedData['cuenta'] = $post->cuenta;
            $nestedData['predio'] = $post->predio;
            $nestedData['curp'] = $post->curp;
            $nestedData['rfc'] = $post->rfc;
            $nestedData['fechanac'] = $post->fechanac;
            $nestedData['lnac'] = $post->lnac;
            $nestedData['estcivil'] = $post->estcivil;
            $nestedData['escolaridad'] = $post->escolaridad;
            $nestedData['telcasa'] = $post->telcasa;
            $nestedData['cel'] = $post->cel;
            $nestedData['telcontacto'] = $post->telcontacto;
            $nestedData['calle'] = $post->calle;
            $nestedData['numero'] = $post->numero;
            $nestedData['manzana'] = $post->manzana;
            $nestedData['col'] = $post->col;
            $nestedData['cp'] = $post->cp;
            $nestedData['munic'] = $post->munic;
            $nestedData['estado'] = $post->estado;
            $nestedData['causabaja'] = $post->causabaja;
            $nestedData['beneficiario'] = $post->beneficiario;
            $nestedData['parentesco'] = $post->parentesco;
            $nestedData['num_cuenta_bancario'] = $post-> num_cuenta_bancario;
            $nestedData['banco'] = $post-> banco;
            $nestedData['salario'] = $post-> salario;
            $data[] = $nestedData;
        }

        return $data;
    }
    public function generallist()
    {
        $posts = empleados_general::all();
        $data = [];
        foreach ($posts as $post) {
            $nestedData['id'] = $post->id;
            $nestedData['nejecutivo'] = $post->nejecutivo;
            $nestedData['fechaalta'] = $post->fechaalta;
            $nestedData['nss'] = $post->nss;
            $nestedData['apaterno'] = $post->apaterno;
            $nestedData['amaterno'] = $post->amaterno;
            $nestedData['nombre'] = $post->nombre;
            $nestedData['correo'] = $post->correo;
            $nestedData['fechaalta2'] = $post->fechaalta2;
            $nestedData['fechabaja'] = $post->fechabaja;
            $nestedData['status'] = $post->status;
            $nestedData['salariomensual'] = $post->salariomensual;
            $nestedData['puesto'] = $post->puesto;
            $nestedData['centrodecostos'] = $post->centrodecostos;
            $nestedData['cuenta'] = $post->cuenta;
            $nestedData['predio'] = $post->predio;
            $nestedData['curp'] = $post->curp;
            $nestedData['rfc'] = $post->rfc;
            $nestedData['fechanac'] = $post->fechanac;
            $nestedData['lnac'] = $post->lnac;
            $nestedData['estcivil'] = $post->estcivil;
            $nestedData['escolaridad'] = $post->escolaridad;
            $nestedData['tel'] = $post->tel;
            $nestedData['cel'] = $post->cel;
            $nestedData['calle'] = $post->calle;
            $nestedData['numero'] = $post->numero;
            $nestedData['manzana'] = $post->manzana;
            $nestedData['col'] = $post->col;
            $nestedData['cp'] = $post->cp;
            $nestedData['munic'] = $post->munic;
            $nestedData['estado'] = $post->estado;
            $nestedData['causabaja'] = $post->causabaja;
            $nestedData['beneficiario'] = $post->beneficiario;
            $nestedData['parentesco'] = $post->parentesco;
            $nestedData['num_cuenta_bancario'] = $post-> num_cuenta_bancario;
            $nestedData['banco'] = $post-> banco;
            $nestedData['salario'] = $post-> salario;
            $data[] = $nestedData;
        }

        return $data;
    }
    public function obtenerEmpleadoYobel(Request $request)
    {
        $id = $request->id;

        // Ejecutar la consulta SQL utilizando el Query Builder
        $post = empleados_yobel::where('id', $id)->first();

        // Verificar si se encontró el empleado
        if ($post) {

            $nestedData['id'] = $post->id;
            $nestedData['nejecutivo'] = $post->nejecutivo;
            $nestedData['fechaalta'] = $post->fechaalta;
            $nestedData['nss'] = $post->nss;
            $nestedData['infonavit'] = $post->infonavit;
            $nestedData['fonacot'] = $post->fonacot;
            $nestedData['apaterno'] = $post->apaterno;
            $nestedData['amaterno'] = $post->amaterno;
            $nestedData['nombre'] = $post->nombre;
            $nestedData['correo'] = $post->correo;
            $nestedData['fechaalta2'] = $post->fechaalta2;
            $nestedData['fechabaja'] = $post->fechabaja;
            $nestedData['status'] = $post->status;
            $nestedData['salariomensual'] = $post->salariomensual;
            $nestedData['puesto'] = $post->puesto;
            $nestedData['centrodecostos'] = $post->centrodecostos;
            $nestedData['cuenta'] = $post->cuenta;
            $nestedData['predio'] = $post->predio;
            $nestedData['curp'] = $post->curp;
            $nestedData['rfc'] = $post->rfc;
            $nestedData['fechanac'] = $post->fechanac;
            $nestedData['lnac'] = $post->lnac;
            $nestedData['estcivil'] = $post->estcivil;
            $nestedData['escolaridad'] = $post->escolaridad;
            $nestedData['tel'] = $post->tel;
            $nestedData['cel'] = $post->cel;
            $nestedData['calle'] = $post->calle;
            $nestedData['col'] = $post->col;
            $nestedData['cp'] = $post->cp;
            $nestedData['munic'] = $post->munic;
            $nestedData['estado'] = $post->estado;
            $nestedData['causabaja'] = $post->causabaja;
            $nestedData['beneficiario'] = $post->beneficiario;
            $nestedData['parentesco'] = $post->parentesco;
            $nestedData['num_cuenta_bancario'] = $post->num_cuenta_bancario;
            $nestedData['banco'] = $post->banco;
            $nestedData['num_cuenta'] = $post->num_cuenta;
            $nestedData['salario'] = $post->salario;

            return $nestedData;

        } else {
            // Si no se encontró el empleado, puedes retornar un mensaje de error o redireccionar a otra página
            return redirect()->route('otra_ruta')->with('error', 'Empleado no encontrado');
        }
    }
    public function obtenerEmpleadoGeneral(Request $request)
    {
        $id = $request->id;

        // Ejecutar la consulta SQL utilizando el Query Builder
        $post = empleados_general::where('id', $id)->first();

        // Verificar si se encontró el empleado
        if ($post) {

            $nestedData['id'] = $post->id;
            $nestedData['nejecutivo'] = $post->nejecutivo;
            $nestedData['fechaalta'] = $post->fechaalta;
            $nestedData['nss'] = $post->nss;
            $nestedData['infonavit'] = $post->infonavit;
            $nestedData['fonacot'] = $post->fonacot;
            $nestedData['apaterno'] = $post->apaterno;
            $nestedData['amaterno'] = $post->amaterno;
            $nestedData['nombre'] = $post->nombre;
            $nestedData['correo'] = $post->correo;
            $nestedData['fechaalta2'] = $post->fechaalta2;
            $nestedData['fechabaja'] = $post->fechabaja;
            $nestedData['status'] = $post->status;
            $nestedData['salariomensual'] = $post->salariomensual;
            $nestedData['puesto'] = $post->puesto;
            $nestedData['centrodecostos'] = $post->centrodecostos;
            $nestedData['cuenta'] = $post->cuenta;
            $nestedData['predio'] = $post->predio;
            $nestedData['curp'] = $post->curp;
            $nestedData['rfc'] = $post->rfc;
            $nestedData['fechanac'] = $post->fechanac;
            $nestedData['lnac'] = $post->lnac;
            $nestedData['estcivil'] = $post->estcivil;
            $nestedData['escolaridad'] = $post->escolaridad;
            $nestedData['telcasa'] = $post->telcasa;
            $nestedData['telcontacto'] = $post->telcontacto;
            $nestedData['cel'] = $post->cel;
            $nestedData['calle'] = $post->calle;
            $nestedData['col'] = $post->col;
            $nestedData['cp'] = $post->cp;
            $nestedData['munic'] = $post->munic;
            $nestedData['estado'] = $post->estado;
            $nestedData['causabaja'] = $post->causabaja;
            $nestedData['beneficiario'] = $post->beneficiario;
            $nestedData['parentesco'] = $post->parentesco;
            $nestedData['num_cuenta_bancario'] = $post->num_cuenta_bancario;
            $nestedData['banco'] = $post->banco;
            $nestedData['num_cuenta'] = $post->num_cuenta;
            $nestedData['salario'] = $post->salario;

            return $nestedData;

        } else {
            // Si no se encontró el empleado, puedes retornar un mensaje de error o redireccionar a otra página
            return redirect()->route('otra_ruta')->with('error', 'Empleado no encontrado');
        }
    }
    public function obtenerEmpleadoPrealta(Request $request)
    {
        $id = Crypt::decrypt($request->id);
        $tipo = $request->tipo;
        $idnuevoempleado = "";
        if ($tipo == "yobel") {
            $idnuevoempleado = DB::table('empleados_yobel')->max('id');
            $idnuevoempleado++;
        } else {
            $idnuevoempleado = DB::table('empleados_base')->max('id');
            $idnuevoempleado++;
        }

        // Ejecutar la consulta SQL utilizando el Query Builder
        $post = prealta::where('id', $id)->first();

        // Verificar si se encontró el empleado
        if ($post) {

            $nestedData['nombre'] = $post->name;
            $nestedData['apaterno'] = $post->lname;
            $nestedData['amaterno'] = $post->sname;
            $nestedData['correo'] = $post->email;
            $nestedData['curp'] = $post->curp;
            $nestedData['rfc'] = $post->rfc;
            $nestedData['calle'] = $post->street;
            $nestedData['numero'] = $post->streetnum;
            $nestedData['manzana'] = $post->apple;
            $nestedData['colonia'] = $post->col;
            $nestedData['municipio'] = $post->town;
            $nestedData['estado'] = $post->state;
            $nestedData['cp'] = $post->cp;
            $nestedData['fecha_envio'] = $post->application_date;
            $nestedData['reclutador'] = $post->recrutier;
            $nestedData['nss'] = $post->nss;
            $nestedData['infonavit'] = $post->infonavit;
            $nestedData['fonacot'] = $post->fonacot;
            $nestedData['fecha_nacimiento'] = $post->fecha_nac;
            $nestedData['lugar_nacimiento'] = $post->lugar_nac;
            $nestedData['estado_civil'] = $post->estado_civil;
            $nestedData['escolaridad'] = $post->escolaridad;
            $nestedData['genero'] = $post->genero;
            $nestedData['celular'] = $post->celular;
            $nestedData['telcasa'] = $post->telcasa;
            $nestedData['telcontacto'] = $post->telcontacto;
            $nestedData['idnuevoempleado'] = $idnuevoempleado;
            return $nestedData;

        } else {
            // Si no se encontró el empleado, puedes retornar un mensaje de error o redireccionar a otra página
            return redirect()->route('otra_ruta')->with('error', 'Empleado no encontrado');
        }
    }

    public function asignarEmpleadoYobel(Request $request)
    {
        $idprealta = prealta::where('curp', $request->curp)->pluck('id')->first();
        $fechaactual =now()->format('Y-m-d');
        $idnuevoempleado = DB::table('empleados_yobel')->max('id');
        $idnuevoempleado++;
        try {
            DB::table('empleados_yobel')->insert([
                'id' =>$idnuevoempleado,
                'nejecutivo' => strtoupper( $request-> reclutador),
                'fechaalta' => strtoupper( $request-> fecha_envio),
                'nss' => strtoupper( $request-> nss),
                'infonavit' => strtoupper( $request-> infonavit),
                'fonacot' => strtoupper( $request-> fonacot),
                'apaterno' => strtoupper( $request-> apaterno),
                'amaterno' => strtoupper( $request-> amaterno),
                'nombre' => strtoupper( $request-> nombre),
                'correo' => strtoupper( $request-> correo),
                'fechaalta2' => strtoupper( $request-> fecha_alta),
                'status' => strtoupper( 'ALTA'),
                'salariomensual' => strtoupper( $request-> salario),
                'puesto' => strtoupper( $request-> puesto),
                'centrodecostos' => strtoupper( $request-> centro_costos),
                'cuenta' => strtoupper( $request-> cuenta),
                'predio' => strtoupper( $request-> predio),
                'curp' => strtoupper( $request-> curp),
                'rfc' => strtoupper( $request-> rfc),
                'fechanac' => strtoupper( $request-> fecha_nacimiento),
                'lnac' => strtoupper( $request-> lugar_nacimiento),
                'estcivil' => strtoupper( $request-> estado_civil),
                'escolaridad' => strtoupper( $request-> escolaridad),
                'cel' => strtoupper( $request-> celular),
                'telcasa' => strtoupper( $request-> telcasa),
                'telcontacto' => strtoupper( $request-> telcontacto),
                'calle' => strtoupper( $request-> calle),
                'numero' => strtoupper( $request-> numero),
                'manzana' => strtoupper( $request-> manzana),
                'col' => strtoupper( $request-> colonia),
                'cp' => strtoupper( $request-> cp),
                'munic' => strtoupper( $request-> municipio),
                'estado' => strtoupper( $request-> estado),
                'beneficiario' => strtoupper( $request-> beneficiario),
                'parentesco' => strtoupper( $request-> parentesco),
                'num_cuenta_bancario' => strtoupper( $request-> cuenta_bancaria),
                'banco' => strtoupper( $request-> banco),
                'salario' => strtoupper( $request-> salario)
            ]);
            $prealta = prealta::find($idprealta);
            $prealta->delete();

            return response()->json(['success' => "El usuario ha sido asigando a Yobel"], 200);

        } catch (\Throwable $th) {
            return response()->json(['error' => "Ocurrió un error: " . $th], 401);
        }

    }
    public function asignarEmpleadoGeneral(Request $request)
    {
        $idprealta = prealta::where('curp', $request->curp)->pluck('id')->first();
        $fechaactual =now()->format('Y-m-d');
        $idnuevoempleado = DB::table('empleados_base')->max('id');
        $idnuevoempleado++;
        try {
            DB::table('empleados_base')->insert([
                'id' =>$idnuevoempleado,
                'nejecutivo' => strtoupper( $request-> reclutador),
                'fechaalta' => strtoupper( $request-> fecha_entrevista),
                'nss' => strtoupper( $request-> nss),
                'infonavit' => strtoupper( $request-> infonavit),
                'fonacot' => strtoupper( $request-> fonacot),
                'apaterno' => strtoupper( $request-> apaterno),
                'amaterno' => strtoupper( $request-> amaterno),
                'nombre' => strtoupper( $request-> nombre),
                'correo' => strtoupper( $request-> correo),
                'sexo' => strtoupper( $request-> genero),
                'fechanotific' => strtoupper( $request-> fecha_envio),
                'status' => strtoupper( 'ALTA'),
                'salariomensual' => strtoupper( $request-> salario),
                'puesto' => strtoupper( $request-> puesto),
                'cuenta' => strtoupper( $request-> cuenta),
                'predio' => strtoupper( $request-> predio),
                'curp' => strtoupper( $request-> curp),
                'rfc' => strtoupper( $request-> rfc),
                'fechanac' => strtoupper( $request-> fecha_nacimiento),
                'lnac' => strtoupper( $request-> lugar_nacimiento),
                'estcivil' => strtoupper( $request-> estado_civil),
                'escolaridad' => strtoupper( $request-> escolaridad),
                'cel' => strtoupper( $request-> celular),
                'telcasa' => strtoupper( $request-> telcasa),
                'telcontacto' => strtoupper( $request-> telcontacto),
                'cel' => strtoupper( $request-> celular),
                'calle' => strtoupper( $request-> calle),
                'numero' => strtoupper( $request-> numero),
                'manzana' => strtoupper( $request-> manzana),
                'col' => strtoupper( $request-> colonia),
                'cp' => strtoupper( $request-> cp),
                'munic' => strtoupper( $request-> municipio),
                'estado' => strtoupper( $request-> estado),
                'beneficiario' => strtoupper( $request-> beneficiario),
                'parentesco' => strtoupper( $request-> parentesco),
                'num_cuenta_bancario' => strtoupper( $request-> cuenta_bancaria),
                'banco' => strtoupper( $request-> banco),
                'predio' => strtoupper( $request-> predio),
                'salario' => strtoupper( $request-> salario)
            ]);

    //        $prealta = prealta::find($idprealta);
    //        $prealta->delete();

            return response()->json(['success' => "El usuario ha sido asigando a la base General"], 200);

        } catch (\Throwable $th) {
            return response()->json(['error' => "Ocurrió un error: " . $th], 401);
        }

    }

}
