@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-6">
    <h2 class="text-2xl font-bold mb-6">Add New Doctor</h2>

    <form action="{{ route('admin.doctors.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" class="w-full p-2 border rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="specialization" class="block text-sm font-medium text-gray-700">Specialization</label>
            <input type="text" name="specialization" id="specialization" class="w-full p-2 border rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" class="w-full p-2 border rounded-lg" required>
        </div>

        <div class="mb-4">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
            <input type="text" name="phone" id="phone" class="w-full p-2 border rounded-lg">
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">
            Save Doctor
        </button>
    </form>
</div>
@endsection
