<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Enums\PostTypeEnum;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Support\Str;

class Post extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, InteractsWithMedia;

    protected $table = 'posts';

    protected $fillable = ['title', 'slug', 'excerpt', 'content', 'meta_link', 'meta_description', 'type', 'data'];

    protected $casts = [
        'data' => 'array',
        'type' => PostTypeEnum::class,
    ];

    /**
     * Register media collections (e.g., images, attachments).
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('images')->singleFile(); // only one image (e.g., featured)
        $this->addMediaCollection('attachments'); // multiple files
    }

    /**
     * Optional: conversions for images (thumbnails, etc.)
     */
    // public function registerMediaConversions(): void
    // {
    //     $this->addMediaConversion('thumb')
    //         ->width(300)
    //         ->height(300)
    //         ->sharpen(10);
    // }

    protected static function booted()
    {
        static::creating(function ($post) {
            if (empty($post->slug)) {
                $post->slug = Str::slug($post->title) . '-' . time();
            }
        });
    }

    /**
     * Scope: filter posts by type.
     */
    public function scopeOfType($query, PostTypeEnum $type)
    {
        return $query->where('type', $type->value);
    }
}
