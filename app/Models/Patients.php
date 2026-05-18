<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected $fillable = [
        'photo',
        'name',
        'last_name',
        'birth_date',
        'sanguin',
        'genre',
        'email',
        'phone',
        'emplacement',
        'postal_code',
        'nationalite',
        'taille',
        'poids',
        'password',
        'pays_id',
        'status',
        'ville_id',
    ];

    protected $table = 'patients';
    protected $primaryKey = 'id_patient';
}
