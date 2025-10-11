<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::get('/login', Login::class);
Route::get('/register', Register::class);

Route::get('/', function() {
    return "You are logged in";
});