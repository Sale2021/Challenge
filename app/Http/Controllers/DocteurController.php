<?php

namespace App\Http\Controllers;

use App\Helper\DeleteAction;
use App\Http\Requests\StoreDocteurRequest;
use App\Models\Docteur;

class DocteurController extends Controller
{
    use DeleteAction;

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocteurRequest $request)
    {
        Docteur::create($request->validated());
        toastr()->success('Docteur ajouter avec success!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Docteur $docteur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Docteur $docteur)
    {
        return view('docteur.update', compact('docteur'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreDocteurRequest $request, Docteur $docteur)
    {
        $docteur->update($request->validated());
        toastr()->success('docteur mise à jour avec success!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Docteur $docteur)
    {
        $delete = Docteur::findOrFail($docteur);

        return $this->supp($delete);
    }
}
