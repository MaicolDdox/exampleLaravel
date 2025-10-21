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
        Schema::create('positions', function (Blueprint $table) {
            $table->id();
            //Relaciones con tabla vuelo, pasajero y pagador
            $table->foreignId('user_player_id')->constrained('user_players')->onDelete('cascade')->nullable();
            $table->foreignId('user_passenger_id')->constrained('user_passengers')->onDelete('cascade')->nullable();
            $table->foreignId('flight_id')->constrained('flights')->onDelete('cascade');

            //Demas campos de la tabla
            $table->enum('estado', ['disponible', 'ocupado'])->default('disponible');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
