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
        Schema::create('lignefacture', function (Blueprint $table) {
            $table->id('idLFac');
            $table->unsignedBigInteger('codePro');
            $table->unsignedBigInteger('idFac');
            $table->decimal('prix', 8, 2);
            $table->smallInteger('qte');

            $table->foreign('codePro')->references('codePro')->on('produit')->onDelete('cascade');
            $table->foreign('idFac')->references('idFac')->on('facture')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lignefacture');
    }
};
