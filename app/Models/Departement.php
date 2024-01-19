<?php

namespace App\Models;

use App\Helper\DateFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departement extends Model
{
    use DateFormat;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom'];

    /**
     * Get all of the docteurs for the Departement
     */
    public function docteurs(): HasMany
    {
        return $this->hasMany(Docteur::class);
    }

    /**
     * Get all of the users for the Departement
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
