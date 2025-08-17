<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designer extends Model
{
    protected $guarded = [];

    public function file_manager()
    {
        return $this->hasMany(FileManager::class);
    }
}
