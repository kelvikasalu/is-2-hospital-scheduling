<?php

namespace App\Http\Controllers\Admin;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    // List all patients
   // In app/Http/Controllers/PatientController.php
/*
public function index()
{
    // Assuming you are fetching patients data
    $patients = Patient::all(); // Fetch patients from the database
    return view('admin.patients.index', compact('patients')); // Make sure to use 'admin.patients.index'
}
*/

    // Show form to create a new patient
    public function create()
    {
        return view('admin.patients.create');
    }

    // Store a new patient
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:patients,email',
            'phone' => 'required',
        ]);

        Patient::create($request->all());
        return redirect()->route('admin.patients.index')->with('success', 'Patient created successfully.');
    }

    // Show form to edit patient
    public function edit(Patient $patient)
    {
        return view('admin.patients.edit', compact('patient'));
    }

    // Update patient details
    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:patients,email,' . $patient->id,
            'phone' => 'required',
        ]);

        $patient->update($request->all());
        return redirect()->route('admin.patients.index')->with('success', 'Patient updated successfully.');
    }

    // Delete a patient
    public function destroy(Patient $patient)
    {
        $patient->delete();
        return redirect()->route('admin.patients.index')->with('success', 'Patient deleted successfully.');
    }
}
