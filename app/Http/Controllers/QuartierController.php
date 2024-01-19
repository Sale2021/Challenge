<?php

namespace App\Http\Controllers;

use App\Helper\DeleteAction;
use App\Models\Quartier;
use Illuminate\Http\Request;

class QuartierController extends Controller
{
    use DeleteAction;

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['nom' => ['required']]);
        Quartier::create(['nom' => $request->nom]);
        toastr()->success('quartier ajouter avec success!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Quartier $quartier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Quartier $quartier)
    {
        return view('quartier.update', compact('quartier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Quartier $quartier)
    {
        $request->validate(['nom' => ['required']]);
        $quartier->update($request->nom);
        toastr()->success('quartier mise à jour avec success!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Quartier $quartier)
    {
        $delete = quartier::findOrFail($quartier);

        return $this->supp($delete);
    }
}
