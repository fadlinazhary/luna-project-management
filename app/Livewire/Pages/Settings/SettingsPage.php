<?php

namespace App\Livewire\Pages\Settings;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SettingsPage extends Component
{
    public function render()
    {
        return view('livewire.pages.settings.settings-page', [
            'user' => Auth::user(),
        ]);
    }
}
