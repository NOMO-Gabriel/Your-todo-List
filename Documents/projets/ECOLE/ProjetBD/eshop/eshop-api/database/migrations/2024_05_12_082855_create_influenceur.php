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
        Schema::create('influenceur', function (Blueprint $table) {
            $table->id('idInf');
            $table->string('nom', 255)->collation('utf8mb4_unicode_ci');
            $table->string('mobile', 255)->collation('utf8mb4_unicode_ci');
            $table->string('codePromo', 255)->collation('utf8mb4_unicode_ci');
            $table->tinyInteger('actif');
            $table->decimal('montant', 8, 2);
            $table->string('pwd', 255)->collation('utf8mb4_unicode_ci');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influenceur');
    }
};
