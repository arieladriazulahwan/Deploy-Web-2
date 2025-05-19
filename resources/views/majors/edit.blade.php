<x-default-layout title="Edit Major" section_title="Edit Major">
    <form action="{{ route('majors.update', $major->id) }}" method="POST" class="max-w-xl space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="block mb-1 font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $major->name) }}" class="w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <label for="description" class="block mb-1 font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="4" class="w-full border-gray-300 rounded-md shadow-sm">{{ old('description', $major->description) }}</textarea>
        </div>

        <div>
            <label for="code" class="block mb-1 font-medium text-gray-700">Code</label>
            <input type="text" id="code" name="code" value="{{ old('code', $major->code) }}" class="w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <button type="submit" class="px-4 py-2 bg-amber-600 text-white rounded hover:bg-amber-700">Update</button>
    </form>
</x-default-layout>
