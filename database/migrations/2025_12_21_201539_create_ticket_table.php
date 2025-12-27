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
    Schema::create('tickets', function (Blueprint $table) {
    $table->id();
    $table->string('cliente', 255); 
    $table->dateTime('fechaHoraEvento');
    $table->longText('descripcion', 1000);
    $table->enum('estado', [
        'activo',
        'abortado',
        'finalizado'
    ])->default('activo');
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ticket');
    }
};
