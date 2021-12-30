<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;

class AdminOrderComponent extends Component
{
    public function render()
    {
        $orders = Order::orderBy('created_at','DESC')->paginate(12);
        return view('livewire.admin.order.admin-order-component',['orders' => $orders])->layout('layouts.base');
    }
}
