<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Contacts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="min-w-full bg-white dark:bg-gray-800">
                        <thead>
                            <tr>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-left">Name</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-left">Phone</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-left">Email</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-left">Message</th>
                                <th class="py-2 px-4 border-b dark:border-gray-600 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($contacts as $contact)
                                <tr class="hover:bg-gray-100 dark:hover:bg-gray-700">
                                    <td class="py-2 px-4 border-b dark:border-gray-600">{{ $contact->name }}</td>
                                    <td class="py-2 px-4 border-b dark:border-gray-600">{{ $contact->phone }}</td>
                                    <td class="py-2 px-4 border-b dark:border-gray-600">{{ $contact->email }}</td>
                                    <td class="py-2 px-4 border-b dark:border-gray-600">{{ $contact->message }}</td>
                                    <td class="py-2 px-4 border-b dark:border-gray-600">
                                        <a href="{{ route('contacts.show', $contact->id) }}" class="text-blue-500 hover:underline">View</a>
                                        <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:underline" onclick="return confirm('Are you sure you want to delete this contact?');">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
