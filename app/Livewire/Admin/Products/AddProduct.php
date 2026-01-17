<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Str;

class AddProduct extends Component
{   
    use WithFileUploads;

    public $open = false;
    public $product_name;
    public $product_description;
    public $product_price;
    public $product_stock;
    public $product_image;
    public $category_id;

    public $categories;

    protected $listeners = [
        'open-add-product' => 'open',
        'close-product-modal' => 'close',
    ];

    protected $rules = [
        'product_name' => 'required|string|max:255',
        'product_description' => 'required|string',
        'product_price' => 'required|numeric|min:0',
        'product_stock' => 'required|integer|min:0',
        'product_image' => 'required|image|max:512|image',
        'category_id' => 'required|exists:product_categories,id',
    ];

    public function mount()
    {
        $this->refreshCategories();
    }

    public function refreshCategories()
    {
        $this->categories = ProductCategory::orderBy('category')->get();
    }

    public function save()
    {
        $this->validate();

        $imagePath = null;
        if ($this->product_image) {
            $imagePath = $this->product_image->store('products', 'public');
        }

        Product::create([
            'product_name' => $this->product_name,
            'category_id' => $this->category_id,
            'product_price' => $this->product_price,
            'product_stock' => $this->product_stock,
            'product_description' => $this->product_description,
            'product_image' => $imagePath,
            'product_slug' => Str::slug($this->product_name),
            'product_status' => 'available',
        ]);

        $this->dispatch('product-added');
        $this->close();
    }

    public function open()
    {   
        $this->dispatch('close-category-modal')->to('admin.products.add-product-category');
        $this->open = true;
    }

    public function close()
    {
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.admin.products.add-product');
    }
}
