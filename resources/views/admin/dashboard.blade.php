{{-- resources/views/admin/dashboard.blade.php --}}
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Hospital Appointment Scheduling System Dashboard') }}
        </h2>
        <link rel="stylesheet" href="{{ asset('css/admin.dashboard.css') }}">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to the Admin Dashboard!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <!-- Doctors Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("Manage Doctors") }}</h3>
                        <p class="mt-2">{{ __("Add, update, or remove doctors from the system.") }}</p>
                        <a href="{{ route('doctors.index') }}" class="text-blue-500 hover:underline">{{ __("View Doctors") }}</a>
                    </div>
                </div>

                <!-- Patients Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("Manage Patients") }}</h3>
                        <p class="mt-2">{{ __("View, add, or update patient information.") }}</p>
                        <a href="{{ route('patients.index') }}" class="text-blue-500 hover:underline">{{ __("View Patients") }}</a>
                    </div>
                </div>

                <!-- Appointments Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("Manage Appointments") }}</h3>
                        <p class="mt-2">{{ __("Schedule, reschedule, or cancel appointments.") }}</p>
                        <a href="{{ route('appointments.index') }}" class="text-blue-500 hover:underline">{{ __("View Appointments") }}</a>
                    </div>
                </div>

                <!-- Feedback Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("Manage Feedback") }}</h3>
                        <p class="mt-2">{{ __("View patient feedback and manage responses.") }}</p>
                        <a href="{{ route('feedback.index') }}" class="text-blue-500 hover:underline">{{ __("View Feedback") }}</a>
                    </div>
                </div>

                <!-- Admin Controls Section -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("Admin Controls") }}</h3>
                        <p class="mt-2">{{ __("Manage user roles, system settings, and reports.") }}</p>
                        <a href="{{ route('admin.settings') }}" class="text-blue-500 hover:underline">{{ __("System Settings") }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
