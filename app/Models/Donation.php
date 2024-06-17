<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_name',
        'email',
        'phone_number',
        'nationality',
        'address',
        'amount',
        'currency',
        'payment_means',
        'comment',
    ];

    
}

