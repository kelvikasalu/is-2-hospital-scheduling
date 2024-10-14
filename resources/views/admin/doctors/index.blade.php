<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Doctor Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold mb-4">Manage Doctors</h1>

            <a href="{{ route('admin.doctors.create') }}" class="btn btn-primary mb-4">Add New Doctor</a>

            <div class="overflow-x-auto">
                <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-lg">
                    <thead class="bg-gray-200">
                        <tr>
                            <th class="py-2 px-4 text-left text-gray-700">Name</th>
                            <th class="py-2 px-4 text-left text-gray-700">Specialization</th>
                            <th class="py-2 px-4 text-left text-gray-700">Email</th>
                            <th class="py-2 px-4 text-left text-gray-700">Phone</th>
                            <th class="py-2 px-4 text-left text-gray-700">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($doctors as $doctor)
                            <tr class="border-b hover:bg-gray-100">
                                <td class="py-2 px-4">{{ $doctor->name }}</td>
                                <td class="py-2 px-4">{{ $doctor->specialization }}</td>
                                <td class="py-2 px-4">{{ $doctor->email }}</td>
                                <td class="py-2 px-4">{{ $doctor->phone }}</td>
                                <td class="py-2 px-4">
                                    <a href="{{ route('admin.doctors.edit', $doctor->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.doctors.destroy', $doctor->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
