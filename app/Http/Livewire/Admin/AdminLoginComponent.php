<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AdminLoginComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-login-component')->layout('layouts.app');
    }
}
