<?php

namespace App\Repositories;

use App\Interfaces\CustomPageInterface;
use App\Models\CustomPage;

class CustomPageRepository implements CustomPageInterface
{
    public function homePage()
    {
        $guide = CustomPage::where('page_type', 'palette_page')->get();
        $customPage   = CustomPage::where('is_homepage', true)->firstOrFail();
        $contentArray = $customPage->content_keys ?? [];
        $guide_links = $guide->map(function ($item) {
            return (object) [
                'slug' => $item->slug,
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
            'customPage' => $customPage,
            'content'    => $content,
            'guides'     => $guide,
            'guide_links' => $guide_links,
        ];
    }
    public function showCustomPage($slug)
    {
        $customPage   = CustomPage::where('slug', $slug)->firstOrFail();
        $contentArray = $customPage->content_keys ?? [];

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
            'customPage' => $customPage,
            'content'    => $content,
        ];
    }
}
