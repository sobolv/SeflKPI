<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    public function tags(){
        return $this->belongsToMany('App\Models\Tag', 'image_tags', 'image_id', 'tag_id');
    }
}
