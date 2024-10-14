<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Patient Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <h1>Manage Patients</h1>

            <a href="{{ route('admin.patients.create') }}" class="btn btn-primary mb-3">Add New Patient</a>

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                        <tr>
                            <td>{{ $patient->name }}</td>
                            <td>{{ $patient->email }}</td>
                            <td>{{ $patient->phone }}</td>
                            <td>
                                <a href="{{ route('admin.patients.edit', $patient->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('admin.patients.destroy', $patient->id) }}" method="POST" style="display:inline;">
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
</x-app-layout>
