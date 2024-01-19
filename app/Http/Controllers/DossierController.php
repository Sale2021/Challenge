<?php

namespace App\Http\Controllers;

use App\Helper\DeleteAction;
use App\Http\Requests\StoreDossierRequest;
use App\Models\Dossier;

class DossierController extends Controller
{
    use DeleteAction;

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDossierRequest $request)
    {
        Dossier::create($request->validated());
        toastr()->success('dossier ajouter avec success!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Dossier $dossier)
    {
        return view('dossier.show', compact('dossier'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dossier $dossier)
    {
        return view('dossier.update', compact('dossier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDossierRequest $request, Dossier $dossier)
    {
        $dossier->update($request->validated());
        toastr()->success('dossier mise à jour avec success!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dossier $dossier)
    {
        $delete = Dossier::findOrFail($dossier);

        return $this->supp($delete);
    }
}
