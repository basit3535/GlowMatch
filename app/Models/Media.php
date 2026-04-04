<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Media extends Model
{
    use SoftDeletes;

    protected $table    = 'media';
    protected $fillable = [
        'filename',
        'path',
        'dimensions',
        'format',
    ];

    public function getUrlAttribute(): string
    {
        return Storage::url($this->path);
    }
}
