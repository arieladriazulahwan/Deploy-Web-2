<?php

namespace App\Http\Controllers;

use App\Models\Majors;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class StudentController extends Controller
{
    public function index()
    {
        if (! Gate::allows('view-student')) {
            abort(403);
        }

        $students = Student::with('majors')->get();
        return view('students.index', compact('students'));
    }

    public function show(string $id)
    {
        if (! Gate::allows('view-student')) {
            abort(403);
        }

        $student = Student::with('majors')->findOrFail($id);
        return view('students.show', compact('student'));
    }

    public function create()
    {
        if (! Gate::allows('store-student')) {
            abort(403);
        }

        $majors = Majors::all();
        return view('students.create', compact('majors'));
    }

    public function store(Request $request)
    {
        if (! Gate::allows('store-student')) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required',
            'student_id_number' => 'required|unique:students|max:9',
            'email' => 'required|email|unique:students',
            'phone_number' => 'nullable',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:Female,Male',
            'status' => 'required|in:Active,Inactive,Graduated,Dropped Out',
            'major_id' => 'required|exists:majors,id',
        ]);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student created successfully');
    }

    public function edit(string $id)
    {
        if (! Gate::allows('edit-student')) {
            abort(403);
        }

        $student = Student::findOrFail($id);
        $majors = Majors::all();
        return view('students.edit', compact('student', 'majors'));
    }

    public function update(Request $request, string $id)
    {
        if (! Gate::allows('edit-student')) {
            abort(403);
        }

        $validated = $request->validate([
            'name' => 'required',
            'student_id_number' => 'required|max:9|unique:students,student_id_number,' . $id,
            'email' => 'required|email|unique:students,email,' . $id,
            'phone_number' => 'nullable',
            'birth_date' => 'nullable|date',
            'gender' => 'nullable|in:Female,Male',
            'status' => 'required|in:Active,Inactive,Graduated,Dropped Out',
            'major_id' => 'required|exists:majors,id',
        ]);

        $student = Student::findOrFail($id);
        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully');
    }

    public function destroy(string $id)
    {
        if (! Gate::allows('destroy-student')) {
            abort(403);
        }

        $student = Student::findOrFail($id);
        $student->delete();

        return redirect()->route('students.index')->with('success', 'Student deleted successfully');
    }
}
