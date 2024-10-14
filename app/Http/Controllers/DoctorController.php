<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    // Method to load the doctor's dashboard
    public function dashboard()
    {
        // Return the doctor dashboard view
        return view('doctor.dashboard');
    }
    public function appointments()
{
    // Logic to fetch and display doctor's appointments
    return view('doctor.appointments');
}

public function patients()
{
    // Logic to fetch and display doctor's patients
    return view('doctor.patients');
}

public function feedback()
{
    // Logic to fetch and display feedback for the doctor
    return view('doctor.feedback');
}

public function showDoctor($id)
{
    $doctor = Doctor::find($id); // Fetch the doctor record

    if (!$doctor) {
        return redirect()->back()->with('error', 'Doctor not found');
    }

    return view('doctor.show', compact('doctor')); // Pass $doctor to the view
}
public function index() {
    $doctors = Doctor::all();
    return view('admin.doctors.index', compact('doctors'));
}

public function create() {
    return view('admin.doctors.create');
}

public function store(Request $request) {
    // Validate and create a new doctor
    Doctor::create($request->all());
    return redirect()->route('admin.doctors.index');
}

public function edit(Doctor $doctor) {
    return view('admin.doctors.edit', compact('doctor'));
}

public function update(Request $request, Doctor $doctor) {
    // Validate and update doctor details
    $doctor->update($request->all());
    return redirect()->route('admin.doctors.index');
}

public function destroy(Doctor $doctor) {
    // Delete a doctor
    $doctor->delete();
    return redirect()->route('admin.doctors.index');
}


}
