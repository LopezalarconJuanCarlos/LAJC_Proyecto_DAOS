<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class TbTipos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create ('tb_tipos', function (Blueprint $table ){
            $table -> bigIncrements('id_tipos');
            $table -> string('nombre', 50);
            $table -> text('detalle');
            $table -> boolean('activo');
            $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExist('tb_tipos');
    }
}
