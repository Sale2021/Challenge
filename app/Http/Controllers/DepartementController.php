<?php

namespace App\Http\Controllers;

use App\Helper\DeleteAction;
use App\Models\Departement;
use Illuminate\Http\Request;

class DepartementController extends Controller
{
    use DeleteAction;

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Departement::create($request->validated());
        toastr()->success('Departement ajouter avec success!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Departement $departement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Departement $departement)
    {
        return view('departement.update', compact('departement'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Departement $departement)
    {
        $departement->update($request->validated());
        toastr()->success('Departement mise à jour avec success!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Departement $departement)
    {
        $delete = Departement::findOrFail($departement);

        return $this->supp($delete);
    }
}
