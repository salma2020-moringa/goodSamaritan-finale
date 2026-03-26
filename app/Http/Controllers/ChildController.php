<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function index()
    {
        $children = Child::where('status', 'active')->paginate(12);
        return view('children.index', compact('children'));
    }

    public function show($id)
    {
        $child = Child::findOrFail($id);
        $sponsorshipNeeded = !$child->is_sponsored;
        return view('children.show', compact('child', 'sponsorshipNeeded'));
    }

    public function sponsor(Request $request, $id)
    {
        $request->validate([
            'monthly_amount' => 'required|numeric|min:20',
        ]);

        $child = Child::findOrFail($id);
        
        // Create sponsorship record
        $sponsorship = $child->sponsorships()->create([
            'user_id' => auth()->id(),
            'monthly_amount' => $request->monthly_amount,
            'start_date' => now(),
            'status' => 'active',
        ]);

        return redirect()->route('children.show', $child->id)
            ->with('success', 'Thank you for sponsoring ' . $child->name . '!');
    }
}