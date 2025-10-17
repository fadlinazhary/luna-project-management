<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Projects;
use App\Livewire\Pages\Settings\SettingsPage;
use App\Livewire\Pages\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// TODO: Change into middleware route
Route::middleware('guest')->group(function() {
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class)->name('register');    
});

Route::middleware('auth')->group(function() {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/users', Users::class)->name('users');
    Route::get('/projects', Projects::class)->name('projects');

    Route::get('/settings', SettingsPage::class)->name('settings');

    Route::get('/logout', function(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    });
});