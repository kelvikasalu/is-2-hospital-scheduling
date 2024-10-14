<!-- resources/views/appointments/book.blade.php -->

@extends('layouts.app')

@section('content')
<h1>Booking for Dr. {{ $doctor->name }}</h1>

<!-- Schedule and booking form using $doctor and $schedule -->
<form action="{{ route('appointments.book', $doctor->id) }}" method="POST">
    @csrf
    <select name="appointment_time">
        @foreach ($schedule as $slot)
            <option value="{{ $slot->id }}">{{ $slot->day_of_week }} {{ $slot->start_time }} - {{ $slot->end_time }}</option>
        @endforeach
    </select>
    <button type="submit">Book Now</button>
</form>


    <!-- Form to Book Appointment -->
    <form action="{{ route('appointments.store', $doctor->id) }}" method="POST">
        @csrf

        <!-- Example input for selecting appointment time -->
        <label for="appointment_time">Choose a time:</label>
        <select name="appointment_time" id="appointment_time">
            @foreach($schedule as $timeSlot)
                <option value="{{ $timeSlot->id }}">{{ $timeSlot->day }} - {{ $timeSlot->time }}</option>
            @endforeach
        </select>

        <!-- Additional fields like patient name, etc. -->
        <button type="submit" class="btn btn-success">Confirm Appointment</button>
    </form>
@endsection
