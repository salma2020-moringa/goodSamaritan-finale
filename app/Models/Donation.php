<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'transaction_id', 'amount', 'type', 'status', 
        'payment_method', 'currency', 'notes', 'payment_details', 'completed_at'
    ];

    protected $casts = [
        'payment_details' => 'array',
        'completed_at' => 'datetime',
        'amount' => 'decimal:2',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeMonthly($query)
    {
        return $query->where('type', 'monthly');
    }
}