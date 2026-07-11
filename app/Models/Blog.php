<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'meta_title',
        'meta_description',
        'language',
        'blog_content_1',
        'blog_content_2',
        'blog_content_3',
        'blog_content_4',
        'blog_content_5',
        'parent_id',
        'image_id',
        'status',
        'reading_time',
        'featured',
    ];

    public function image()
    {
        return $this->belongsTo(Media::class, 'image_id');
    }

    public function parent()
    {
        return $this->belongsTo(Blog::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Blog::class, 'parent_id');
    }

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
}
