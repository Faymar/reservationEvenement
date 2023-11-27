<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = [
        'libelle',
        'description',
        'date_limite_iscription',
        'image',
        'est_clos',
        'date_evenement',
    ];

    public function association()
    {
        return $this->belongsTo(Association::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('reference', 'est_acepte')->withTimestamps();
    }
}
