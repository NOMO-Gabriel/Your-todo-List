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
        Schema::create('fournisseur', function (Blueprint $table) {
            $table->id('idFour');
            $table->string('nom', 255)->collation('utf8mb4_unicode_ci');
            $table->string('adresse', 255)->collation('utf8mb4_unicode_ci');
            $table->string('ville', 255)->collation('utf8mb4_unicode_ci');
            $table->string('pays', 255)->collation('utf8mb4_unicode_ci');
            $table->string('mobile1', 255)->collation('utf8mb4_unicode_ci');
            $table->string('mobile2', 255)->collation('utf8mb4_unicode_ci');
            $table->dateTime('dateCreation');
            $table->tinyInteger('type');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fournisseur');
    }
};
