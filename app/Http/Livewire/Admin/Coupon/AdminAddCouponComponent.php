<?php

namespace App\Http\Livewire\Admin\Coupon;

use App\Models\Coupon;
use Livewire\Component;

class AdminAddCouponComponent extends Component
{
    public $code,$type, $value, $cart_value;

    public function storeCoupon(){
        $coupon = new Coupon();
        $coupon->code = $this->code;
        $coupon->type = $this->type;
        $coupon->value = $this->value;
        $coupon->cart_value = $this->cart_value;
        $coupon->save();
        session()->flash('message','Coupon has been created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.coupon.admin-add-coupon-component')->layout('layouts.base');
    }
}
