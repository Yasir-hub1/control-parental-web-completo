<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHijosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hijos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->String('apellido');
            $table->String('celular');
<<<<<<< HEAD
            //$table->char('sexo');
            $table->String('alias');
            //$table->unsignedSmallInteger('edad');
            $table->unsignedInteger('id_tutor');

=======
            $table->String('sexo',1);
            $table->String('alias');
            $table->unsignedSmallInteger('edad');
            $table->foreignId('tutore_id')->references('id')->on('tutores')->nullable();
>>>>>>> master
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hijos');
    }
}
