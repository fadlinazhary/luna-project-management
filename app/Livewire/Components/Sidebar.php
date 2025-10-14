<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Sidebar extends Component
{
    public $menus = [
        ['name' => 'Dashboard', 'icon' => 'home', 'route' => 'dashboard'],
        ['name' => 'Projects', 'icon' => 'home', 'route' => 'dashboard'],
        ['name' => 'Clients', 'icon' => 'home', 'route' => 'dashboard'],
        ['name' => 'Users', 'icon' => 'home', 'route' => 'dashboard'],
    ];

    /**
     * Render the component
     */
    public function render()
    {
        return view('livewire.components.sidebar');
    }
}
