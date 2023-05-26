<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
