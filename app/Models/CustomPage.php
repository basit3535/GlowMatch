<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
class CustomPage extends Model
{
     use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'blade_view',
        'slug',
        'page_key',
        'page_type',
        'meta_title',
        'meta_description',
        'sitemap',
        'content_keys',
        'is_homepage',
    ];

    protected $casts = [
        'sitemap' => 'boolean',
        'content_keys' => 'array', // Since it's longText storing JSON
    ];

    const PAGE_TYPES = [
        'primary_page' => 'Primary Page',
        'palette_page' => 'Palette Page',
        'season_page' => 'Season Page',
    ];
}
