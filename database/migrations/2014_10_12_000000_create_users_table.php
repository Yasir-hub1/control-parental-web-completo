<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('ci',10);
            $table->string('name');
            $table->string('lastname');
            $table->date('fecha_nacimiento');
            $table->string('sexo',1);
            $table->string('celular',10);
            $table->string('foto');
            $table->string('tipo',1);//A,T,H
            $table->string('email')->unique();
            $table->String('apellido');
            $table->String('celular');
            $table->date('fecha_nacimiento');
            $table->char('sexo');
            $table->String('foto');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
