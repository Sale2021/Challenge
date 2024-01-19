<?php

namespace App\Models;

use App\Helper\DateFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Quartier extends Model
{
    use DateFormat;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nom'];

    /**
     * Get all of the structures for the Quartier
     */
    public function structures(): HasMany
    {
        return $this->hasMany(Structure::class);
    }
}
