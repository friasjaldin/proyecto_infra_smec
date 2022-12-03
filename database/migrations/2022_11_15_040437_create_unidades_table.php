<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnidadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unidades', function (Blueprint $table) {
            $table->id();
            $table->string('cod_sie');
            $table->string('cod_infraestructura');
            $table->string('nombre_unidad');
            $table->string('sector_social');
            $table->string('dependencia');
            $table->string('nivel');
            $table->string('turno');
            $table->integer('pob_estudiantil');
            $table->integer('aulas_individual');
            $table->integer('aulas_compartido');
            $table->integer('baterias_sanitarias_varones');
            $table->integer('baterias_sanitarias_mujeres');
            $table->string('proscenio');
            $table->string('tinglado');
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
        Schema::dropIfExists('unidades');
    }
}
