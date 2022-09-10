<?php

namespace App\Models\Plan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tutor\Tutor;

class Plan extends Model
{
    use HasFactory;

    protected $table = 'planes';
    

    protected $fillable = [
        'dispositivos',
        'estado',
        'nombre',
        'precio',
        'tiempo_plan',
    ];



    public function tutores(){
        //LA TABLA PLAN TUTOR ES LA MISMA QUE SUSCRIPCION
        return $this->belongsToMany(Tutor::class,'plan_tutor');  

    }
}
