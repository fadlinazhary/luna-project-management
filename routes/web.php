<?php

use App\Livewire\Pages\Settings\SettingsPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// TODO: Change into middleware route
Route::middleware('guest')->group(function() {
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');    
});

Route::middleware('auth')->group(function() {
    Route::get('/', \App\Livewire\Pages\Dashboard::class)->name('dashboard');
    Route::get('/users', \App\Livewire\Pages\Users::class)->name('users');

    Route::get('/projects', \App\Livewire\Pages\Projects::class)->name('projects');

    Route::prefix('projects')->name('projects.')->group(function() {
        Route::get('/{project}', \App\Livewire\Pages\Projects\Show::class)->name('show');
    });

    Route::get('/settings', \App\Livewire\Pages\Settings\SettingsPage::class)->name('settings');

    Route::get('/logout', function(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    });
});