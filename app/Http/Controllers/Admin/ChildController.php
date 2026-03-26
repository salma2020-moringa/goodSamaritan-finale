<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $children = Child::latest()->paginate(15);
        return view('admin.children.index', compact('children'));
    }

    public function create()
    {
        return view('admin.children.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:18',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female',
            'background_story' => 'nullable|string',
            'admission_date' => 'required|date',
            'status' => 'required|in:active,transitioned,graduated',
            'education_level' => 'nullable|string',
            'health_notes' => 'nullable|string',
        ]);

        Child::create($validated);

        return redirect()->route('admin.children.index')
            ->with('success', 'Child added successfully!');
    }

    public function edit(Child $child)
    {
        return view('admin.children.edit', compact('child'));
    }

    public function update(Request $request, Child $child)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:0|max:18',
            'date_of_birth' => 'required|date',
            'gender' => 'required|in:male,female',
            'background_story' => 'nullable|string',
            'admission_date' => 'required|date',
            'status' => 'required|in:active,transitioned,graduated',
            'education_level' => 'nullable|string',
            'health_notes' => 'nullable|string',
        ]);

        $child->update($validated);

        return redirect()->route('admin.children.index')
            ->with('success', 'Child updated successfully!');
    }

    public function destroy(Child $child)
    {
        $child->delete();
        return redirect()->route('admin.children.index')
            ->with('success', 'Child removed successfully!');
    }
}