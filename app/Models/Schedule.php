<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'day',
        'start_times',
        'end_times'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
