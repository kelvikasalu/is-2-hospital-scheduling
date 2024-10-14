<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;  // Make sure to import the Doctor model
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    // Method to fetch and display all appointments
    public function index()
    {
        $appointments = Appointment::all(); // Fetch all appointments from the database
        return view('appointments.index', compact('appointments')); // Return the view with appointments data
    }

    // Method to fetch doctor's schedule based on doctor_id
    public function showSchedule($doctor_id)
    {
        // Fetch the doctor's schedule based on the doctor_id
        $doctor = Doctor::find($doctor_id);
        $schedule = $doctor->appointments()->where('status', 'available')->get();

        // Pass the schedule data to the view
        return view('appointments.book', compact('doctor', 'schedule'));
    }

    // Method to display the booking form for a specific doctor
    public function showBookingForm(Doctor $doctor)
    {
        // Assuming the Doctor model has a relationship to the schedule
        $schedule = $doctor->schedule; // Get the doctor's schedule (modify based on your structure)
        
        return view('appointments.book', compact('doctor', 'schedule'));
    }

    // Method to handle booking the appointment
    public function bookAppointment(Request $request, Doctor $doctor)
    {
        // Validate the incoming request
        $request->validate([
            'appointment_time' => 'required|exists:schedules,id', // Assuming 'schedules' is the table for time slots
        ]);

        // Logic to save the appointment
        $appointment = new Appointment();
        $appointment->doctor_id = $doctor->id;
        $appointment->patient_id = auth()->user()->id; // Assuming patient is the logged-in user
        $appointment->schedule_id = $request->appointment_time;
        $appointment->save();

        // Redirect back to appointments list with success message
        return redirect()->route('appointments.index')->with('success', 'Appointment booked successfully!');
    }
    
    public function create() {
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('admin.appointments.create', compact('doctors', 'patients'));
    }
    
    public function store(Request $request) {
        // Validate and create a new appointment
        Appointment::create($request->all());
        return redirect()->route('admin.appointments.index');
    }
    
    public function edit(Appointment $appointment) {
        $doctors = Doctor::all();
        $patients = Patient::all();
        return view('admin.appointments.edit', compact('appointment', 'doctors', 'patients'));
    }
    
    public function update(Request $request, Appointment $appointment) {
        // Validate and update appointment details
        $appointment->update($request->all());
        return redirect()->route('admin.appointments.index');
    }
    
    public function destroy(Appointment $appointment) {
        // Delete an appointment
        $appointment->delete();
        return redirect()->route('admin.appointments.index');
    }
    
}
