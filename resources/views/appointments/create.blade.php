@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Schedule New Appointment</h1>

    <form action="{{ route('admin.appointments.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="patient_id" class="form-label">Select Patient</label>
            <select name="patient_id" id="patient_id" class="form-control" required>
                <option value="">-- Select Patient --</option>
                @foreach($patients as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="doctor_id" class="form-label">Select Doctor</label>
            <select name="doctor_id" id="doctor_id" class="form-control" required>
                <option value="">-- Select Doctor --</option>
                @foreach($doctors as $doctor)
                    <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="date" class="form-label">Appointment Date</label>
            <input type="date" name="date" class="form-control" id="date" required>
        </div>

        <div class="mb-3">
            <label for="time" class="form-label">Appointment Time</label>
            <input type="time" name="time" class="form-control" id="time" required>
        </div>

        <button type="submit" class="btn btn-success">Schedule Appointment</button>
        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
