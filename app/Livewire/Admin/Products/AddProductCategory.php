<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\ProductCategory;

class AddProductCategory extends Component
{   
    public $open = false;
    public $category = '';

    protected $listeners = [
        'open-add-product-category' => 'open',
        'close-category-modal' => 'close',
    ];

    protected $rules = [
        'category' => 'required|string|max:255|unique:product_categories,category',
    ];

    public function open()
    {
        $this->dispatch('close-product-modal')
            ->to('admin.products.add-product');

        $this->open = true;
    }

    public function close()
    {
        $this->reset();
        $this->open = false;
    }

    public function save()
    {
        $this->validate();

        ProductCategory::create([
            'category' => $this->category,
        ]);

        $this->dispatch('product-category-added');
        $this->close();
    }

    public function render()
    {
        return view('livewire.admin.products.add-product-category');
    }
}
