@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Appointments List</h1>

    <a href="{{ route('admin.appointments.create') }}" class="btn btn-primary mb-3">Schedule New Appointment</a>

    @if($appointments->isEmpty())
        <p>No appointments found.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Patient</th>
                    <th>Doctor</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->id }}</td>
                        <td>{{ $appointment->patient->name }}</td>
                        <td>{{ $appointment->doctor->name }}</td>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->time }}</td>
                        <td>{{ $appointment->status }}</td>
                        <td>
                            <a href="{{ route('admin.appointments.edit', $appointment->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.appointments.destroy', $appointment->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
