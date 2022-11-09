<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbTiendas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('tb_tiendas', function (Blueprint $table ){
            $table -> bigIncrements('id_tienda');
            $table -> string ('clave', 50);
            $table -> string ('nombre', 50);
            $table -> timestamps();
            $table -> text('foto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */ /* agregar el borrar si existe*/ 
    public function down()
    {
        Schema::dropIfExists('tb_tiendas');
    }
}
