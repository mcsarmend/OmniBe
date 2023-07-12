<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados_yobel extends Model
{
    protected $table = 'empleados_yobel';

    protected $primary_key = 'id';

    public $timestamps = false;

    protected $fillable = [
      'id',
      'nejecutivo',
      'fechaalta',
      'nss',
      'apaterno',
      'amaterno',
      'nombre',
      'fechaalta2',
      'fechabaja',
      'status',
      'salariomensual',
      'puesto',
      'centrodecostos',
      'cuenta',
      'predio',
      'curp',
      'rfc',
      'fechanac',
      'lnac',
      'estcivil',
      'tel',
      'cel',
      'calle',
      'col',
      'cp',
      'munic',
      'causabaja',
      'beneficiario',
      'parentezco'
    ];

    protected $guarded =[];
}
