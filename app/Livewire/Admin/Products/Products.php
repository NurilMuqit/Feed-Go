<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;

class Products extends Component
{   
    use WithPagination;

    protected $paginationTheme = 'tailwind';
    
    protected $listeners = [
        'product-added' => '$refresh',
        'product-updated' => '$refresh',
        'product-deleted' => '$refresh',
    ];

    public function getProductsProperty()
    {
        return Product::with('category')
        
            ->paginate(5);
    }
    
    public function render()
    {
        return view('livewire.admin.products.products');
    }
}
