@extends('layouts.admin')

@section('content')
<div class="container mx-auto py-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold">Manage Doctors</h2>
        <a href="{{ route('admin.doctors.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded">
            Add New Doctor
        </a>
    </div>

    <table class="min-w-full bg-white dark:bg-gray-800 shadow-md rounded-lg">
        <thead>
            <tr class="bg-gray-100 dark:bg-gray-700">
                <th class="py-2 px-4">ID</th>
                <th class="py-2 px-4">Name</th>
                <th class="py-2 px-4">Specialization</th>
                <th class="py-2 px-4">Email</th>
                <th class="py-2 px-4">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
            <tr>
                <td class="border px-4 py-2">{{ $doctor->id }}</td>
                <td class="border px-4 py-2">{{ $doctor->name }}</td>
                <td class="border px-4 py-2">{{ $doctor->specialization }}</td>
                <td class="border px-4 py-2">{{ $doctor->email }}</td>
                <td class="border px-4 py-2 flex space-x-2">
                    <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="text-blue-500 hover:underline">Edit</a>
                    <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this doctor?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
