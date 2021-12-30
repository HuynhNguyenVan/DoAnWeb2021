<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name, $slug, $short_desc, $description, $regu_price, $sale_price, $SKU, $stock_stutus, $featured, $qty, $image, $category_id;

    public function mount()
    {
        $this->stock_stutus = 'instock';
        $this->featured = 0;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name);
    }

    public function addProduct()
    {
        $product = new Product();
        $product->name              = $this->name;
        $product->slug              = $this->slug;
        $product->short_desc        = $this->short_desc;
        $product->description       = $this->description;
        $product->regu_price        = $this->regu_price;
        $product->sale_price        = $this->sale_price;
        $product->SKU               = $this->SKU;
        $product->stock_stutus      = $this->stock_stutus;
        $product->featured          = $this->featured;
        $product->qty               = $this->qty;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('products',$imageName);
        $product->image = $imageName;
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Product has been created successfully!');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.product.admin-add-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
