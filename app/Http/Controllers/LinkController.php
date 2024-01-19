<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Structure;
use Illuminate\Contracts\View\View;

class LinkController extends Controller
{
    public function pharmacie(): View
    {
        $rows = Structure::with('quartier')->where('type', 'pharmacie')->paginate(10);
        $quartier = Quartier::all();

        return view('pharmacie', \compact('rows', 'quartier'));
    }

    public function clinique(): View
    {
        $rows = Structure::where('type', 'clinique')->paginate(10);
        $quartier = Quartier::all();

        return view('clinique', \compact('rows', 'quartier'));
    }

    public function chat(): View
    {

        // dd($result->choices[0]->message->content);

        return view('chat');
    }
}
