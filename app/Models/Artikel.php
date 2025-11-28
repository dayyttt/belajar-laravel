<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    
    protected $fillable = [
        'title',
        'slug',
        'content',
        'excerpt',
        'image',
        'status',
        'user_id',
        'published_at'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'published_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        // 
    ];

    /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($artikel) {
            if (empty($artikel->slug)) {
                $artikel->slug = Str::slug($artikel->title);
            }
            
            // Ensure unique slug
            $originalSlug = $artikel->slug;
            $count = 1;
            while (static::where('slug', $artikel->slug)->exists()) {
                $artikel->slug = $originalSlug . '-' . $count++;
            }
        });

        static::updating(function ($artikel) {
            if ($artikel->isDirty('title')) {
                $artikel->slug = Str::slug($artikel->title);
                
                // Ensure unique slug when updating
                $originalSlug = $artikel->slug;
                $count = 1;
                while (static::where('slug', $artikel->slug)->where('id', '!=', $artikel->id)->exists()) {
                    $artikel->slug = $originalSlug . '-' . $count++;
                }
            }
            
            // Set published_at when status changes to published
            if ($artikel->isDirty('status') && $artikel->status === 'published' && !$artikel->published_at) {
                $artikel->published_at = now();
            }
        });
    }

    /**
     * Get the user that owns the article.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the artikel's image URL.
     */
    protected function imageUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => 
                $attributes['image'] 
                    ? asset('storage/' . $attributes['image']) 
                    : asset('images/default-article.jpg')
        );
    }

    /**
     * Get the artikel's excerpt with fallback.
     */
    public function getExcerpt($length = 150)
    {
        if ($this->excerpt) {
            return Str::limit($this->excerpt, $length);
        }
        
        // Remove HTML tags and limit the content
        $content = strip_tags($this->content);
        return Str::limit($content, $length);
    }

    /**
     * Check if artikel is published.
     */
    public function isPublished(): bool
    {
        return $this->status === 'published';
    }

    /**
     * Check if artikel is draft.
     */
    public function isDraft(): bool
    {
        return $this->status === 'draft';
    }

    /**
     * Scope a query to only include published artikel.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope a query to only include draft artikel.
     */
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    /**
     * Scope a query to only include recent artikel.
     */
    public function scopeRecent($query, $limit = 5)
    {
        return $query->orderBy('created_at', 'desc')->limit($limit);
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    /**
     * Get the reading time of the artikel.
     */
    public function getReadingTime()
    {
        $wordCount = str_word_count(strip_tags($this->content));
        $minutes = ceil($wordCount / 200); // Average reading speed: 200 words per minute
        
        return $minutes . ' min read';
    }

    /**
     * Get the published date in human readable format.
     */
    public function getPublishedDate()
    {
        if ($this->published_at) {
            return $this->published_at->format('d F Y');
        }
        
        return $this->created_at->format('d F Y');
    }

    /**
     * Get the short published date.
     */
    public function getShortPublishedDate()
    {
        if ($this->published_at) {
            return $this->published_at->format('d/m/Y');
        }
        
        return $this->created_at->format('d/m/Y');
    }
}