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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id('id_doctor')->primary();
            $table->string('photo')->nullable();
            $table->string('name');
            $table->string('last_name');
            $table->string('birth_date')->nullable();
            $table->integer('experience_an')->nullable();
            $table->string('licence_medicale')->unique();
            $table->string('language')->nullable();
            $table->string('sanguin')->nullable();
            $table->string('genre')->comment('male, female, other')->nullable();
            $table->string('email')->unique();
            $table->string('phone')->nullable()->unique();
            $table->string('emplacement')->nullable();
            $table->string('nationalite')->nullable();
            $table->string('taille')->nullable();
            $table->string('poids')->nullable();
            $table->longText('biographie')->nullable();
            $table->string('password');
            $table->unsignedBigInteger('specialisation_id');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('approved');
            $table->foreign('specialisation_id')->references('id_specialisation')->on('specialisations')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
        Schema::table('doctors', function (Blueprint $table) {
            $table->dropForeign(['specialisation_id']);
            $table->dropColumn('specialisation_id');
        });
    }
};
