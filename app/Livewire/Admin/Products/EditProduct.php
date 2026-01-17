<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Product;
use App\Models\ProductCategory;

class EditProduct extends Component
{   
    use WithFileUploads;

    public $open = false;
    public $productId;

    public $product_name;
    public $product_description;
    public $product_price;
    public $product_stock;
    public $category_id;
    public $product_image;
    public $old_image;

    protected $listeners = [
        'open-edit-product' => 'open',
    ];

    protected function rules()
    {
        return [
            'product_name' => 'required|string|max:255',
            'product_description' => 'required|string',
            'product_price' => 'required|numeric|min:0',
            'product_stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:product_categories,id',
            'product_image' => 'nullable|image|max:512|image',
        ];
    }
    
    public function open($id)
    {      
        $product = Product::findOrFail($id);

        $this->productId = $product->id;
        $this->product_name = $product->product_name;
        $this->product_description = $product->product_description;
        $this->product_price = $product->product_price;
        $this->product_stock = $product->product_stock;
        $this->category_id = $product->category_id;
        $this->old_image = $product->product_image;

        $this->open = true;
    }

    public function save()
    {
        $this->validate();

        $imagePath = $this->old_image;

    if ($this->product_image) {
        if ($this->old_image && \Storage::disk('public')->exists($this->old_image)) {
            \Storage::disk('public')->delete($this->old_image);
        }
        
        $imagePath = $this->product_image->store('products', 'public');
    }

        Product::where('id', $this->productId)->update([
            'product_name' => $this->product_name,
            'product_description' => $this->product_description,
            'product_price' => $this->product_price,
            'product_stock' => $this->product_stock,
            'category_id' => $this->category_id,
            'product_image' => $imagePath,
        ]);

        $this->dispatch('product-updated');
        $this->close();
    }

    public function close()
    {
        $this->reset();
        $this->open = false;
    }

    public function render()
    {
        return view('livewire.admin.products.edit-product',[
            'categories' => ProductCategory::all(),
        ]);
    }
}
