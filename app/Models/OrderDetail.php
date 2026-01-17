<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class OrderDetail extends Model
{
    protected $fillable = ['order_id', 'product_id', 'quantity_ordered', 'price_at_purchase'];

    protected $casts = [
        'quantity_ordered' => 'integer',
        'price_at_purchase' => 'decimal:2',
    ];

    public function order():BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
    
    public function product():BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

        public function getSubtotalAttribute(): float
    {
        return $this->quantity_ordered * $this->price_at_purchase;
    }

    public function getSubtotalFormattedAttribute(): string
    {
        return 'Rp ' . number_format($this->subtotal, 0, ',', '.');
    }

    public function getPriceFormattedAttribute(): string
    {
        return 'Rp ' . number_format($this->price_at_purchase, 0, ',', '.');
    }
}
