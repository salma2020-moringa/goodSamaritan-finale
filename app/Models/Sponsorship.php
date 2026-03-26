<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sponsorship extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'child_id', 'monthly_amount', 'start_date', 
        'end_date', 'status', 'notes'
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'monthly_amount' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function child()
    {
        return $this->belongsTo(Child::class);
    }

    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }
}