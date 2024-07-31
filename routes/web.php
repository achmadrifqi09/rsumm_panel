<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Auth\Login;
use App\Livewire\Dashboard;
use App\Livewire\User\Account;
use App\Livewire\TestingPage;

Route::group(['middleware' => 'guest'], function () {
    Route::get('/login', Login::class)->name('login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/testing-menu', TestingPage::class)->name('testing');
    Route::get('/user/account', account::class)->name('profile');
});
