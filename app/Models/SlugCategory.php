<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlugCategory extends Model
{
    use HasFactory;

    public function slugs(){
        return $this->hasMany(Slug::class);
    }
    public function slugCount(){
        return $this->hasMany(Slug::class)->count();
    }
}
