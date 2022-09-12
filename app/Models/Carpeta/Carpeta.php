<?php

namespace App\Models\Carpeta;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Hijo\Hijo;

class Carpeta extends Model
{
    use HasFactory;

    protected $table = 'carpetas';

    protected $fillable = [
        'path',
        'hijo_id',
    ];
    //relacion de 1 a muchos
    public function archivos()
    {
        return $this->hasMany('App\Models\Archivo\Archivo', 'carpeta_id', 'id');
    }
    //relacion inversa de 1 a muchos
    public function hijo()
    {
        return $this->belongsTo('App\Models\Hijo\Hijo');
    }
}
