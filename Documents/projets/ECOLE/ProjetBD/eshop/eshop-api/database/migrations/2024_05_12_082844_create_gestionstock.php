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
        Schema::create('gestionstock', function (Blueprint $table) {
            $table->id('idStock');
            $table->unsignedInteger('qte');
            $table->dateTime('dateStock');
            $table->tinyInteger('operation');
            $table->unsignedBigInteger('idGest');
            $table->unsignedBigInteger('codePro');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gestionstock');
    }
};
