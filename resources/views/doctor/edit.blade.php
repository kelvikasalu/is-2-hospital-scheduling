@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Doctor: {{ $doctor->name }}</h1>

    <form action="{{ route('admin.doctors.update', $doctor->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Doctor Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $doctor->name }}" required>
        </div>

        <div class="mb-3">
            <label for="specialization" class="form-label">Specialization</label>
            <input type="text" name="specialization" class="form-control" id="specialization" value="{{ $doctor->specialization }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Doctor</button>
        <a href="{{ route('admin.doctors.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
