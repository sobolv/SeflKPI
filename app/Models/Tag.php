<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    public function images(){
        return $this->belongsToMany('App\Models\Image', 'image_tags', 'tag_id', 'image_id');
    }
}
