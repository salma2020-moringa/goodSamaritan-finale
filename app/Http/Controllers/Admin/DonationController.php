<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::with('user')->latest()->paginate(15);
        return view('admin.donations.index', compact('donations'));
    }

    public function show(Donation $donation)
    {
        return view('admin.donations.show', compact('donation'));
    }

    public function destroy(Donation $donation)
    {
        $donation->delete();
        return redirect()->route('admin.donations.index')
            ->with('success', 'Donation deleted successfully!');
    }
}