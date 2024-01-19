<?php

namespace App\Http\Controllers;

use App\Helper\DeleteAction;
use App\Http\Requests\StorePlanningRequest;
use App\Models\Planning;

class PlanningController extends Controller
{
    use DeleteAction;

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePlanningRequest $request)
    {
        Planning::create($request->validated());
        toastr()->success('Planning ajouter avec success!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Planning $planning)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Planning $planning)
    {
        return view('planning.update', compact('planning'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StorePlanningRequest $request, Planning $planning)
    {
        $planning->update($request->validated());
        toastr()->success('Planning mise à jour avec success!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Planning $planning)
    {
        $delete = Planning::findOrFail($planning);

        return $this->supp($delete);
    }
}
