<?php

namespace App\Http\Controllers;

use App\Helper\DeleteAction;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    use DeleteAction;

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Patient::create($request->validated());
        toastr()->success('Patient ajouter avec success!');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Patient $patient)
    {
        return view('patient.update', compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
    {
        $patient->update($request->validated());
        toastr()->success('Patient mise à jour avec success!');

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
    {
        $delete = Patient::findOrFail($patient);

        return $this->supp($delete);
    }
}
