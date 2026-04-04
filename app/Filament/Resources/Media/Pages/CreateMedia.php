<?php

namespace App\Filament\Resources\Media\Pages;

use App\Filament\Resources\Media\MediaResource;
use App\Models\Media;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Intervention\Image\Drivers\Gd\Driver;
use Intervention\Image\ImageManager;

class CreateMedia extends CreateRecord
{
    protected static string $resource = MediaResource::class;

    protected function handleRecordCreation(array $data): Media
    {
        $storedPath = $data['file'];             // e.g. livewire-tmp/filename.jpg
        $format     = $data['convert_to'] ?? 'original';

        // Resolve the absolute path from the local disk (where livewire-tmp lives)
        $fullPath = realpath(Storage::disk('local')->path($storedPath));

        if ($fullPath === false) {
            throw new \Exception("Uploaded file not found: " . Storage::disk('local')->path($storedPath));
        }

        $originalName = pathinfo($storedPath, PATHINFO_FILENAME);
        $extension    = $format === 'original'
            ? pathinfo($storedPath, PATHINFO_EXTENSION)
            : $format;

        $filename  = Str::random(7) . '_' . Str::slug($originalName) . '.' . $extension;
        $directory = 'images/original';

        Storage::disk('public')->makeDirectory($directory);

        $newPath = realpath(Storage::disk('public')->path($directory)) . DIRECTORY_SEPARATOR . $filename;

        $manager = new ImageManager(new Driver());
        $img     = $manager->read($fullPath);

        match ($format) {
            'original' => $img->save($newPath),
            'webp'     => $img->toWebp(quality: 90)->save($newPath),
            'png'      => $img->toPng()->save($newPath),
            'jpg'      => $img->toJpeg(quality: 90)->save($newPath),
            default    => throw new \Exception("Unsupported format: {$format}"),
        };

        // Clean up the livewire temp file
        Storage::disk('local')->delete($storedPath);

        $width  = $img->width();
        $height = $img->height();

        return Media::create([
            'filename'   => $filename,
            'path'       => "{$directory}/{$filename}",
            'dimensions' => "{$width}x{$height}",
            'format'     => $format === 'original' ? $extension : $format,
        ]);
    }
}
