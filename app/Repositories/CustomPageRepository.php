<?php
namespace App\Repositories;

use App\Interfaces\CustomPageInterface;
use App\Models\Blog;
use App\Models\CustomPage;
use App\Models\PageCategory;

class CustomPageRepository implements CustomPageInterface
{
    public function homePage()
    {
        $guide        = CustomPage::where('category_id', PageCategory::where('slug', 'palette_page')->value('id'))->get();
        $customPage   = CustomPage::where('is_homepage', true)->firstOrFail();
        $contentArray = $customPage->content_keys ?? [];
        $guide_links  = $guide->map(function ($item) {
            return (object) [
                'slug'         => $item->slug,
                'palette_name' => $item->content_keys[0]['value_input'] ?? 'Guide',
            ];
        });
        $content = new \stdClass();

        foreach ($contentArray as $item) {
            if (! empty($item['key'])) {
                // Pick the "value" based on type
                $value = match ($item['type'] ?? 'input') {
                    'textarea' => $item['value_textarea'] ?? '',
                    'richtext' => $item['value_richtext'] ?? '',
                    default    => $item['value_input'] ?? '',
                };

                // Store as stdClass with single "value" property
                $content->{$item['key']} = (object) ['value' => $value];
            }
        }

        return (object) [
            'customPage'  => $customPage,
            'content'     => $content,
            'guides'      => $guide,
            'guide_links' => $guide_links,
        ];
    }
   // App\Repositories\CustomPageRepository.php

public function showCustomPage($slug, $category = null)
{
    $customPage = CustomPage::where('slug', $slug)->firstOrFail();
    $contentArray = $customPage->content_keys ?? [];
    $content = new \stdClass();

    foreach ($contentArray as $item) {
        if (! empty($item['key'])) {
            $value = match ($item['type'] ?? 'input') {
                'textarea' => $item['value_textarea'] ?? '',
                'richtext' => $item['value_richtext'] ?? '',
                default    => $item['value_input'] ?? '',
            };
            $content->{$item['key']} = (object) ['value' => $value];
        }
    }

    // Default values
    $blogs = null;
    $featured = null;

    // If this is a blog page, fetch the blogs
    if (str_contains($slug, 'blog')) {
        $query = Blog::query();
        if ($category) {
            $query->where('category', $category);
        }
        $blogs = $query->paginate(9);
        $featured = Blog::where('featured', true)->first();
    }

    return (object) [
        'customPage' => $customPage,
        'content'    => $content,
        'blogs'      => $blogs,
        'featured'   => $featured,
    ];
}
   public function getBlogs($category = null)
    {
        $query = Blog::query();
        if ($category) {
            $query->where('category', $category);
        }
        $blogs = $query->paginate(9); // 9 per page
        $featured = Blog::where('featured', true)->first();

        return (object) [
            'blogs'    => $blogs,
            'featured' => $featured,
        ];
    }
}
