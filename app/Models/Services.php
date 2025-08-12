<?php

namespace App\Models;

use App\Http\Controllers\FileManagerController;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    protected $guarded = [];

    public function file_manager()
    {
        return $this->belongsTo(FileManager::class, 'file_manager_id', 'id');
    }
}
