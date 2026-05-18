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
        Schema::create('bilan_sante', function (Blueprint $table) {
            $table->id('id_bilan_sante')->primary();
            $table->string('motif_bilan')->nullable();
            $table->string('tarif_bilan');
            $table->date('date_bilan')->nullable();
            $table->time('time_bilan')->nullable();
            $table->string('meet_bilan')->nullable();
            $table->string('statut_bilan')->default('attente')->comment('attente, modifie, annuler, confirme');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id_doctor')->on('doctors');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id_patient')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')->references('id_type_bilan')->on('type_bilan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bilan_sante');
        Schema::table('bilan_sante', function (Blueprint $table) {
            $table->dropForeign(['doctor_id', 'patient_id', 'type_id']);
            $table->dropColumn('doctor_id');
            $table->dropColumn('patient_id');
            $table->dropColumn('type_id');
        });
    }
};
