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

    public function hijo(){
        return $this->hasOne(Hijo::class,'id','hijo_id');
    }
}
