<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['user_id', 'title','short_description','reading_time', 'content', 'thumbnail', 'status', 'is_featured', 'slug', 'category_id'];
    protected $casts = ['is_featured' => 'boolean'];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
