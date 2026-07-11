<?php

namespace App\Filament\Resources\Blogs\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditBlog extends EditRecord
{
    protected static string $resource = BlogResource::class;

    protected function mutateFormDataBeforeFill(array $data): array
    {
        // Combine the 5 content parts into one for the RichEditor
        $data['blog_content'] = '';

        for ($i = 1; $i <= 5; $i++) {
            if (!empty($data["blog_content_{$i}"])) {
                $data['blog_content'] .= $data["blog_content_{$i}"];
            }
        }

        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
    {
        // Get the content from the virtual field
        $content = $data['blog_content'] ?? '';

        // If RichEditor returns an array, convert it to a string
        if (is_array($content)) {
            $content = json_encode($content, JSON_UNESCAPED_UNICODE);
        }

        // Split into 5 parts
        $parts = $this->splitIntoFiveParts($content);

        // Assign to the actual database fields
        for ($i = 1; $i <= 5; $i++) {
            $data["blog_content_{$i}"] = $parts[$i - 1] ?? null;
        }

        // Remove the virtual field since it doesn't exist in DB
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

        // Group paragraphs into 5 chunks
        $chunkSize = (int) ceil(count($paragraphs) / 5);
        $chunks = array_chunk($paragraphs, $chunkSize);

        $result = [];
        for ($i = 0; $i < 5; $i++) {
            if (isset($chunks[$i])) {
                $html = implode('</p>', $chunks[$i]);
                // Restore the closing </p> tag if missing
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

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
            ForceDeleteAction::make(),
            RestoreAction::make(),
        ];
    }
}
