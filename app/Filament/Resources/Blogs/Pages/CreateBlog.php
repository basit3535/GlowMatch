<?php
namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBlog extends CreateRecord
{
    protected static string $resource = BlogResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $content = $data['blog_content'] ?? '';

        // Ensure content is a string
        if (is_array($content)) {
            // If it's an array, try to extract the content
            // Some RichEditor implementations return ['html' => '...'] or similar
            $content = $content['html'] ?? json_encode($content, JSON_UNESCAPED_UNICODE);
        }

        $parts = $this->splitIntoFiveParts((string) $content);

        $data['blog_content_1'] = $parts[0];
        $data['blog_content_2'] = $parts[1];
        $data['blog_content_3'] = $parts[2];
        $data['blog_content_4'] = $parts[3];
        $data['blog_content_5'] = $parts[4];

        // Remove the virtual field
        unset($data['blog_content']);

        return $data;
    }

    protected function splitIntoFiveParts(string $content): array
    {
        // If content is empty, return 5 null values
        if (empty($content)) {
            return [null, null, null, null, null];
        }

        // Split by HTML paragraphs (closing </p> tags)
        $paragraphs = preg_split('/<\/p>/i', $content, -1, PREG_SPLIT_NO_EMPTY);

        // If no paragraphs found or only one paragraph, split by character length
        if (count($paragraphs) <= 1) {
            $totalLength = strlen($content);
            $partSize = (int) ceil($totalLength / 5);

            $parts = [];
            for ($i = 0; $i < 5; $i++) {
                $start = $i * $partSize;
                if ($start < $totalLength) {
                    $parts[$i] = substr($content, $start, $partSize);
                } else {
                    $parts[$i] = null;
                }
            }
            return $parts;
        }

        $chunkSize = (int) ceil(count($paragraphs) / 5);
        $chunks = array_chunk($paragraphs, $chunkSize);

        $result = [];

        for ($i = 0; $i < 5; $i++) {
            if (isset($chunks[$i])) {
                $html = implode('</p>', $chunks[$i]);

                // Restore closing tag
                if (!str_ends_with(trim($html), '</p>')) {
                    $html .= '</p>';
                }

                $result[$i] = $html;
            } else {
                $result[$i] = null;
            }
        }

        return $result;
    }
}
