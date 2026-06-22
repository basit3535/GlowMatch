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
        'category',
        'meta_title',
        'meta_description',
        'language',
        'description',
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
}
