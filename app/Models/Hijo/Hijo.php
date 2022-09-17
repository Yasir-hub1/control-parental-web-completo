<?php

namespace App\Models\Hijo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Hijo extends Model
{
    use HasFactory;

    protected $table = 'hijos';

    protected $fillable = [
        'alias',
        'edad',
    ];



    public function user(){

     

    }
}
