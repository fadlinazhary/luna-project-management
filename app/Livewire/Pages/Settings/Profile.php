<?php

namespace App\Livewire\Pages\Settings;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Profile extends Component
{
    use WithFileUploads;

    public User $user;

    // TODO: Make save profile
    public string $name;
    public string $username;
    public string $bio;

    public $avatar;

    public function mount()
    {
        $this->name = $this->user->profile->name;
        $this->username = $this->user->username;
        $this->bio = $this->user->profile->bio;
    }

    public function updateAvatar()
    {
        $this->validate([
            'avatar' => ['required', 'image', 'max:2048'],
        ]);

        if ($this->user->profile->avatar) {
            Storage::disk('public')->delete($this->user->profile->avatar);
        }

        $filename = uniqid() . '.' . $this->avatar->getClientOriginalExtension();

        $path = $this->avatar->storeAs('avatars', $filename, 'public');

        $this->user->profile()->update([
            'avatar' => $path,
        ]);

        session()->flash('message', 'Profile photo updated successfully!');
    }

    public function updateProfile()
    {
        $this->validate([
            'name' => ['required', 'string'],
            'bio' => ['required', 'string'],
        ]);

        $user = $this->user;

        $user->profile->update([
            'name' => $this->name,
            'bio' => $this->bio,
        ]);

        session()->flash('message', 'Profile updated successfully.');
    }

    public function render()
    {
        return view('livewire.pages.settings.profile');
    }
}
