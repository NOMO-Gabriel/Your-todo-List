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
        Schema::create('expedition', function (Blueprint $table) {
            $table->id('idExp');
            $table->unsignedBigInteger('idVille');
            $table->string('transporteur', 255)->collation('utf8mb4_unicode_ci');
            $table->string('prix', 255)->collation('utf8mb4_unicode_ci');
            $table->string('mobile1', 255)->nullable()->collation('utf8mb4_unicode_ci');
            $table->string('mobile2', 255)->nullable()->collation('utf8mb4_unicode_ci');

            $table->foreign('idVille')->references('idVille')->on('ville')->onDelete('cascade');

            $table->timestamps();
        });

        Schema::table('expedition', function (Blueprint $table) {
            $table->index('idExp');
            $table->index('idVille');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expedition');
    }
};
