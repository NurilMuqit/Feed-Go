<?php

namespace App\Livewire\Admin\Products;

use Livewire\Component;
use App\Models\Product;

class DeleteProduct extends Component
{   
    public $open = false;
    public $productId;
    public $product_name;

    public $listeners = [
        'open-delete-product' => 'open',
    ];

    public function open($id)
    {      
        $product = Product::findOrFail($id);

        $this->productId = $product->id;
        $this->product_name = $product->product_name;

        $this->open = true;
    }

    public function delete()
    {
        $product = Product::findOrFail($this->productId);
        if($product->product_image && \Storage::disk('public')->exists($product->product_image)) {
            \Storage::disk('public')->delete($product->product_image);
        }
        $product->delete();

        session()->flash('message', 'Produk berhasil dihapus.');

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
        return view('livewire.admin.products.delete-product');
    }
}
