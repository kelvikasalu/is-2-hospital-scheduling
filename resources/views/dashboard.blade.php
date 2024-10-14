{{-- resources/views/dashboard.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <h1>User Dashboard</h1>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <div class="p-6 bg-white shadow-md rounded-lg text-center">
                    <h2 class="font-bold text-lg">Admin</h2>
                    <a href="{{ route('admin.dashboard') }}" class="mt-2 inline-block bg-blue-500 text-white py-2 px-4 rounded">
                        Go to Admin Dashboard
                    </a>
                </div>
                <div class="p-6 bg-white shadow-md rounded-lg text-center">
                    <h2 class="font-bold text-lg">Doctor</h2>
                    <a href="{{ route('doctors.dashboard') }}" class="mt-2 inline-block bg-green-500 text-white py-2 px-4 rounded">
                        Go to Doctor Dashboard
                    </a>
                </div>
                <div class="p-6 bg-white shadow-md rounded-lg text-center">
                    <h2 class="font-bold text-lg">Patient</h2>
                    <a href="{{ route('patients.dashboard') }}" class="mt-2 inline-block bg-yellow-500 text-white py-2 px-4 rounded">
                        Go to Patient Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
