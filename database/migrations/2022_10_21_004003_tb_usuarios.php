<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('tb_usuarios', function (Blueprint $table ){
            $table -> id('id_usuario');
            $table -> string('clave', 50 );
            $table -> string('nombre',50);
            $table -> string('app',50);
            $table -> string('ap', 50 )-> nullable();
            $table ->date('fn');
            $table -> string('gen', 20);
            $table -> text ('foto')->nullable();
            $table -> text('email');
            $table -> text('pass');
            $table -> integer('level');
            $table -> boolean('activo');
            $table ->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('tb_usuarios');
    }
}
