<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedSocial extends Model
{
    //
    protected $table = 'redesSociales';

    protected $fillable = ['red','url','icono','estado'];
}
