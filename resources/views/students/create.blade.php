<x-default-layout title="Student" section_title="Add new student">
    <div class="grid grid-cols-3">
        <form action="{{ route('students.store') }}" method="POST"
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-zinc-300 shadow-md col-span-3 md:col-span-2">
            @csrf
            @method('POST')

            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <label for="name" class="flex flex-col gap-2">Name</label>
                    <input type="text" id="name" name="name"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50 placeholder="Student Name"
                        value="{{ old('name') }}">
                    @error('name')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="student_id_number" class="flex flex-col gap-2">Student ID Number</label>
                    <input type="text" id="student_id_number" name="student_id_number"
                        class="px-3 py-2 border border-zinc-300 bg-hg-slate-50 placeholder="Student ID (e.g., F55122801)"
                        value="{{ old('student_id_number') }}">
                    @error('student_id_number')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="grid sm:grid-cols-2 gap-4">
                <div>
                    <label for="email" class="flex flex-col gap-2">Email</label>
                    <input type="email" id="email" name="email"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50 placeholder="student@example.com"
                        value="{{ old('email') }}">
                    @error('email')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>

                <div>
                    <label for="phone_number" class="flex flex-col gap-2">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number"
                        class="px-3 py-2 border border-zinc-300 bg-slate-50 placeholder="(Optional)"
                        value="{{ old('phone_number') }}">
                    @error('phone_number')
                        <div class="text-red-500">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <label for="birth_date">Birth Date</label>
                <input type="date" id="birth_date" name="birth_date"
                    class="px-3 py-2 border border-zinc-300 bg-slate-50"
                    value="{{ old('birth_date') }}">
                @error('birth_date')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="gender">Gender</label>
                <select id="gender" name="gender"
                    class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
                    <option value="" disabled>Select Gender</option>
                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="majors">Majors</label>
                <select id="majors" name="major_id"
                    class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
                    <option value="" disabled>Select Majors</option>
                    @forelse ($majors as $major)
                        <option value="{{ $major->id }}" {{ old('major_id') == $major->id ? 'selected' : '' }}>
                            {{ $major->name }}
                        </option>
                    @empty
                        <option value="" disabled>No majors available</option>
                    @endforelse
                </select>
                @error('major_id')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="flex flex-col gap-2">
                <label for="status">Status</label>
                <select id="status" name="status"
                    class="px-3 py-2 border border-zinc-300 appearance-none bg-slate-50">
                    <option value="" disabled>Select student status</option>
                    <option value="Active" {{ old('status') == 'Active' ? 'selected' : '' }}>Active</option>
                    <option value="Inactive" {{ old('status') == 'Inactive' ? 'selected' : '' }}>Inactive</option>
                    <option value="Graduated" {{ old('status') == 'Graduated' ? 'selected' : '' }}>Graduated</option>
                    <option value="Dropped Out" {{ old('status') == 'Dropped Out' ? 'selected' : '' }}>Dropped Out</option>
                </select>
                @error('status')
                    <div class="text-red-500">{{ $message }}</div>
                @enderror
            </div>

            <div class="self-end flex gap-2">
                <a href="{{ route('students.index') }}"
                    class="bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>Cancel</span>
                </a>
                <button type="submit"
                    class="bg-blue-50 border border-blue-500 text-blue-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-floppy-disk block text-blue-500"></i>
                    <span>Save</span>
                </button>
            </div>
        </form>
    </div>
</x-default-layout>