<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    //

    protected $table = 'contactenos';

    protected $fillable = ['tipo','contenidoTipo','icono','estado'];
}
