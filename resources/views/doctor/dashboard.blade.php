{{-- resources/views/doctor/dashboard.blade.php --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Doctor Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to the Doctor Dashboard!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-6">
                <!-- View Appointments -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("View Appointments") }}</h3>
                        <p class="mt-2">{{ __("View and manage your scheduled appointments.") }}</p>
                        <a href="{{ route('doctor.appointments') }}" class="text-blue-500 hover:underline">{{ __("Manage Appointments") }}</a>
                    </div>
                </div>

                <!-- View Patients -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("View Patients") }}</h3>
                        <p class="mt-2">{{ __("View patient details and history.") }}</p>
                        <a href="{{ route('doctor.patients') }}" class="text-blue-500 hover:underline">{{ __("View Patients") }}</a>
                    </div>
                </div>

                <!-- View Feedback -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("View Feedback") }}</h3>
                        <p class="mt-2">{{ __("Read patient feedback and reviews.") }}</p>
                        <a href="{{ route('doctor.feedback') }}" class="text-blue-500 hover:underline">{{ __("View Feedback") }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
