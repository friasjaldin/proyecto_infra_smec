<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipamentos', function (Blueprint $table) {
            $table->id();
            $table->string('cod_sie');
            $table->string('cod_infraestructura');
            $table->string('cod_sisin');
            $table->string('nombre_proyecto');
            $table->string('dependencia');
            $table->decimal('presupuesto_poa');
            $table->date('fecha_inicio');
            $table->date('fecha_conclusion');
            $table->string('cuce');
            $table->integer('bienes_cantidad');
            $table->string('bienes_descripcion');
            $table->string('pdf_entrega_def');
            $table->string('pdf_transferencia_af');
            $table->string('aclaraciones');
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
        Schema::dropIfExists('equipamentos');
    }
}
