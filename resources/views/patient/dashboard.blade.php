<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Patient Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to the Patient Dashboard!") }}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-6 mt-6">
                <!-- Book Appointment 
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("Book Appointment") }}</h3>
                        <p class="mt-2">{{ __("Schedule a new appointment with a doctor.") }}</p>
                        <a href="{{ route('book-appointment', $doctor->id) }}" class="btn btn-primary">
    Book Now
</a>-->
<!-- Book Appointment Section -->
<div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h3 class="text-lg font-semibold">{{ __("Book Appointment") }}</h3>
        <p class="mt-2">{{ __("Schedule a new appointment with a doctor.") }}</p>

        <!-- Check if there are doctors available -->
        @if($doctors->isNotEmpty())
            @foreach($doctors as $doctor)
                <a href="{{ route('book-appointment', $doctor->id) }}" class="btn btn-primary">
                    {{ __("Book Appointment with Dr. ") . $doctor->name }}
                </a>
            @endforeach
        @else
            <p>{{ __("No doctors available at the moment.") }}</p>
            <a href="{{ route('book-appointment', $doctor->id) }}" class="btn btn-primary">
    Book Now
</a>
        @endif
    </div>
</div>


                    </div>
                </div>

                <!-- View Doctors' Schedule -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("View Doctors' Schedule") }}</h3>
                        <p class="mt-2">{{ __("Check the availability of doctors.") }}</p>
                        <a href="{{ route('patients.view-doctors-schedule') }}" class="text-blue-500 hover:underline">{{ __("View Schedule") }}</a>
                    </div>
                </div>

                <!-- Delete Appointment -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("Delete Appointment") }}</h3>
                        <p class="mt-2">{{ __("Cancel an existing appointment.") }}</p>
                        <!-- Add appointment ID dynamically in actual implementation -->
                        <form action="{{ route('patients.delete-appointment', ['id' => 1]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:underline">{{ __("Delete Appointment") }}</button>
                        </form>
                    </div>
                </div>

                <!-- Give Feedback -->
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <h3 class="text-lg font-semibold">{{ __("Give Feedback") }}</h3>
                        <p class="mt-2">{{ __("Share your feedback about the hospital services.") }}</p>
                        <a href="{{ route('patients.give-feedback') }}" class="text-blue-500 hover:underline">{{ __("Give Feedback") }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
