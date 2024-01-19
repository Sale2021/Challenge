<?php

namespace App\Http\Controllers;

use App\Helper\DeleteAction;
use App\Http\Requests\StoreStructureRequest;
use App\Models\Structure;

class StructureController extends Controller
{
    use DeleteAction;

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStructureRequest $request)
    {
        Structure::create($request->validated());
        toastr()->success('structure ajouter avec success!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Structure $structure)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Structure $structure)
    {
        return view('structure.update', compact('structure'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreStructureRequest $request, Structure $structure)
    {
        $structure->update($request->validated());
        toastr()->success('structure mise à jour avec success!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Structure $structure)
    {
        $delete = Structure::findOrFail($structure);

        return $this->supp($delete);
    }
}
