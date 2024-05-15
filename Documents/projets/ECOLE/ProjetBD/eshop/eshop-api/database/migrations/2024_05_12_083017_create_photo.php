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
        Schema::create('photo', function (Blueprint $table) {
            $table->id('idPhoto');
            $table->string('lienPhoto', 255)->collation('utf8mb4_unicode_ci');
            $table->unsignedBigInteger('codePro');

            $table->foreign('codePro')->references('codePro')->on('produit')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('photo');
    }
};
