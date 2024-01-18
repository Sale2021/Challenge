<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Docteur extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['prenom', 'specialite', 'contact'];

    /**
     * Get the departement that owns the Docteur
     */
    public function departement(): BelongsTo
    {
        return $this->belongsTo(Departement::class);
    }
}
