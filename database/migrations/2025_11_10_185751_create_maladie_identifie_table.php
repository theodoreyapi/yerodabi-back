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
        Schema::create('maladie_identifie', function (Blueprint $table) {
            $table->id('id_maladie_identifie')->primary();
            $table->string('tarif_technique');
            $table->date('date_technique')->nullable();
            $table->time('time_technique')->nullable();
            $table->string('meet_technique')->nullable();
            $table->string('statut_technique')->default('attente')->comment('attente, modifie, annuler, confirme');
            $table->unsignedBigInteger('doctor_id');
            $table->foreign('doctor_id')->references('id_doctor')->on('doctors');
            $table->unsignedBigInteger('patient_id');
            $table->foreign('patient_id')->references('id_patient')->on('patients')->onDelete('cascade');
            $table->unsignedBigInteger('maladie_id');
            $table->foreign('maladie_id')->references('id_maladie')->on('maladies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maladie_identifie');
        Schema::table('maladie_identifie', function (Blueprint $table) {
            $table->dropForeign(['doctor_id', 'patient_id', 'maladie_id']);
            $table->dropColumn('doctor_id');
            $table->dropColumn('patient_id');
            $table->dropColumn('maladie_id');
        });
    }
};
