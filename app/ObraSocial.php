<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ObraSocial extends Model
{
    protected $fillable = [
        'nombre','CUIT','Domicilio','iva','factura'
          
    ];
}
