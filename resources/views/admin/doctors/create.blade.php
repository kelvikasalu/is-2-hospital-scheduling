<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Add New Doctor') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold mb-4">Add New Doctor</h1>

            <form action="{{ route('admin.doctors.store') }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" id="name" name="name" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="specialization" class="block text-gray-700">Specialization</label>
                    <input type="text" id="specialization" name="specialization" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-gray-700">Phone</label>
                    <input type="text" id="phone" name="phone" required class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                </div>
                <button type="submit" class="btn btn-primary">Create Doctor</button>
            </form>
        </div>
    </div>
</x-app-layout>
