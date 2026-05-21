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
        Schema::create('novedades', function (Blueprint $table) {
        $table->id('id_novedades');
        $table->string('novedad_title', 100);
        $table->text('novedad_body');
        $table->dateTime('novedad_datetime');
        $table->unsignedBigInteger('fk_id_usuario'); 
        $table->string('novedad_ambiente',100);
        $table->foreign('fk_id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novedades');
    }
};
