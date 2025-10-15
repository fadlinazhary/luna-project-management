<?php

namespace App\Livewire\Components;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Topbar extends Component
{
    // Get user
    public User $user;

    
    public function mount()
    {
        $this->user = Auth::user();
    }

    public function render()
    {
        return view('livewire.components.topbar');
    }
}
