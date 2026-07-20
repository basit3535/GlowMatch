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
        $guide      = CustomPage::where('category_id', PageCategory::where('slug', 'palette_page')->value('id'))->get();
        $customPage = CustomPage::where('is_homepage', true)->firstOrFail();

        $guide_links = $guide->map(function ($item) {
            return (object) [
                'slug'         => $item->slug,
                'palette_name' => $item->content_keys[0]['value_input'] ?? 'Guide',
            ];
        });
        $contentArray = $customPage->content_keys ?? [];
        $content      = new \stdClass();
        $content      = new \stdClass();

        foreach ($contentArray as $entry) {

            // Handle nested arrays
            if (isset($entry[0]) && is_array($entry[0])) {
                foreach ($entry as $item) {
                    $this->mapContentItem($content, $item);
                }
            } else {
                $this->mapContentItem($content, $entry);
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

    public function showCustomPage($category = null)
    {
        $getURL     = url()->current();
        $base       = basename($getURL);
        $customPage = CustomPage::where('slug', $base)->first();

        if (! $customPage) {
            abort(404);
        }
        // $customPage   = CustomPage::where('slug', $slug)->firstOrFail();
        $contentArray = $customPage->content_keys ?? [];
        $content      = new \stdClass();
        // dd($contentArray);
        $content = new \stdClass();

        foreach ($contentArray as $entry) {

            // Handle nested arrays
            if (isset($entry[0]) && is_array($entry[0])) {
                foreach ($entry as $item) {
                    $this->mapContentItem($content, $item);
                }
            } else {
                $this->mapContentItem($content, $entry);
            }
        }

        // Default values
        $blogs    = null;
        $featured = null;

        // If this is a blog page, fetch the blogs
        if (str_contains($customPage->slug, 'blog')) {
            $query = Blog::query();
            if ($category) {
                $query->where('category', $category);
            }
            $blogs    = $query->paginate(9);
            $featured = Blog::where('featured', true)->first();
        }

        return (object) [
            'customPage' => $customPage,
            'content'    => $content,
            'blogs'      => $blogs,
            'featured'   => $featured,
        ];
    }
    public function getBlogs($category = null, $page = null)
    {
        $query = Blog::query();

        if ($category) {
            $query->whereHas('category', function ($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        $blogs = $query->with('category', 'image')
            ->paginate(9, ['*'], 'page', $page);

        $featured = Blog::where('featured', true)
            ->with('category', 'image')
            ->first();

        return (object) [
            'blogs'    => $blogs,
            'featured' => $featured,
        ];
    }
    private function mapContentItem($content, $item)
    {
        if (empty($item['key'])) {
            return;
        }

        $value = match ($item['type'] ?? 'input') {
            'textarea' => $item['value_textarea'] ?? '',
            'richtext' => $item['value_richtext'] ?? '',
            default    => $item['value_input'] ?? '',
        };

        $content->{$item['key']} = (object) [
            'value' => $value,
        ];
    }
    public function showSingleBlog($category, $slug)
    {
        $post = Blog::where('slug', $slug)
            ->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            })
            ->with('category', 'image')
            ->firstOrFail();

        // dd($post);

        return (object) [
            'post' => $post,
        ];
    }
}
