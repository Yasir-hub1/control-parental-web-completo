<?php

namespace App\Models\Tutor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Plan\Plan;
use App\Models\User;

class Tutor extends Model
{
    use HasFactory;

    protected $table = 'tutores';

    protected $fillable = [
        'user_id',
        'estado',
    ];

    
    public function planes(){
        // LA TABLA PLAN TUTOR ES LA MISMA TABLE QUE SUSCRIPCION
        //return this->belongsToMany(Plan::class,'plan_tutor');

    }


    public function user(){

        return $this->hasOne(User::class,'id','user_id');

    }
}
