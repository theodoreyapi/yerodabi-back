<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Specialisations extends Model
{
    protected $fillable = [
        'nom_specialisation',
        'description_specialisation',
    ];

    protected $table = 'specialisations';
    protected $primaryKey = 'id_specialisation';
}
