<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Departement
 *
 * @property int $id
 * @property string $nom
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Docteur> $docteurs
 * @property-read int|null $docteurs_count
 * @property-read string $delai_format
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\DepartementFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Departement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Departement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Departement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departement whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Departement whereUpdatedAt($value)
 */
	class Departement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Docteur
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property string $specialite
 * @property string $contact
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Departement|null $departement
 * @property-read string $delai_format
 * @method static \Database\Factories\DocteurFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur query()
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur whereSpecialite($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Docteur whereUpdatedAt($value)
 */
	class Docteur extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Dossier
 *
 * @property int $id
 * @property string $sang
 * @property string $poids
 * @property string $taille
 * @property string $tension
 * @property string $frequence
 * @property string $temperature
 * @property string $tuteur
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $delai_format
 * @property-read \App\Models\Patient|null $patient
 * @method static \Database\Factories\DossierFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier whereFrequence($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier wherePoids($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier whereSang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier whereTaille($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier whereTemperature($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier whereTension($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier whereTuteur($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dossier whereUpdatedAt($value)
 */
	class Dossier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Patient
 *
 * @property int $id
 * @property string $prenom
 * @property string $nom
 * @property string $contact
 * @property string $sexe
 * @property string $naissance
 * @property string $adresse
 * @property string $sang
 * @property string|null $email
 * @property string|null $reference
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Dossier|null $dossier
 * @property-read string $delai_format
 * @method static \Database\Factories\PatientFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient query()
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereAdresse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNaissance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient wherePrenom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereReference($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereSang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereSexe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Patient whereUpdatedAt($value)
 */
	class Patient extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Planning
 *
 * @property int $id
 * @property int $user_id
 * @property int $patient_id
 * @property string $type
 * @property string $debut
 * @property string $fin
 * @property string $etat
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Patient $patient
 * @property-read \App\Models\User $user
 * @method static \Database\Factories\PlanningFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Planning newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Planning newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Planning query()
 * @method static \Illuminate\Database\Eloquent\Builder|Planning whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Planning whereDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Planning whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Planning whereFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Planning whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Planning wherePatientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Planning whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Planning whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Planning whereUserId($value)
 */
	class Planning extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Quartier
 *
 * @property int $id
 * @property string $nom
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $delai_format
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Structure> $structures
 * @property-read int|null $structures_count
 * @method static \Database\Factories\QuartierFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Quartier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quartier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Quartier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Quartier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quartier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quartier whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Quartier whereUpdatedAt($value)
 */
	class Quartier extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Structure
 *
 * @property int $id
 * @property int $quartier_id
 * @property string $type
 * @property string $nom
 * @property string $contact
 * @property string $map
 * @property string $horaire
 * @property string $assurance
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $delai_format
 * @property-read \App\Models\Quartier $quartier
 * @method static \Database\Factories\StructureFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Structure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Structure newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Structure query()
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereAssurance($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereHoraire($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereMap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereQuartierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Structure whereUpdatedAt($value)
 */
	class Structure extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property int $departement_id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property \App\Enum\RoleEnum $role
 * @property string $etat
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Departement $departement
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Planning> $plannings
 * @property-read int|null $plannings_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDepartementId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEtat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

