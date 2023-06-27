<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
