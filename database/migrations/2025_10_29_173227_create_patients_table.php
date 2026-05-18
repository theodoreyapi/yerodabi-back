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
        Schema::create('patients', function (Blueprint $table) {
            $table->id('id_patient')->primary();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->string('birth_date')->nullable();
            $table->string('sanguin')->nullable();
            $table->string('genre')->comment('male, female, other')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('emplacement')->nullable();
            $table->string('postal_code');
            $table->string('nationalite')->nullable();
            $table->string('taille')->nullable();
            $table->string('poids')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('pays_id');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('approved');
            $table->foreign('pays_id')->references('id_pays')->on('pays');
            $table->unsignedBigInteger('ville_id');
            $table->foreign('ville_id')->references('id_ville')->on('ville');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign(['pays_id', 'ville_id']);
            $table->dropColumn('pays_id');
            $table->dropColumn('ville_id');
        });
    }
};
