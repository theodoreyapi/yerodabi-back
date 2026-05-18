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
        Schema::create('commande_medicament', function (Blueprint $table) {
            $table->id('id_commande_medicament')->primary();
            $table->string('rajout_medoc')->nullable();
            $table->string('tarif_medoc')->nullable();
            $table->string('ordonnance_medoc')->nullable();
            $table->string('medicament_medoc')->nullable();
            $table->date('livraison_medoc')->nullable();
            $table->string('adresse_medoc');
            $table->string('statut_medoc')->default('attente')->comment('attente, modifie, annuler, confirme');
            $table->unsignedBigInteger('doctor_id')->nullable();
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
        Schema::dropIfExists('commande_medicament');
        Schema::table('commande_medicament', function (Blueprint $table) {
            $table->dropForeign(['doctor_id', 'patient_id']);
            $table->dropColumn('doctor_id');
            $table->dropColumn('patient_id');
        });
    }
};
