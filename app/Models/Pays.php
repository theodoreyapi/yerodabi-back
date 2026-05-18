<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pays extends Model
{
    protected $fillable = [
        'name',
        'iso_code',
        'phone_code',
    ];

    protected $table = 'pays';
    protected $primaryKey = 'id_pays';

    public function villes()
    {
        return $this->hasMany(Ville::class, 'pays_id', 'id_pays');
    }
}
