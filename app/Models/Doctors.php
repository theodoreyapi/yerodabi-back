<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    protected $fillable = [
        'photo',
        'name',
        'last_name',
        'birth_date',
        'experience_an',
        'licence_medicale',
        'language',
        'sanguin',
        'genre',
        'email',
        'phone',
        'emplacement',
        'nationalite',
        'taille',
        'poids',
        'biographie',
        'password',
        'specialisation_id',
        'status',
    ];

    protected $table = 'doctors';
    protected $primaryKey = 'id_doctor';
}
