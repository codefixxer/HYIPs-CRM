<?php
// app/Models/Withdrawal.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Withdrawal extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'trans_id',
        'withdrawal_amount',
        'account_number',
        'status',
        'requested_at',
        'approved_at',
        'rejected_at',
        'bank_name',
        'admin_note',
    ];

    // Define relationship with User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'trans_id');
    }
}
