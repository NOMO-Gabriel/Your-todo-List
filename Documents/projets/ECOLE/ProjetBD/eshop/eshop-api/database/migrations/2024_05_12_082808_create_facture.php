<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('facture', function (Blueprint $table) {
            $table->id('idFac');
            $table->dateTime('dateFac');
            $table->decimal('remise', 8, 2);
            $table->decimal('montant', 8, 2);
            $table->string('tel', 255)->collation('utf8mb4_unicode_ci');
            $table->smallInteger('typeFac');
            $table->unsignedBigInteger('idCaissiere');
            $table->decimal('capital', 8, 2)->comment("Il s''agit de la valeur d''achat du produit par les vendeurs");
            $table->decimal('tva', 8, 2)->default('0.00');
            $table->string('codePromo', 255)->collation('utf8mb4_unicode_ci');

            $table->foreign('idCaissiere')->references('idGest')->on('gestionnaire')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facture');
    }
};
