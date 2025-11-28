<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Str;

class Halaman extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'halaman';

    protected $fillable = [
        'title',
        'slug',
        'content',
        'meta_title',
        'meta_description',
        'featured_image',
        'status',
        'user_id'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    /**
     * Get the user that owns the page.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the page's featured image URL.
     */
    protected function featuredImageUrl(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => 
                $attributes['featured_image'] 
                    ? asset('storage/' . $attributes['featured_image']) 
                    : asset('images/default-page.jpg')
        );
    }

    /**
     * Get the page's excerpt.
     */
    public function getExcerpt($length = 150)
    {
        $content = strip_tags($this->content);
        return Str::limit($content, $length);
    }

    /**
     * Check if page is published.
     */
    public function isPublished(): bool
    {
        return $this->status === 'published';
    }

    /**
     * Check if page is draft.
     */
    public function isDraft(): bool
    {
        return $this->status === 'draft';
    }

    /**
     * Scope a query to only include published pages.
     */
    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    /**
     * Scope a query to only include draft pages.
     */
    public function scopeDraft($query)
    {
        return $query->where('status', 'draft');
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }
}