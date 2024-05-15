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
        Schema::create('tontine', function (Blueprint $table) {
            $table->id('idTontine');
            $table->dateTime('dateCotisation');
            $table->decimal('montant', 8, 2);
            $table->text('commentaire')->nullable();
            $table->unsignedBigInteger('idGest');
            $table->tinyInteger('validite');
            $table->unsignedBigInteger('idCarte');
            $table->tinyInteger('action');

            $table->foreign('idGest')->references('idGest')->on('gestionnaire')->onDelete('cascade');
            $table->foreign('idCarte')->references('matr')->on('clientcarte')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tontine');
    }
};
