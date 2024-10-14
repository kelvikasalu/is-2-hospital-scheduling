<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    // Method for the patient dashboard
    public function dashboard()
    {
        return view('patient.dashboard');
    }

   public function index()
    {
        // Logic for retrieving patient data, if needed
    return view('patients.index'); 
    $patients = Patient::all();
    return view('admin.patients.index', compact('patients'));
    }
    
    public function showPatientDashboard()
{
    return view('patients.dashboard');
}


    // Method for booking an appointment
    public function bookAppointment()
    {
        // Logic for booking an appointment goes here
        return view('patient.book-appointment');
    }

    // Method for viewing doctors' schedules
    public function viewDoctorsSchedule()
    {
        // Logic for viewing doctors' schedules
        return view('patient.view-doctors-schedule');
    }

    // Method for deleting an appointment
    public function deleteAppointment($id)
    {
        // Logic for deleting an appointment
        return redirect()->route('patients.dashboard')->with('status', 'Appointment deleted successfully.');
    }

    // Method for giving feedback
    public function giveFeedback()
    {
        // Logic for giving feedback
        return view('patient.give-feedback');
    }
    public function patientDashboard()
{
    // Get the list of doctors or a specific doctor, depending on your logic
    $doctors = Doctor::all(); // Fetch all doctors from the database

    // Pass the doctor(s) to the view
    return view('patients.dashboard', compact('doctor'));
}
public function create() {
    return view('admin.patients.create');
}

public function store(Request $request) {
    // Validate and create a new patient
    Patient::create($request->all());
    return redirect()->route('admin.patients.index');
}

public function edit(Patient $patient) {
    return view('admin.patients.edit', compact('patient'));
}

public function update(Request $request, Patient $patient) {
    // Validate and update patient details
    $patient->update($request->all());
    return redirect()->route('admin.patients.index');
}

public function destroy(Patient $patient) {
    // Delete a patient
    $patient->delete();
    return redirect()->route('admin.patients.index');
}
}
