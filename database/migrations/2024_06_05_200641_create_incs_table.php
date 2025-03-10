<?php

use Carbon\Carbon;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('incs', function (Blueprint $table) {
            $table->string('id', 20)->unique(); // Remedy
            $table->foreignId('users_id')->constrained()->onDelete('cascade'); // Tecnico
            $table->timestamp('fecha_envio')->nullable(); // Fecha y Hora llegada a Bandeja Remedy
            $table->string('resumen')->nullable(); // Titulo
            $table->foreignId('apps_id')->references('id')->on('app')->constrained()->onDelete('cascade')->nullable(); // Sistema
            $table->text('nota')->nullable(); // Descripcion detallada
            $table->enum('estado', ['Resuelto', 'Atendiendo']); // Estado de fin de atencion
            $table->timestamp('fecha_atencion')->nullable(); // Fecha y hora de atencion
            $table->enum('prioridad', ['Baja', 'Media']); // Prioridad
            $table->text('observacion')->nullable(); // Descripcion de resolucion
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('incs');
    }
};



