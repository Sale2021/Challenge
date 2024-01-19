<?php

namespace App\Models;

use App\Helper\DateFormat;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use DateFormat;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['prenom', 'nom', 'contact', 'reference', 'sexe', 'naissance', 'email', 'adresse', 'sang'];

    /**
     * Get the dossier associated with the Patient
     */
    public function dossier(): HasOne
    {
        return $this->hasOne(Dossier::class);
    }
}
