<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.guest')]
#[Title('Login to Luna')]
class Login extends Component
{
    public string $email;
    public string $password;

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

        $this->addError('login', 'Wrong email or password. Please try again!');
    }

    /**
     * Render the login page
     */
    public function render()
    {
        return view('livewire.pages.auth.login');
    }
}
