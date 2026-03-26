<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ChildController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ChildController as AdminChildController;
use App\Http\Controllers\Admin\DonationController as AdminDonationController;
use App\Http\Controllers\Admin\SponsorshipController as AdminSponsorshipController;
use App\Http\Controllers\Admin\VolunteerController as AdminVolunteerController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\ContentController as AdminContentController;
use Illuminate\Support\Facades\Route;

// ==================== PUBLIC ROUTES ====================
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/our-work', function () {
    return view('our-work');
})->name('our-work');

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/get-involved', function () {
    return view('get-involved');
})->name('get-involved');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// ==================== CHILDREN ROUTES ====================
Route::get('/children', [ChildController::class, 'index'])->name('children.index');
Route::get('/children/{id}', [ChildController::class, 'show'])->name('children.show');
Route::post('/children/{id}/sponsor', [ChildController::class, 'sponsor'])->middleware('auth')->name('children.sponsor');

// ==================== DONATION ROUTES ====================
Route::get('/donate', [DonationController::class, 'index'])->name('donate');
Route::post('/donation/process', [DonationController::class, 'process'])->name('donation.process');
Route::get('/donation/payment/{id}', [DonationController::class, 'payment'])->name('donation.payment');
Route::post('/donation/complete/{id}', [DonationController::class, 'complete'])->name('donation.complete');
Route::get('/donation/confirmation/{id}', [DonationController::class, 'confirmation'])->name('donation.confirmation');

// ==================== AUTHENTICATION ROUTES ====================
require __DIR__.'/auth.php';

// ==================== PROFILE ROUTES ====================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ==================== ADMIN ROUTES ====================
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    // Child Management
    Route::resource('children', AdminChildController::class);
    
    // Donation Management
    Route::resource('donations', AdminDonationController::class);
    
    // Sponsorship Management
    Route::resource('sponsorships', AdminSponsorshipController::class);
    
    // Volunteer Management
    Route::resource('volunteers', AdminVolunteerController::class);
    
    // User Management
    Route::resource('users', AdminUserController::class);
    
    // Content Management
    Route::get('/content', [AdminContentController::class, 'index'])->name('content');
    Route::put('/content/{slug}', [AdminContentController::class, 'update'])->name('content.update');
});