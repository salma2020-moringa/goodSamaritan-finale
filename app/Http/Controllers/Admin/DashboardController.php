<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\Child;
use App\Models\User;
use App\Models\Sponsorship;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // Get total children statistics
        $totalChildren = Child::count();
        $activeChildren = Child::where('status', 'active')->count();
        
        // Get donation statistics
        $totalDonations = Donation::where('status', 'completed')->sum('amount') ?? 0;
        $monthlyDonations = Donation::where('status', 'completed')
            ->whereMonth('completed_at', now()->month)
            ->whereYear('completed_at', now()->year)
            ->sum('amount') ?? 0;
        
        // Get sponsorship statistics
        $totalSponsors = Sponsorship::where('status', 'active')
            ->distinct('user_id')
            ->count('user_id');
        
        // Get volunteer statistics
        $totalVolunteers = User::where('role', 'volunteer')->count();
        $totalUsers = User::count();
        
        // Get recent donations
        $recentDonations = Donation::with('user')
            ->where('status', 'completed')
            ->latest('completed_at')
            ->take(5)
            ->get();
        
        // Get recent sponsorships
        $recentSponsorships = Sponsorship::with(['user', 'child'])
            ->latest()
            ->take(5)
            ->get();
        
        // Get recent users (new registrations)
        $recentUsers = User::latest()
            ->take(5)
            ->get();
        
        // Get donation chart data for current month
        $donationChart = Donation::where('status', 'completed')
            ->select(DB::raw('DATE(completed_at) as date'), DB::raw('SUM(amount) as total'))
            ->whereMonth('completed_at', now()->month)
            ->whereYear('completed_at', now()->year)
            ->groupBy('date')
            ->orderBy('date')
            ->get();
        
        // Prepare chart labels and data
        $chartLabels = [];
        $chartData = [];
        
        foreach ($donationChart as $item) {
            $chartLabels[] = \Carbon\Carbon::parse($item->date)->format('M d');
            $chartData[] = $item->total;
        }
        
        $stats = [
            'total_children' => $totalChildren,
            'active_children' => $activeChildren,
            'total_donations' => $totalDonations,
            'monthly_donations' => $monthlyDonations,
            'total_sponsors' => $totalSponsors,
            'total_volunteers' => $totalVolunteers,
            'total_users' => $totalUsers,
            'recent_donations' => $recentDonations,
            'recent_sponsorships' => $recentSponsorships,
            'recent_users' => $recentUsers,
            'donation_chart' => $donationChart,
            'chart_labels' => $chartLabels,
            'chart_data' => $chartData,
        ];

        return view('admin.dashboard', compact('stats'));
    }
}