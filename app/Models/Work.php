<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
