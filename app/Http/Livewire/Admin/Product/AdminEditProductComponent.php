<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use Carbon\Carbon;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_desc;
    public $description;
    public $regu_price;
    public $sale_price;
    public $SKU;
    public $stock_stutus;
    public $featured;
    public $qty;
    public $image;
    public $category_id;
    public $newimage;
    public $product_id;

    public function mount($product_slug)
    {
        $product = Product::where('slug',$product_slug)->first();
        $this->name              = $product->name;
        $this->slug              = $product->slug;
        $this->short_desc        = $product->short_desc;
        $this->description       = $product->description;
        $this->regu_price        = $product->regu_price;
        $this->sale_price        = $product->sale_price;
        $this->SKU               = $product->SKU;
        $this->stock_stutus      = $product->stock_stutus;
        $this->featured          = $product->featured;
        $this->qty               = $product->qty;
        $this->image             = $product->image;
        $this->category_id       = $product->category_id;
        $this->product_id        = $product->id;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);
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
        if($this->newimage)
        {
            $imageName = Carbon::now()->timestamp. '.' . $this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Product has been updated successfully!');
    }

    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.product.admin-edit-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
