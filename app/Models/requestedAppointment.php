<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class requestedAppointment extends Model
{
    use HasFactory,softDeletes;
    protected $fillable=[
        'name',
        'email',
        'phone',
        'doctor',
        'message',
        'address',
        'stime',
    ];
}
