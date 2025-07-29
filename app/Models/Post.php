<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    public const Published = 1;
    public const Drafted = 0;

    protected $fillable = ['gallery_id', 'category_id', 'title', 'description', 'is_publish'];

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
