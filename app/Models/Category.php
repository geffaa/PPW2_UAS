<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function books()
    {
        return $this->belongsToMany(Book::class);
    }
}

class Book extends Model
{
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
}
