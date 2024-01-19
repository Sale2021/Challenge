<?php

namespace App\Models;

use App\Helper\DateFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dossier extends Model
{
    use DateFormat;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['tuteur', 'poids', 'taille', 'tension', 'frequence', 'temperature', 'observation', 'patient_id', 'allergie'];

    /**
     * Get the patient that owns the Dossier
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
