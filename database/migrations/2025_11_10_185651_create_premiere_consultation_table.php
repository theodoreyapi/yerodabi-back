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
        Schema::create('premiere_consultation', function (Blueprint $table) {
            $table->id('id_premiere_consultation')->primary();
            $table->string('motif_consultation')->nullable();
            $table->string('tarif_consultation');
            $table->date('date_consultation')->nullable();
            $table->time('time_consultation')->nullable();
            $table->string('meet_consultation')->nullable();
            $table->string('statut_consultation')->default('attente')->comment('attente, modifie, annuler, confirme');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id_doctor')->on('doctors');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id_patient')->on('patients')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('premiere_consultation');
        Schema::table('premiere_consultation', function (Blueprint $table) {
            $table->dropForeign(['doctor_id', 'patient_id']);
            $table->dropColumn('doctor_id');
            $table->dropColumn('patient_id');
        });
    }
};
