<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Docteur;
use App\Models\Dossier;
use App\Models\Patient;
use App\Models\Planning;
use App\Models\Quartier;
use App\Models\Structure;
use Illuminate\Contracts\View\View;

class AdminController extends Controller
{
    public function dashboard(): View
    {
        return view('admin.dashboard');
    }

    public function structure(): View
    {
        $rows = Structure::latest()->paginate(15);

        return view('admin.structure.index', \compact('rows'));
    }

    public function dossier(): View
    {
        $rows = Dossier::with('patient')->latest()->paginate(15);
        $patient = Patient::all();

        return view('admin.dossier.index', \compact('rows', 'patient'));
    }

    public function quartier(): View
    {
        $rows = Quartier::latest()->paginate(15);

        return view('admin.quartier.index', \compact('rows'));
    }

    public function patient(): View
    {
        $rows = Patient::latest()->paginate(15);

        return view('admin.patient.index', \compact('rows'));
    }

    public function planning(): View
    {
        $agenda = Planning::all();
        $events = $agenda->map(function ($row) {
            return [
                'title' => $row->type,
                'start' => $row->debut,
                'end' => $row->fin,
                // 'allDay' => false,
            ];
        });

        $patient = Patient::all();

        return view('admin.planning.index', \compact('events', 'patient'));
    }

    public function docteur(): View
    {
        $rows = Docteur::latest()->paginate(15);

        return view('admin.docteur.index', \compact('rows'));
    }

    public function departement(): View
    {
        $rows = Departement::latest()->paginate(15);

        return view('admin.departement.index', \compact('rows'));
    }
}
