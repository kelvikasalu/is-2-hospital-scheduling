@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Patients List</h1>
    
    <a href="{{ route('admin.patients.create') }}" class="btn btn-primary mb-3">Add New Patient</a>
    
    @if($patients->isEmpty())
        <p>No patients found.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $patient)
                    <tr>
                        <td>{{ $patient->id }}</td>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>{{ $patient->phone }}</td>
                        <td>
                            <a href="{{ route('admin.patients.edit', $patient->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('admin.patients.destroy', $patient->id) }}" method="POST" style="display:inline-block;">
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
