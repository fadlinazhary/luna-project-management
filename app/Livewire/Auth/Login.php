<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public string $email;
    public string $password;

    /**
     * Render the login page
     */
    public function render()
    {
        return view('livewire.auth.login');
    }

    /**
     * Make a login page
     */
    public function login()
    {
        $credentials = $this->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
    }
}
