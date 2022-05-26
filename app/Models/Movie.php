<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    public function autor()
    {
        return $this->belongsTo(Autor::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
