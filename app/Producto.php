<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $table = 'productos';

    protected $fillable = ['id_categoria','nombre','descripcion','estado'];

    public function categoria()
    {
        return $this->belongsTo('App\Categoria', 'id_categoria', 'id');
    }
}
