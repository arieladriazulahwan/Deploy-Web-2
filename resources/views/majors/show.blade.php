<x-default-layout title="Major Details" section_title="Major Details">
    <div class="max-w-xl space-y-6 bg-white shadow rounded p-6">
        <div>
            <h2 class="text-lg font-semibold text-gray-700 mb-1">Name</h2>
            <p class="text-gray-900">{{ $major->name }}</p>
        </div>

        <div>
            <h2 class="text-lg font-semibold text-gray-700 mb-1">Code</h2>
            <p class="text-gray-900">{{ $major->code }}</p>
        </div>

        <div>
            <h2 class="text-lg font-semibold text-gray-700 mb-1">Description</h2>
            <p class="text-gray-900">{{ $major->description }}</p>
        </div>

        <div class="flex space-x-4 pt-4">
            <a href="{{ route('majors.edit', $major->id) }}" class="px-4 py-2 bg-amber-500 text-white rounded hover:bg-amber-600">Edit</a>
            <a href="{{ route('majors.index') }}" class="px-4 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Back</a>
        </div>
    </div>
</x-default-layout>
