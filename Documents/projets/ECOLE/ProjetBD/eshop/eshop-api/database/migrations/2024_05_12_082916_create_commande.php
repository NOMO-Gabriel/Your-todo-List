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
        Schema::create('commande', function (Blueprint $table) {
            $table->id('idCommande');
            $table->timestamp('dateCom')->default('2024-03-22 04:35:33');
            $table->decimal('montant', 8, 2);
            $table->string('nomClient', 255)->collation('utf8mb4_unicode_ci');
            $table->string('mobile', 255)->collation('utf8mb4_unicode_ci');
            $table->text('adresse')->collation('utf8mb4_unicode_ci');
            $table->text('commentaire')->collation('utf8mb4_unicode_ci')->nullable();
            $table->tinyInteger('livrer');
            $table->decimal('avance', 8, 2)->default('0.00');
            $table->decimal('remise', 8, 2)->default('0.00');
            $table->smallInteger('type')->comment('0:annulee,1:active,2:traitee,3:en attente');
            $table->unsignedBigInteger('idVille');

            $table->foreign('idVille')->references('idVille')->on('ville');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commande');
    }
};

