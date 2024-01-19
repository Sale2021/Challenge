<?php

namespace App\Models;

use App\Helper\DateFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Structure extends Model
{
    use DateFormat;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['type', 'nom', 'contact', 'map', 'horaire', 'assurance', 'quartier_id'];

    /**
     * Get the quartie that owns the Structure
     */
    public function quartier(): BelongsTo
    {
        return $this->belongsTo(Quartier::class);
    }
}
