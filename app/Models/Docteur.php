<?php

namespace App\Models;

use App\Helper\DateFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Docteur extends Model
{
    use DateFormat;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['prenom', 'nom', 'specialite', 'contact'];

    /**
     * Get the departement that owns the Docteur
     */
    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }
}
