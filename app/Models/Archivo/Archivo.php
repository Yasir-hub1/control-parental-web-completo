<?php

namespace App\Models\Archivo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Carpeta\Carpeta;
class Archivo extends Model
{
    use HasFactory;

    protected $table = 'archivos';

    protected $fillable = [
        'fecha',
        'nombre_archivo',
        'carpeta_id',
    ];


    public function carpeta(){
          return $this->belongsTo('App\Models\Carpeta\Carpeta');
    }
}
