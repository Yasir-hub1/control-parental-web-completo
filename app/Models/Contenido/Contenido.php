<?php

namespace App\Models\Contenido;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hijo\Hijo;
use App\Models\Categoria\Categoria;



class Contenido extends Model
{
    use HasFactory;

    protected $table = 'contenidos';

    protected $fillable = [
        'fecha',
        'nombre',
        'path',
        'url',
        'categoria_id',
        'hijo_id',
    ];


    public function categoria(){
        return $this->hasOne(Categoria::class,'id','categoria_id');
    }

    public function hijo(){

        return $this->hasOne(Hijo::class,'id','hijo_id');
    }
}
