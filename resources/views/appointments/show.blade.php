<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Appointment Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="space-y-4">
                        <p><strong>Name:</strong> {{ $appointment->name }}</p>
                        <p><strong>Email:</strong> {{ $appointment->email }}</p>
                        <p><strong>Reason:</strong> {{ $appointment->reason }}</p>
                        <p><strong>Appointment Time:</strong> {{ $appointment->appointment_time }}</p>
                    </div>

                    <div class="mt-4">
                        <a href="{{ route('appointments.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Back to Appointments
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
