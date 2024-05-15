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
        Schema::create('paieinfluenceur', function (Blueprint $table) {
            $table->id('idPaiement');
            $table->dateTime('datePaie');
            $table->decimal('montant', 8, 2);
            $table->unsignedBigInteger('idInf');
            $table->tinyInteger('validite');
            $table->text('commentaire')->collation('utf8mb4_unicode_ci');

            $table->foreign('idInf')->references('idInf')->on('influenceur')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paieinfluenceur');
    }
};
