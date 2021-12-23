<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'speciality',
        'biography',
        'clinic_name',
        'clinic_address',
        'services',
        'specialization',
        'price',
        'education',
    ];

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }
}
