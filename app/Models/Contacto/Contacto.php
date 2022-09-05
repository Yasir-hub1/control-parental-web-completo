<?php

namespace App\Models\Contacto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contactos';

    protected $fillable = [
        'nombre',
        'numero',
        'hijo_id',
        

    ];

    public function hijo(){

        return $this->hasOne(Hijo::class,'id','hijo_id');

    }
}
