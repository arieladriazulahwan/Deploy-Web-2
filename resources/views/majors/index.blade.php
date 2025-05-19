<x-default-layout title="Majors" section_title="Majors">
    <div class="mb-6">
        <a href="{{ route('majors.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 shadow-sm">
            Add New Major
        </a>
    </div>

    <div class="overflow-x-auto">
        <table class="min-w-full bg-white shadow">
            <thead>
                <tr class="border-b border-zinc-200 text-sm leading-normal">
                    <th class="py-3 px-6 text-left">#</th>
                    <th class="py-3 px-6 text-left">Name</th>
                    <th class="py-3 px-6 text-left">Description</th>
                    <th class="py-3 px-6 text-center">Actions</th>
                </tr>
            </thead>
            <tbody class="text-zinc-700 text-sm font-light">
                @forelse ($majors as $major)
                    <tr class="border-b border-zinc-200 hover:bg-zinc-100">
                        <td class="py-3 px-6 text-left">{{ $loop->iteration }}</td>
                        <td class="py-3 px-6 text-left">{{ $major->name }}</td>
                        <td class="py-3 px-6 text-left">{{ $major->description }}</td>
                        <td class="py-3 px-6 text-center">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('majors.show', $major->id) }}" class="px-3 py-1 bg-sky-100 text-sky-600 rounded hover:bg-sky-200">View</a>
                                <a href="{{ route('majors.edit', $major->id) }}" class="px-3 py-1 bg-amber-100 text-amber-600 rounded hover:bg-amber-200">Edit</a>
                                <form action="{{ route('majors.destroy', $major->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-3 py-1 bg-red-100 text-red-600 rounded hover:bg-red-200">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr class="border-b border-zinc-200">
                        <td colspan="4" class="py-6 px-6 text-center text-gray-500">No majors available</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-default-layout>
