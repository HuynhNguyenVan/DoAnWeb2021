<?php

namespace App\Http\Livewire\Admin\Slider;

use App\Models\HomeSlider;
use Livewire\Component;

class AdminHomeSliderComponent extends Component
{
    public function deleteSlider($id)
    {
        $slider = HomeSlider::find($id);
        $slider->delete();
        session()->flash('message','Slider has been deleted successfully!');
    }

    public function render()
    {
        $sliders = HomeSlider::all();
        return view('livewire.admin.slider.admin-home-slider-component',['sliders'=>$sliders])->layout('layouts.base');
    }
}
