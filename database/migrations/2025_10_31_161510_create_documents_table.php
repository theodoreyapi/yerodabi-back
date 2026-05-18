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
        Schema::create('documents', function (Blueprint $table) {
            $table->id('id_document')->primary();
            $table->string('libelle');
            $table->string('taille');
            $table->string('document');
            $table->string('type');
            $table->text('description')->nullable();
            $table->unsignedBigInteger('dossier_id');
            $table->foreign('dossier_id')->references('id_dossier')->on('dossiers')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
        Schema::table('documents', function (Blueprint $table) {
            $table->dropForeign(['dossier_id']);
            $table->dropColumn('dossier_id');
        });
    }
};
