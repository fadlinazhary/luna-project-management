<?php

namespace App\Livewire\Pages\Settings;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Account extends Component
{
    public User $user;

    public function deleteAccount()
    {
        $user = $this->user;

        Auth::logout();

        if ($user->profile->avatar && Storage::disk('public')->exists($user->profile->avatar)) {
            Storage::disk('public')->delete($user->profile->avatar);
        }

        $user->delete();
        
        session()->flash('message', 'Account deleted.');
        return redirect()->route('login');
    }

    public function render()
    {
        return view('livewire.pages.settings.account');
    }
}
