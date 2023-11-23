<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';

    protected $fillable = [
        'name',
        'category',
        'description',
        'age_years',
        'age_months',
        'status',
        'date_registered',
        'date_reserved',
        'date_adopted'
    ];

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Image', 'pet_id');
    }
}
