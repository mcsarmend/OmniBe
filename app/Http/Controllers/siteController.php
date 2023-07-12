<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
class siteController extends Controller
{
    public function servicios()
    {
        return view('servicios');
    }
    public function bi()
    {
        return view('bi');
    }
    public function contacto()
    {
        return view('contacto');
    }
    public function formulario()
    {
        return view('formulario');
    }
    public function enviar_datos(Request $request)
    {

        try {
            DB::table('prealta')->insert([
                'name' => $request->name,
                'lname' => $request->lname,
                'sname' => $request->sname,
                'email' => $request->email,
                'curp' => $request->curp,
                'rfc' => $request->rfc,
                'street' => $request->street,
                'streetnum' => $request->streetnum,
                'apple' => $request->apple,
                'col' => $request->col,
                'town' => $request->town,
                'state' => $request->state,
                'application_date' => $request->application_date,
                'recrutier' => $request->recrutier
            ]);

            return response()->json(['success' => "Formulario enviado correctamente"], 200);

        } catch (\Throwable $th) {
            return response()->json(['error' => "Ocurrió un error: ". $th], 401);
        }


    }
}
