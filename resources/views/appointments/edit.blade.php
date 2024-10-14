@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Appointment</h1>

    <form action="{{ route('admin.appointments.update', $appointment->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="patient_id" class="form-label">Select Patient</label>
            <select name="patient_id" id="patient_id" class="form-control" required>
                <option value="{{ $appointment->patient_id }}">{{ $appointment->patient->name }}</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="doctor_id" class="form-label">Select Doctor</label>
            <select name="doctor_id" id="doctor_id" class="form-control" required>
                <option value="{{ $appointment->doctor_id }}">{{ $appointment->doctor->name }}</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Appointment Date</label>
            <input type="date" name="date" class="form-control" id="date" value="{{ $appointment->date }}" required>
        </div>

        <div class="mb-3">
            <label for="time" class="form-label">Appointment Time</label>
            <input type="time" name="time" class="form-control" id="time" value="{{ $appointment->time }}" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="{{ $appointment->status }}">{{ ucfirst($appointment->status) }}</option>
                <option value="pending">Pending</option>
                <option value="confirmed">Confirmed</option>
                <option value="cancelled">Cancelled</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update Appointment</button>
        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
