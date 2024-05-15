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
        Schema::create('lignecarte', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idFac');
            $table->unsignedBigInteger('idCarte');
            $table->integer('point');
            $table->dateTime('dateOpera');
            $table->decimal('montantFac', 8, 2);
            
            $table->foreign('idFac')->references('idFac')->on('facture')->onDelete('cascade');
            $table->foreign('idCarte')->references('matr')->on('clientcarte')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignecarte');
    }
};
