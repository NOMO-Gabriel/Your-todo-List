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
        Schema::create('produit', function (Blueprint $table) {
            $table->id('codePro');
            $table->unsignedBigInteger('idCategorie');
            $table->string('nomPro', 255)->collation('utf8mb4_unicode_ci');
            $table->decimal('prix', 8, 0);
            $table->unsignedInteger('qte');
            $table->text('description')->collation('utf8mb4_unicode_ci');
            $table->string('codeArrivage', 255)->collation('utf8mb4_unicode_ci');
            $table->tinyInteger('actif');
            $table->date('dateInsertion');
            $table->decimal('prixAchat', 8, 0);
            $table->decimal('pourcentage', 2, 2);
            $table->tinyInteger('promo');
            $table->integer('size1');
            $table->integer('size2');
            $table->integer('typeSize');

            $table->foreign('idCategorie')->references('idCat')->on('categorie')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produit');
    }
};
