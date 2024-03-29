<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    //One to Many
    public function services(){
        return $this->hasMany(Service::class);
    }
    // One to Many Inverse
    public function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

    // One to Many
    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }
}
