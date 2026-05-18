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
        Schema::create('consultation_personnalisee', function (Blueprint $table) {
            $table->id('id_consultation_personnalisee')->primary();
            $table->string('motif_personnalise')->nullable();
            $table->string('tarif_personnalise')->nullable();
            $table->date('date_personnalise')->nullable();
            $table->time('time_personnalise')->nullable();
            $table->string('meet_personnalise')->nullable();
            $table->string('statut_personnalise')->default('attente')->comment('attente, modifie, annuler, confirme');
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
        Schema::dropIfExists('consultation_personnalisee');
        Schema::table('consultation_personnalisee', function (Blueprint $table) {
            $table->dropForeign(['doctor_id', 'patient_id']);
            $table->dropColumn('doctor_id');
            $table->dropColumn('patient_id');
        });
    }
};
