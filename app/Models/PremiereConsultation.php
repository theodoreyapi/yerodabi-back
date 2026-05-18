<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PremiereConsultation extends Model
{
     protected $fillable = [
        'motif_consultation',
        'tarif_consultation',
        'date_consultation',
        'time_consultation',
        'meet_consultation',
        'statut_consultation',
        'doctor_id',
        'patient_id',
    ];

    protected $table = 'premiere_consultation';
    protected $primaryKey = 'id_premiere_consultation';
}
