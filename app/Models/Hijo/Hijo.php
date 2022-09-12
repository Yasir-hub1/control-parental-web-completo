<?php

namespace App\Models\Hijo;

use App\Models\Tutor\Tutor;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Hijo extends Model
{
    use HasFactory;

    protected $table = 'hijos';

    protected $guarded = ['id', 'created_at', 'updated_at'];

    //relacion de 1 a muchos
    public function localizaciones()
    {
        return $this->hasMany('App\Models\Localizacion\Localizacion', 'hijo_id', 'id');
    }
    public function contenidos()
    {
        return $this->hasMany('App\Models\Contenido\Contenido', 'hijo_id', 'id');
    }
    public function carpetas()
    {
        return $this->hasMany('App\Models\Carpeta\Carpeta', 'hijo_id', 'id');
    }
    //relación inversa de 1 a muchos
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function tutor()
    {
        return $this->belongsTo('App\Models\Tutor\Tutor');
    }
}
