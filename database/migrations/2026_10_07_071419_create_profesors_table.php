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
        Schema::create('profesor', function (Blueprint $table) {
             $table->id();
            // nombre
            $table->string('nombre' , 100);
            // apellido
            $table->string('apellidos' , 130);
            //asignatura
            $table->string('asignatura' , 130);
             // fecha nacimiento
            $table->date('fnac')->nullable();
            // genero
            $table->enum('genero', ['masculino', 'femenino' , 'otro'])->nullable();
            $table->timestamps();
            $table->unique(['nombre', 'apellidos']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profesor');
    }
};
