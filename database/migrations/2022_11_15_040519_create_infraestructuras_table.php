<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfraestructurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraestructuras', function (Blueprint $table) {
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
            $table->string('pdf_entrega');
            $table->string('pdf_planos');
            $table->string('fotos');
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
        Schema::dropIfExists('infraestructuras');
    }
}
