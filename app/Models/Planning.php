<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Planning extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['debut', 'fin', 'type', 'patient_id', 'user_id', 'etat'];

    /**
     * Get the user that owns the Planning
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the patient that owns the Planning
     */
    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }
}
