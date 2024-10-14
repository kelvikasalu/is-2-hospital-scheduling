<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AdminController;





Route::get('/admin/doctors', [DoctorController::class, 'index'])->name('admin.doctors.index');
Route::get('/admin/patients', [PatientController::class, 'index'])->name('admin.patients.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Define the routes for the user dashboards
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/doctor/dashboard', [DoctorController::class, 'index'])->name('doctors.dashboard');
Route::get('/patient/dashboard', [PatientController::class, 'index'])->name('patients.dashboard');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');

// Admin Dashboard Route
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Doctors Management Route
Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');

// Patients Management Route
Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');

// Appointments Management Route
Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');

// Feedback Management Route
Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');

// Admin Settings Route
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');

//Doctors Routes
Route::get('/doctor/dashboard', [DoctorController::class, 'dashboard'])->name('doctors.dashboard');

// Doctor-related routes
Route::get('/doctor/appointments', [DoctorController::class, 'appointments'])->name('doctor.appointments');
Route::get('/doctor/patients', [DoctorController::class, 'patients'])->name('doctor.patients');
Route::get('/doctor/feedback', [DoctorController::class, 'feedback'])->name('doctor.feedback');


// Define resourceful routes for feedback
Route::resource('feedback', FeedbackController::class);


// Define resourceful routes for patients
Route::resource('patients', PatientController::class);

// Define resourceful routes for appointments
Route::resource('appointments', AppointmentController::class);

// Define resourceful routes for doctors
Route::resource('doctors', DoctorController::class);

//Routes for patient dashboard
Route::get('/patient/dashboard', [PatientController::class, 'dashboard'])->name('patients.dashboard');
Route::get('/patient/book-appointment', [PatientController::class, 'bookAppointment'])->name('patients.book-appointment');
Route::get('/patient/view-doctors-schedule', [PatientController::class, 'viewDoctorsSchedule'])->name('patients.view-doctors-schedule');
Route::delete('/patient/delete-appointment/{id}', [PatientController::class, 'deleteAppointment'])->name('patients.delete-appointment');
Route::get('/patient/give-feedback', [PatientController::class, 'giveFeedback'])->name('patients.give-feedback');
Route::get('/patient', [PatientController::class, 'index'])->name('patients.index');

// routes/web.php
Route::get('/book-appointment/{doctor}', [AppointmentController::class, 'showBookingForm'])->name('book-appointment');
Route::get('/appointments/book/{doctor}', [AppointmentController::class, 'showBookingForm'])->name('appointments.book');

// web.php
Route::get('/book-appointment/{doctor_id}', [AppointmentController::class, 'showSchedule'])->name('book-appointment');

//manage doctors
Route::get('/admin/doctors', [DoctorController::class, 'index'])->name('admin.doctors.index');
Route::get('/admin/doctors/create', [DoctorController::class, 'create'])->name('admin.doctors.create');
Route::post('/admin/doctors', [DoctorController::class, 'store'])->name('admin.doctors.store');
Route::get('/admin/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('admin.doctors.edit');
Route::put('/admin/doctors/{doctor}', [DoctorController::class, 'update'])->name('admin.doctors.update');
Route::delete('/admin/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('admin.doctors.destroy');

//manage patients
Route::get('/admin/patients', [PatientController::class, 'index'])->name('admin.patients.index');
Route::get('/admin/patients/create', [PatientController::class, 'create'])->name('admin.patients.create');
Route::post('/admin/patients', [PatientController::class, 'store'])->name('admin.patients.store');
Route::get('/admin/patients/{patient}/edit', [PatientController::class, 'edit'])->name('admin.patients.edit');
Route::put('/admin/patients/{patient}', [PatientController::class, 'update'])->name('admin.patients.update');
Route::delete('/admin/patients/{patient}', [PatientController::class, 'destroy'])->name('admin.patients.destroy');

// Manage patients
Route::get('/admin/patients', [PatientController::class, 'index'])->name('admin.patients.index');
Route::get('/admin/patients/create', [PatientController::class, 'create'])->name('admin.patients.create');
Route::post('/admin/patients', [PatientController::class, 'store'])->name('admin.patients.store');
Route::get('/admin/patients/{patient}/edit', [PatientController::class, 'edit'])->name('admin.patients.edit');
Route::put('/admin/patients/{patient}', [PatientController::class, 'update'])->name('admin.patients.update');
Route::delete('/admin/patients/{patient}', [PatientController::class, 'destroy'])->name('admin.patients.destroy');


//manage appointments
Route::get('/admin/appointments', [AppointmentController::class, 'index'])->name('admin.appointments.index');
Route::get('/admin/appointments/create', [AppointmentController::class, 'create'])->name('admin.appointments.create');
Route::post('/admin/appointments', [AppointmentController::class, 'store'])->name('admin.appointments.store');
Route::get('/admin/appointments/{appointment}/edit', [AppointmentController::class, 'edit'])->name('admin.appointments.edit');
Route::put('/admin/appointments/{appointment}', [AppointmentController::class, 'update'])->name('admin.appointments.update');
Route::delete('/admin/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('admin.appointments.destroy');



//manage feedback
Route::get('/admin/feedback', [FeedbackController::class, 'index'])->name('admin.feedback.index');

//admin controls
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');



Route::prefix('admin')->middleware('auth')->group(function() {
Route::get('/doctors', [DoctorController::class, 'index'])->name('admin.doctors.index');
Route::get('/doctors/create', [DoctorController::class, 'create'])->name('admin.doctors.create');
Route::post('/doctors', [DoctorController::class, 'store'])->name('admin.doctors.store');
Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('admin.doctors.edit');
Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('admin.doctors.update');
Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('admin.doctors.destroy');
});



require __DIR__.'/auth.php';
