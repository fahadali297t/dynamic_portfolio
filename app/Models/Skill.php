<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $guarded = [];

    public function file_manager()
    {
        return $this->belongsTo(FileManager::class, 'file_manager_id', 'id');
    }
}
