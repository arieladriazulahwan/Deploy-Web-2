<?php

namespace App\Http\Controllers;
use App\Models\Majors;

use Illuminate\Http\Request;


class MajorController extends Controller
{
    public function index()
    {
        $majors = \App\Models\Majors::all();
        return view('majors.index', compact('majors'));
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'code' => 'required|unique:majors,code',
            'description' => 'nullable',
        ]);
    
        Majors::create($validated);
    
        return redirect()->route('majors.index')->with('success', 'Major added successfully');
    }
    


    public function show(string $id)
    {
        $major = Majors::findOrFail($id);
        return view('majors.show', compact('major'));
    }
    public function create()
    {
        return view('majors.create');
    }

    public function edit(string $id)
    {
        $major = Majors::findOrFail($id);
        return view('majors.edit', compact('major'));
    }
    public function update(Request $request, string $id)
    {
        $major = Majors::findOrFail($id);
        $major->update($request->only(['name', 'description', 'code']));

        return redirect()->route('majors.index')->with('success', 'Major updated successfully');
    }

    public function destroy(string $id)
    {
        $major = Majors::findOrFail($id);
        $major->delete();

        return redirect()->route('majors.index')->with('success', 'Major deleted successfully');
    }

}
