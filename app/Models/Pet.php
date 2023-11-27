<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $table = 'pets';
    protected $with = ['images'];

    public function scopeFilter($query, array $filters): void
    {
        $query->when($filters['search'] ?? false, fn($query, $search) => $query
            ->where('name', 'like', '%' . $search . '%'));

        $query->when($filters['status'] ?? false, fn($query, $status) => $query
            ->where('status', 'like', $status));

        $query->when($filters['sex'] ?? false, fn($query, $sex) => $query
            ->where('sex', 'like', $sex));

        $query->when($filters['category'] ?? false, fn($query, $category) => $query
            ->where('category', 'like', $category));
    }

    protected $fillable = [
        'name',
        'category',
        'description',
        'sex',
        'age_years',
        'age_months',
        'status',
        'date_registered',
        'date_reserved',
        'date_adopted',
        'prefs_children',
        'prefs_teens',
        'prefs_dogs',
        'prefs_cats',

    ];

    public function images(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\Models\Image', 'pet_id');
    }
}
