<?php

use Carbon\Carbon;
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
        Schema::create('incs', function (Blueprint $table) {
            $table->string('id',20)->unique();
            $table->foreignId('users_id')->constrained()->onDelete('cascade');
            $table->date('fecha_envio')->default(Carbon::today()->subDays(rand(0, 365)))->nullable();
            $table->string('resumen')->nullable();
            $table->foreignId('apps_id')->references('id')->on('app')->constrained()->onDelete('cascade')->nullable();
            $table ->text('nota')->nullable();
            $table->enum('estado',['resuelto','atendiendo']);
            $table->date('fecha_atencion')->default(Carbon::now())->nullable();
            $table ->text('observacion')->nullable();
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



