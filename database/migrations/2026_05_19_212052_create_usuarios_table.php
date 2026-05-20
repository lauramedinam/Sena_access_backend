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
        Schema::create('usuarios', function (Blueprint $table) {
           
$table->id('id_usuario');
            $table->string('usuario_name', 50);
            $table->string('usuario_identificacion',20)->unique()->nullable();
            $table->string('usuario_lastname', 50);
            $table->string('usuario_email', 100)->unique();
            $table->string('usuario_password', 255);
            $table->integer('usuario_coursenumber');
            $table->string('usuario_program', 100);
            $table->unsignedBigInteger('fk_id_rol');
            $table->string('profile_photo_path',2048)->unique()->nullable();
            $table->foreign('fk_id_rol')->references('id_rol')->on('roles')->onDelete('cascade');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
