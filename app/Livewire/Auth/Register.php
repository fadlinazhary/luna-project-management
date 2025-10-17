<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest')]
#[Title('Create a Luna Account')]
class Register extends Component
{
    public string $name;
    public string $email;
    public string $password;
    public string $password_confirmation;

    /**
     * Register method
     */
    public function register()
    {
        $validated = $this->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::min(8)->letters()->numbers()->symbols()->uncompromised()],
        ]);
        
        $username = strtolower(str_replace(' ', '_', $validated['name']));

        $user = User::create([
            'username' => $username,
            'email' => $validated['email'],
            'password' => $validated['password'],
        ]);

        if ($user) {
            $user->profile()->create([
                'name' => $validated['name'],
            ]);
            session()->flash('message', 'Account has been successfully created! Please log in!');
            return redirect('/login');
        }

        $this->addError('register', '');
    }

    /**
     * Render the page
     */
    public function render()
    {
        return view('livewire.pages.auth.register');
    }
}
