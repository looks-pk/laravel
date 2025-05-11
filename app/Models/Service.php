<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'meta_description',
        'features',
        'process',
        'icon',
        'is_active',
    ];

    protected $casts = [
        'features' => 'array',
        'process' => 'array',
        'is_active' => 'boolean',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($service) {
            if (empty($service->slug)) {
                $service->slug = Str::slug($service->title);
            }
        });
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
} 