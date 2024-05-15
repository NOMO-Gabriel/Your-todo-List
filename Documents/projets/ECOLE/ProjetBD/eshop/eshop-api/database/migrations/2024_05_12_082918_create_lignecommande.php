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
        Schema::create('lignecommande', function (Blueprint $table) {
            $table->id('idLignCom');
            $table->unsignedBigInteger('idCommande');
            $table->unsignedBigInteger('codePro');
            $table->integer('quantite')->default(0);
            $table->string('taille')->nullable();
            $table->string('couleur')->nullable();
            $table->tinyInteger('disponible');
            
            $table->foreign('codePro')->references('codePro')->on('produit')->onDelete('cascade');
            $table->foreign('idCommande')->references('idCommande')->on('commande')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignecommande');
    }
};
