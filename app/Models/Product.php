<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['category_id', 'product_name', 'product_vendor', 'product_description', 'product_price', 'product_stock', 'product_image', 'product_slug'];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }
}
