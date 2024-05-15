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
        Schema::create('gestionnaire', function (Blueprint $table) {
            $table->id('idGest');
            $table->string('nomGest', 255)->collation('utf8mb4_unicode_ci');
            $table->integer('typeGest');
            $table->string('login', 255)->collation('utf8mb4_unicode_ci');
            $table->string('pwd', 255)->collation('utf8mb4_unicode_ci');
            $table->tinyInteger('actif');
            $table->string('mobile', 255)->collation('utf8mb4_unicode_ci');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestionnaire');
    }
};
