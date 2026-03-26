<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles;

    protected $fillable = [
        'name', 'email', 'password', 'phone', 'address', 'country', 
        'role', 'is_active', 'last_login_at'
    ];

    protected $hidden = ['password', 'remember_token'];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
        'is_active' => 'boolean',
    ];

    public function donations()
    {
        return $this->hasMany(Donation::class);
    }

    public function sponsorships()
    {
        return $this->hasMany(Sponsorship::class);
    }

    public function volunteer()
    {
        return $this->hasOne(Volunteer::class);
    }

    public function getTotalDonationsAttribute()
    {
        return $this->donations()->where('status', 'completed')->sum('amount');
    }

    public function getActiveSponsorshipsAttribute()
    {
        return $this->sponsorships()->where('status', 'active')->count();
    }
}