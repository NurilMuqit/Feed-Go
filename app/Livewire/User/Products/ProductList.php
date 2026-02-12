<?php

namespace App\Livewire\User\Products;

use Livewire\Component;
use App\Models\Product;
use App\models\ProductCategory;

class ProductList extends Component
{   
    public $search = '';
    public $selectedCategory = null;
    public $sortBy = '';

    public function resetFilter()
    {
        $this->reset(['search', 'selectedCategory', 'sortBy']);
    }

    public function render()
    {   
        $products = Product::with('category')->where('product_status', 'available');

        if ($this->search) {
            $products->where(function($query) {
                $query->where('product_name', 'like', '%' . $this->search . '%')
                      ->orWhereHas('category', function($q) {
                          $q->where('category', 'like', '%' . $this->search . '%');
                      });
            });
        }

        if ($this->selectedCategory) {
            $products->where('category_id', $this->selectedCategory);
        }

        if ($this->sortBy === 'termurah') {
            $products->orderByRaw('COALESCE(product_discount_price, product_price) asc');
        } elseif ($this->sortBy === 'termahal') {
            $products->orderByRaw('COALESCE(product_discount_price, product_price) desc');
        } elseif ($this->sortBy === 'terbaru') {
            $products->latest();
        } elseif ($this->sortBy === 'terlama') {
            $products->oldest();
        } else {
            $products->latest();
        }

        return view('livewire.user.products.product-list', [
            'products' => $products->get(),
            'categories' => ProductCategory::orderBy('category')->get(),
        ]);
    }
}
