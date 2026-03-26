<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'age', 'date_of_birth', 'gender', 'background_story', 
        'admission_date', 'status', 'photo', 'education_level', 'health_notes'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'admission_date' => 'date',
    ];

    public function sponsorships()
    {
        return $this->hasMany(Sponsorship::class);
    }

    public function activeSponsors()
    {
        return $this->sponsorships()->where('status', 'active')->with('user');
    }

    public function getIsSponsoredAttribute()
    {
        return $this->sponsorships()->where('status', 'active')->exists();
    }
}