<?php

namespace App\Livewire\Components;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class Sidebar extends Component
{
    public $menus = [
        ['name' => 'Dashboard', 'icon' => 'o-home', 'route' => 'dashboard'],
        ['name' => 'Projects', 'icon' => 'o-clipboard-document-list', 'route' => 'projects'],
        ['name' => 'Clients', 'icon' => 'o-hand-thumb-up', 'route' => 'dashboard'],
        ['name' => 'Users', 'icon' => 'o-user-group', 'route' => 'users'],
        ['name' => 'Settings', 'icon' => 'o-cog-6-tooth', 'route' => 'settings']
    ];

    public string $currentRoute;

    public function mount()
    {
        $this->currentRoute = Route::currentRouteName();
    }

    /**
     * Render the component
     */
    public function render()
    {
        return view('livewire.components.sidebar');
    }
}
