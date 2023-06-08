<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stalls;



class humanresourcesController extends Controller
{
    public function catalogodepuestos(){
        return view('humanresources.operations.searchnselection.jobscatalog');
    }
    public function estatusvacantes(){
        return view('humanresources.operations.searchnselection.vacancystatus');
    }
    public function reporterotacion(){
        return view('humanresources.operations.searchnselection.rotationreport');
    }
    public function prealta(){
        return view('humanresources.operations.searchnselection.preup');
    }
    public function infostalls(){


        $posts =  stalls::all();
        $data = [];
        foreach ($posts as $post) {
            $tmp = [];
            array_push($tmp,$post->codigo_nomina);
            array_push($tmp,$post->nombre);
            array_push($tmp,$post->abreviatura);
            array_push($tmp,$post->cuenta);
            array_push($tmp,$post->abreviatura4);
            array_push($tmp,$post->numeracion);
            array_push($tmp,$post->codigo_interno);
            array_push($data,$tmp);
        }
        return $data;
    }
}
