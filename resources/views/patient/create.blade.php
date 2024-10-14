@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class="mb-4">Add New Patient</h1>

    <form action="{{ route('admin.patients.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Patient Name</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone Number</label>
            <input type="text" name="phone" class="form-control" id="phone" required>
        </div>

        <button type="submit" class="btn btn-success">Add Patient</button>
        <a href="{{ route('admin.patients.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>
@endsection
