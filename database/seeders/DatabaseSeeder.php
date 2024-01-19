<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Enum\RoleEnum;
use App\Models\Departement;
use App\Models\Docteur;
use App\Models\Dossier;
use App\Models\Patient;
use App\Models\Planning;
use App\Models\Quartier;
use App\Models\Structure;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Departement::factory(5)->create();
        User::factory()->create(['email' => 'admin@gmail.com', 'role' => RoleEnum::ADMIN]);
        User::factory(10)->create();
        Quartier::factory(10)->create();
        Structure::factory(20)->create();
        Docteur::factory(10)->create();
        Patient::factory(20)->create();
        Dossier::factory(20)->create();
        Planning::factory(10)->create();
    }
}
