<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{   
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contact_number',
        'service_type',
        'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}