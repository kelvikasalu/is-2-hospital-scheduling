{{-- resources/views/doctors/index.blade.php --}}

@extends('layouts.app')

@section('content')

<h1>Available Doctors</h1>
    
    <ul>
        @foreach($doctors as $doctor)
            <li>
                Dr. {{ $doctor->name }} - 
                <a href="{{ route('book-appointment', $doctor->id) }}" class="btn btn-primary">
                    Book Now
                </a>
            </li>
        @endforeach
    </ul>
    <div class="container">
        <h1>Doctors List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Specialization</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->id }}</td>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->specialization }}</td>
                        <td>
                            <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
