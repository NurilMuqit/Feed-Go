<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'thumbnail','slug', 'category_id'];

    public function category()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
