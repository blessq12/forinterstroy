<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Slug extends Model
{
    use HasFactory;

    public function slugCategory()
    {
        return $this->belongsTo(SlugCategory::class);
    }
}
