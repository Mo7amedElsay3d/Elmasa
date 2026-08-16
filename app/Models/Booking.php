<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
    'name',
    'phone',
    'address',
    'package_id',
    'booking_date',
];
}
