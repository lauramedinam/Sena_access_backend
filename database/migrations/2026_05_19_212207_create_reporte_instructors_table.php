<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reporte_instructors', function (Blueprint $table) {
            $table->id('id_reporte_instructors');
            $table->string('reporte_head', 150);
            $table->text('reporte_body');
            $table->dateTime('reporte_datetime');
            $table->unsignedBigInteger('fk_id_usuario');
            $table->foreign('fk_id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reporte_instructors');
    }
};
