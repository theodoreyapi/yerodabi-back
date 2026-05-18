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
        Schema::create('ville', function (Blueprint $table) {
            $table->id('id_ville')->primary();
            $table->string('name');
            $table->unsignedBigInteger('pays_id');
            $table->foreign('pays_id')->references('id_pays')->on('pays')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ville');
        Schema::table('ville', function (Blueprint $table) {
            $table->dropForeign(['pays_id']);
            $table->dropColumn('pays_id');
        });
    }
};
