<?php

namespace App\Models;

use App\Http\Controllers\FileManagerController;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Services extends Model
{
    protected $guarded = [];

    public function file_manager()
    {
        return $this->belongsTo(FileManager::class, 'file_manager_id', 'id');
    }


    protected static function booted()
    {
        static::creating(function ($service) {
            $service->slug = static::generateUniqueSlug($service->name);
        });

        static::updating(function ($service) {
            if ($service->isDirty('name')) {
                $service->slug = static::generateUniqueSlug($service->name, $service->id);
            }
        });
    }

    protected static function generateUniqueSlug($name, $ignoreId = null)
    {
        $slug = Str::slug($name);
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
