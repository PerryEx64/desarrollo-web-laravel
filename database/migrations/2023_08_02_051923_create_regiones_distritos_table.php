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
            Schema::create('regiones_distritos', function (Blueprint $table) {
                $table->id('id_regiones_distritos')->autoIncrement();
                $table->foreignId('id_region')->constrained('regiones');
                $table->foreignId('id_distrito')->constrained('distritos');
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('regiones_distritos');
    }
};
