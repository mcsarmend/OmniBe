<?php

namespace App\Http\Controllers;

use App\Models\stalls;
use App\Models\prealta;
use App\Models\empleados_yobel;
use Illuminate\Support\Facades\Crypt;

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
            $nestedData['application_date'] = $post->application_date;
            $nestedData['recrutier'] = $post->recrutier;
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
            $nestedData['apaterno'] = $post->apaterno;
            $nestedData['amaterno'] = $post->amaterno;
            $nestedData['nombre'] = $post->nombre;
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
            $nestedData['causabaja'] = $post->causabaja;
            $nestedData['beneficiario'] = $post->beneficiario;
            $nestedData['parentezco'] = $post->parentezco;
            $data[] = $nestedData;
        }

        return $data;
    }
}
