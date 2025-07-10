<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'sections',
        'sidebar_cards',
        'excerpt',
        'featured_image',
        'is_published',
        'published_at',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'user_id',
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'published_at' => 'datetime',
        'sections' => 'array',
        'sidebar_cards' => 'array',
    ];

    // Generate a slug from the title if no slug is provided
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            if (!$post->slug) {
                $post->slug = Str::slug($post->title);
            }
        });
    }

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    // Scope for published posts
    public function scopePublished($query)
    {
        return $query->where('is_published', true)
            ->where('published_at', '<=', now());
    }

    // Get the excerpt or generate one from the content
    public function getExcerptAttribute($value)
    {
        if ($value) {
            return $value;
        }

        // Strip HTML tags and generate an excerpt from content
        $plainText = strip_tags($this->content);
        return Str::limit($plainText, 150);
    }
}
