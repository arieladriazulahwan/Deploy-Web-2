<x-default-layout title="Add Major" section_title="Add Major">
    <form action="{{ route('majors.store') }}" method="POST" class="max-w-xl space-y-4">
        @csrf

        <div>
            <label for="name" class="block mb-1 font-medium text-gray-700">Name</label>
            <input type="text" id="name" name="name" class="w-full border-gray-300 rounded-md shadow-sm">
        </div>

        <div>
            <label for="description" class="block mb-1 font-medium text-gray-700">Description</label>
            <textarea id="description" name="description" rows="4" class="w-full border-gray-300 rounded-md shadow-sm"></textarea>
        </div>

        <div>
            <label for="code" class="block mb-1 font-medium text-gray-700">Code</label>
            <input type="text" id="code" name="code" class="w-full border-gray-300 rounded-md shadow-sm">
        </div>


        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Save</button>
    </form>
</x-default-layout>
