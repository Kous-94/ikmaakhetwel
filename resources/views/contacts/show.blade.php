<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Contact') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="mb-4">
                        <strong>Name:</strong> {{ $contact->name }}
                    </div>
                    <div class="mb-4">
                        <strong>Phone:</strong> {{ $contact->phone }}
                    </div>
                    <div class="mb-4">
                        <strong>Email:</strong> {{ $contact->email }}
                    </div>
                    <div class="mb-4">
                        <strong>Message:</strong> {{ $contact->message }}
                    </div>

                    <a href="{{ route('contacts.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Back to Contacts
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
