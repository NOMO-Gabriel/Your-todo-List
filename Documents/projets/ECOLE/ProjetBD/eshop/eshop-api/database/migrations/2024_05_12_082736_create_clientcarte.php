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
        Schema::create('clientcarte', function (Blueprint $table) {
            $table->id('matr');
            $table->string('nom', 255)->collation('utf8mb4_unicode_ci');
            $table->tinyInteger('sexe');
            $table->string('dateNaiss', 255)->collation('utf8mb4_unicode_ci');
            $table->unsignedBigInteger('idVille');
            $table->string('mobile', 255)->collation('utf8mb4_unicode_ci');
            $table->dateTime('creation');
            $table->unsignedInteger('point');
            $table->decimal('montantTontine', 8, 2);
            $table->string('user', 255)->collation('utf8mb4_unicode_ci');
            $table->smallInteger('typeChat');
            $table->string('pwd', 255)->collation('utf8mb4_unicode_ci')->comment("Il s'agit ici du mot de passe du client");
            $table->smallInteger('chatID')->comment('1:whatsapp, 2:telegram;0: sms');

            $table->foreign('idVille')->references('idVille')->on('ville')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientcarte');
    }
};
