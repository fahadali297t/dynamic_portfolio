<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Work extends Model
{
    protected $guarded = [];

    public function file_manager()
    {
        return $this->belongsTo(FileManager::class, 'file_manager_id', 'id');
    }

    public function services()
    {
        return $this->belongsTo(Services::class, 'services_id', 'id');
    }

    protected static function booted()
    {
        static::creating(function ($work) {
            $work->slug = static::generateUniqueSlug($work->title); // ✅ use title
        });

        static::updating(function ($work) {
            if ($work->isDirty('title')) { // ✅ check title
                $work->slug = static::generateUniqueSlug($work->title, $work->id); // ✅ use title
            }
        });
    }

    protected static function generateUniqueSlug($title, $ignoreId = null)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $counter = 1;

        while (static::where('slug', $slug)
            ->when($ignoreId, fn($q) => $q->where('id', '!=', $ignoreId))
            ->exists()
        ) {
            $slug = $originalSlug . '-' . $counter++;
        }

        return $slug;
    }
}
