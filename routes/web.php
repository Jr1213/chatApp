<?php

use App\Livewire\Auth\Create;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard\Home;
use Illuminate\Support\Facades\Route;

Route::get('login',Login::class)->name('login');
Route::get('signup', Create::class)->name('signup');
Route::middleware(['auth'])->group(function () {
    Route::get('/', Home::class)->name('home');
});