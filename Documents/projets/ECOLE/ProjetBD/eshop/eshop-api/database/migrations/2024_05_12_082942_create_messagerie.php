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
        Schema::create('messagerie', function (Blueprint $table) {
            $table->id('idmsg');
            $table->string('mobile', 255)->collation('utf8mb4_unicode_ci');
            $table->text('wsms')->collation('utf8mb4_unicode_ci');
            $table->dateTime('dateEnvoie');
            $table->integer('type');
            $table->integer('service');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messagerie');
    }
};
