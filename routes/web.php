<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function() {
    Route::get('/login', \App\Livewire\Auth\Login::class)->name('login');
    Route::get('/register', \App\Livewire\Auth\Register::class)->name('register');    
});

Route::middleware('auth')->group(function() {
    Route::get('/', \App\Livewire\Pages\Dashboard::class)->name('dashboard');
    Route::get('/users', \App\Livewire\Pages\Users::class)->name('users');

    Route::get('/projects', \App\Livewire\Pages\Projects::class)->name('projects');

    Route::prefix('projects')->name('projects.')->group(function() {
        Route::prefix('{project}')->group(function() {
            Route::get('/', \App\Livewire\Pages\Projects\Show::class)->name('show');
            Route::get('/tasks', \App\Livewire\Pages\Projects\Tasks\AddTask::class)->name('add-task');
            Route::get('/tasks/{task}', \App\Livewire\Pages\Projects\Tasks\EditTask::class)->name('edit-task');
        });
    });

    Route::get('/settings', \App\Livewire\Pages\Settings\SettingsPage::class)->name('settings');

    Route::get('/logout', function(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    });
});