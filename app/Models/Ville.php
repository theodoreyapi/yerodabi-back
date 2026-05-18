<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $fillable = [
        'name',
        'pays_id',
    ];

    protected $table = 'ville';
    protected $primaryKey = 'id_ville';

    public function pays()
    {
        return $this->belongsTo(Pays::class, 'pays_id', 'id_pays');
    }
}
