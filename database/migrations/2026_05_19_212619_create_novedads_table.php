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
        Schema::create('novedads', function (Blueprint $table) {
            $table->id('id_novedade');
            $table->string('novedad_title', 100);
            $table->text('novedad_body');
            $table->dateTime('novedad_datetime');
            $table->unsignedBigInteger('fk_id_usuario'); 
            $table->string('novedade_ambiente',100);
            $table->foreign('fk_id_usuario')->references('id_usuario')->on('usuarios')->onDelete('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novedads');
    }
};
