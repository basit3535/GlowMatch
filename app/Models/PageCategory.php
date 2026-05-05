<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PageCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_active',
        'parent_id',
        'order',
        'color',
        'icon',
        
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'order' => 'integer',
    ];

    public function customPages(): HasMany
    {
        return $this->hasMany(CustomPage::class, 'category_id');
    }

    public function parent()
    {
        return $this->belongsTo(PageCategory::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(PageCategory::class, 'parent_id');
    }

    public function getPublishedPagesCountAttribute()
    {
        return $this->customPages()->where('is_published', true)->count();
    }
}
