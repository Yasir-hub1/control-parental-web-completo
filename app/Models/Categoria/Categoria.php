<?php

namespace App\Models\Categoria;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contenido\Contenido;


class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias';

    protected $fillable = [
       'contenido_id',
       'nombre',
       'parent_name',
    ];

    
}
