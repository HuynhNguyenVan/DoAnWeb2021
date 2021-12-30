<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\HomeSlider;
use Livewire\Component;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminAddHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title, $subtitle, $price, $link, $image, $status;

    public function mount()
    {
        $this->status = 0;
    }

    public function addSlider()
    {
        $slider = new HomeSlider();
        $slider->title = $this->title;
        $slider->subtitle = $this->subtitle;
        $slider->price = $this->price;
        $slider->link = $this->link;
        $imageName = Carbon::now()->timestamp. '.' . $this->image->extension();
        $this->image->storeAs('sliders',$imageName);
        $slider->image = $imageName;
        $slider->status = $this->status;
        $slider->save();
        session()->flash('message','Slider has been created successfully!');
    }

    public function render()
    {

        return view('livewire.admin.slider.admin-add-home-slider-component')->layout('layouts.base');
    }
}
