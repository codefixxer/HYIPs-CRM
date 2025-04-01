<?php
// app/Models/UserPackage.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPackage extends Model
{
    use HasFactory;

    // Specify the custom primary key
    protected $primaryKey = 'id';

    // Set the incrementing flag to false if your primary key is not an auto-incrementing integer
    public $incrementing = true; // Set this to false if it's not an auto-incrementing primary key

    // Set the table name if it's different from the default plural form of the model name
    protected $table = 'user_packages';

    protected $fillable = [
        'user_id',
        'package_id',
        'investment_amount',
        'total_profit',
        'status',
        'start_date',
        'end_date',
    ];

    // Define relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function package()
    {
        return $this->belongsTo(Package::class);
    }
}
